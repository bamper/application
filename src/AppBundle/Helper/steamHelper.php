<?php

namespace AppBundle\Helper;

use Lsw\ApiCallerBundle\Call\HttpGetJson;
use Symfony\Component\DependencyInjection\ContainerAware;
use AppBundle\Entity\User;

class steamHelper extends ContainerAware
{
    protected $id;
    protected $name;
    protected $url;
    protected $avatar;

    public function __construct()
    {

    }

    public function get($id)
    {
        return $this->container->get('api_caller')->call(new HttpGetJson("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$this->container->getParameter('steam.api_key')."&steamids=".$id."", $parameters = array()));
    }

    public function update(User $user)
    {
        $data = $this->get($user->getProfile()->getSteamID());
        $em = $this->container->get('doctrine')->getManager();

        $user->getProfile()->setProfileData($data);
        $em->flush();
    }
}