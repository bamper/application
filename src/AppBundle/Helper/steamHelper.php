<?php

namespace AppBundle\Helper;

use Carbon\Carbon;
use Lsw\ApiCallerBundle\Call\HttpGetJson;
use Symfony\Component\DependencyInjection\ContainerAware;
use AppBundle\Entity\User;

class SteamHelper extends ContainerAware
{
    protected $id;
    protected $name;
    protected $url;

    /**
     * @param $id
     * @return mixed
     *
     * Return player summaries: steamid, personaname, lastlogoff, profileurl, avatar, personastate, timecreated
     */
    public function getPlayerSummaries($id)
    {
        $json = $this->container->get('api_caller')->call(new HttpGetJson("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$this->container->getParameter('steam.api_key')."&steamids=".$id."", $parameters = array()));
        return $json->response->players[0];
    }

    public function update(User $user)
    {
        /*
         * Get user Steam data
         */
        $data = $this->getPlayerSummaries($user->getProfile()->getSteamID());

        /*
         * Update fields
         */
        $user->getProfile()->setSteamPersonaname($data->personaname);
        $user->getProfile()->setSteamAvatar($data->avatar);
        $user->getProfile()->setSteamAvatarmediun($data->avatarmedium);
        $user->getProfile()->setSteamAvatarfull($data->avatarfull);
        $user->getProfile()->setSteamProfileurl($data->profileurl);
        $user->getProfile()->setSteamTimecreated(Carbon::createFromTimestamp($data->timecreated));
        $user->getProfile()->setSteamLastlogoff(Carbon::createFromTimestamp($data->lastlogoff));

        /*
         * Update database
         */
        $em = $this->container->get('doctrine')->getManager();
        $em->flush();
    }
}