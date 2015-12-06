<?php

namespace AppBundle\Handler;

use Carbon\Carbon;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;

class AuthenticationHandler extends ContainerAware implements AuthenticationSuccessHandlerInterface
{

    function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {

        $token->getUser()->setLastLogin(Carbon::now());
        $this->container->get('doctrine')->getEntityManager()->flush();
        $this->container->get('app.steam')->update($token->getUser());

        $firstLogin = $token->getUser()->getFirstLogin();
        if(!$firstLogin)
        {
            return new RedirectResponse($this->container->get('router')->generate('user_profile_show'));
        }
        else
        {
            return new RedirectResponse($this->container->get('router')->generate('user_profile_first_login'));
        }

    }

}