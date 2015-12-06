<?php

namespace AppBundle\Controller;

use AppBundle\Form\Model\ChangePassword;
use AppBundle\Form\Type\ChangePasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ChangePasswordController extends Controller
{

    public function changePasswordAction(Request $request)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw $this->createAccessDeniedException();
        }

        $form = $this->createForm(new ChangePasswordType(), new ChangePassword());
        $form->handleRequest($request);

        if($form->isValid())
        {
            $data = $form->getData();
            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($user);
            $newPassword = $encoder->encodePassword($data->getNewPassword(), $user->getSalt());

   /*         if ($data->getOldPassword() == $data->getNewPassword())
            {
                $error = 'Nowe hasło musi yć różne od poprzedniego.';

                return $this->render('AppBundle:ChangePassword:changePassword.html.twig', array(
                    'form' => $form->createView(),
                    'error' => $error
                ));
            }*/
            $user->setPassword($newPassword);

            $em->persist($user);
            $em->flush();

            return $this->render('AppBundle:ChangePassword:success.html.twig')
;        }

        return $this->render('AppBundle:ChangePassword:changePassword.html.twig', array(
            'form' => $form->createView(),
            'error' => $error = null
        ));
    }



}