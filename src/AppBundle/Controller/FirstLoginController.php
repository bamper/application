<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\FirstLoginType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class FirstLoginController extends Controller
{

    public function firstLoginAction(Request $request)
    {
        $user = $this->getUser();

        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw $this->createAccessDeniedException();
        }

        if(!$user->getFirstLogin())
        {
            return $this->redirectToRoute('user_profile_show');
        }

        $profile = $user->getProfile();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new FirstLoginType());
        $form->handleRequest($request);

        if($form->isValid())
        {
            $data = $form->getData();

            $profile->setName($data->getName());
            $profile->setSurname($data->getSurname());
            $profile->setRank($data->getRank());
            $profile->setSteamID($data->getSteamID());

            $user->setFirstLogin(false);
            $this->container->get('app.steam')->update($this->getUser());

            $em->persist($user);
            $em->persist($profile);
            $em->flush();

            return $this->render('AppBundle:FirstLogin:success.html.twig');
        }

        return $this->render('AppBundle:FirstLogin:firstLogin.html.twig', array(
            'form' => $form->createView()
        ));
    }

}