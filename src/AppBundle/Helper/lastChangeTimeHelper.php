<?php

namespace AppBundle\Helper;

use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;


class lastChangeTimeHelper
{
    protected $em;
    protected $user;

    public function __construct(EntityManager $em, SecurityContext $securityContext)
    {
        $this->user = $securityContext->getToken()->getUser();
        $this->em = $em;
    }

    public function lastChangeTime()
    {
        $user = $this->user;
        $em = $this->em;

        $response = new Response();
        $currentCookieValue = 0;
        $currentTime = time();
        $maxTime = 60;

        $request = Request::createFromGlobals();
        $cookies = $request->cookies;
        if (!$cookies->has('lastChangeTime'))
        {
            $response->headers->setCookie(new Cookie('lastChangeTime', time(), time() + (3600 * 48)));
            $response->send();
        }
        else
        {
            $currentCookieValue = $cookies->get('lastChangeTime');
        }

        //DEBUG
        /*
        var_dump($currentCookieValue);
        var_dump($currentTime);
        var_dump($currentTime-$currentCookieValue);
        */

        if ($currentTime-$currentCookieValue > $maxTime)
        {
            $currentCookieValue = $currentTime;
            $response->headers->setCookie(new Cookie('lastChangeTime', $currentCookieValue, time() + (3600 * 48)));
            $response->send();
            $user->setTime(time());
            $em->persist($user);
            $em->flush();
        }
    }
}