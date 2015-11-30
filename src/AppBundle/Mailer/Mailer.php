<?php

namespace AppBundle\Mailer;

const MAILER_FROM = "admin@xyz.com";

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Mailer
{
    private $mailer;
    private $templating;

    public function __construct(ContainerInterface $container)
    {
        $this->mailer = $container->get("mailer");
        $this->templating = $container->get('templating');
    }

    public function sendConfirmationEmailMessage(User $user)
    {
        /* Variables used in template */
        $confirmationToken = $user->getConfirmationToken();
        $username = $user->getUsername();
        /* END */

        /* Variables used in mail sending function */

        $subject = 'Aktywacja konta';
        $email = $user->getEmail();

        $renderedTemplate = $this->templating->render('AppBundle:Emails:registration.html.twig', array(
            'username' => $username,
            'confirmationToken' => $confirmationToken
        ));
        /* END */

        $this->sendEmailMessage($renderedTemplate, $subject, $email);
    }

    public function sendResettingEmailMessage(User $user)
    {
        /* Variables used in template */
        $confirmationToken = $user->getConfirmationToken();
        $username = $user->getUsername();
        /* END */

        /* Variables used in mail sending function */
        $subject = 'Resetowanie hasła';
        $email = $user->getEmail();
        $renderedTemplate = $this->templating->render('AppBundle:Emails:passwordResetting.html.twig', array(
            'username' => $username,
            'confirmationToken' => $confirmationToken
        ));
        /* END */

        $this->sendEmailMessage($renderedTemplate, $subject, $email);

    }

    protected function sendEmailMessage($renderedTemplate, $subject, $email)
    {

            $message = \Swift_Message::newInstance()
                ->setSubject($subject)
                ->setFrom(MAILER_FROM)
                ->setReplyTo(MAILER_FROM)
                ->setTo($email)
                ->setBody($renderedTemplate, "text/html");

            $this->mailer->send($message);

    }
}