<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\EditProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\RegistrationType;
use AppBundle\Form\Model\Registration;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;
use AppBundle\Entity\Profile;
use Lsw\ApiCallerBundle\Call\HttpGetJson;



class ProfileController extends Controller
{
    
    public function showAction()
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw $this->createAccessDeniedException();
        }

        $user = $this->getUser();
      /*  $lastChangeTimeHelper = $this->get('app.helper.lastChangeTime');
        $lastChangeTimeHelper->lastChangeTime();
        $user = $this->getUser();

        $steamID = $user->getProfile()->getSteamID();
        $steamDataHelper = $this->get('app.helper.getSteamData');
        $steamDataHelper->getSteamData($steamID);
        $steamDataHelper->setSteamData($user);*/

        return $this->render(
            'AppBundle:Profile:show.html.twig', array(
                'user' => $user
            )
        );
    }

    public function editAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw $this->createAccessDeniedException();
        }
/*
        $lastChangeTimeHelper = $this->get('app.helper.lastChangeTime');
        $lastChangeTimeHelper->lastChangeTime();
*/

        $profile = $user->getProfile();
        $form = $this->createForm(new EditProfileType(), array(
            'user' => $user,
            'profile' => $profile
        ));

        $form->handleRequest($request);
        if ($form->isValid())
        {
            $edit = $form->getData();
            $user->setUsername($edit["user"]->getUsername());
            $user->setEmail($edit["user"]->getEmail());
            $profile = $user->getProfile();
            $profile->setName(ucfirst(strtolower($edit["profile"]->getName())));
            $profile->setSurname(ucfirst(strtolower($edit["profile"]->getSurname())));
            $profile->setSteamID($edit["profile"]->getSteamID());
            $em->persist($profile);
            $user->setProfile($profile);

            $em->persist($user);
            $em->flush();

        }

        return $this->render('AppBundle:Profile:edit.html.twig',array(
            'form' => $form->createView()
        ));
    }
}