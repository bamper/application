<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Model\Registration;
use AppBundle\Form\Type\RegistrationType;
use AppBundle\Entity\User;
use AppBundle\Entity\Profile;
use AppBundle\Entity\Player;
use AppBundle\Mailer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\Form;

class RegistrationController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new RegistrationType(), new Registration());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $registration = $form->getData();

            $factory = $this->get('security.encoder_factory');
            $user = new User();

            /**
             * Password hashing
             */
            $encoder = $factory->getEncoder($user);
            $password = $encoder->encodePassword($registration->getUser()->getPassword(), $user->getSalt());
            $registration->getUser()->setPassword($password);
            $em->persist($registration->getUser());

            $profile = new Profile();
            /**
             * Send confirmation email message
             */
            $mailer = $this->get('app.mailer');
            $mailer->sendConfirmationEmailMessage($registration->getUser());

            $em->persist($profile);
            $registration->getUser()->setProfile($profile);
            $em->flush();

            if ($request->isXmlHttpRequest())
            {

                $array = array( 'status' => 200, 'message' => 'Twoje konto zostało utworzone. Musisz potwierdzić swój adres email.' );
                $response = new JsonResponse($array);

                return $response;

            }
        } else {
            if($request->isXmlHttpRequest())
            {
                $errors = $this->get('form.errorMessages')->getErrorMessages($form);
                $array = array( 'status' => 400, 'errors' => $errors);
                $response = new JsonResponse($array);

                return $response;
            }
        }

        return $this->render(
            'AppBundle:Registration:new.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @param Request $request
     * @param $token
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function confirmAction(Request $request, $token)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:User');

        $user = $repository->findUserByConfirmationToken($token);

        if (!$user)
        {
            throw $this->createNotFoundException('Invalid token.');
        }

        $user->setConfirmationToken(null);
        $user->setEnabled(true);

        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('user_registration_confirmed');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function confirmedAction()
    {
        return $this->render('AppBundle:Registration:confirmed.html.twig');
    }

}