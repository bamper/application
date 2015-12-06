<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AppBundle\Form\Type\newPasswordType;

class ResettingController extends Controller
{

    public function requestAction()
    {
        return $this->render('AppBundle:Resetting:request.html.twig');
    }

    public function sendEmailAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:User');
        $email = $request->request->get('email');

        $user = $repository->findUserByEmail($email);


        if (!$user) {
            return $this->render('AppBundle:Resetting:request.html.twig', array('invalid_email' => $email));
        }


        if($user->isPasswordRequestNonExpired())
        {
            return $this->render('AppBundle:Resetting:passwordResetAlreadyRequested.html.twig');
        }

        if($user->getConfirmationToken() == null)
        {
            $user->generateConfirmationToken();
        }

        $this->get('app.mailer')->sendResettingEmailMessage($user);
        $user->setPasswordRequestedAt(new \DateTime());
        $em->persist($user);
        $em->flush();
        return new Response("DONE.");
    }

    public function resetAction(Request $request, $token)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:User');

        $user = $repository->findUserByConfirmationToken($token);

        if (!$user)
        {
            throw new NotFoundHttpException('Token jest nieprawidłowy');
        }

        $form = $this->createForm(new newPasswordType(), $user);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($user);
            $password = $encoder->encodePassword($data->getPassword(), $user->getSalt());


            $user->setPassword($password);
            $user->setConfirmationToken(null);
            $em->persist($user);
            $em->flush();

            return $this->render('AppBundle:Resetting:success.html.twig');
        }

        return $this->render('AppBundle:Resetting:reset.html.twig', array(
            'token' => $token,
            'form' => $form->createView()
        ));
    }
}