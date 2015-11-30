<?php

namespace AppBundle\Helper;

use Lsw\ApiCallerBundle\Call\HttpGetJson;
use Symfony\Component\DependencyInjection\ContainerAware;


class steamDataHelper extends ContainerAware
{
    protected $API_KEY;
    protected $steamID;
    protected $appID;
    protected $format;
    protected $profile;
    protected $stats;
    protected $achievements;

    public function __construct()
    {
        $this->API_KEY = "152578BD7C0CDC7F213C8F9001C2FBF3";
        $this->appID = "730";
        $this->format = "json";
    }

    public function getProfileCall() {
        return $this->container->get('api_caller')->call(new HttpGetJson("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$this->API_KEY."&steamids=".$this->steamID."", $parameters = array()));
    }

    public function getStatsCall() {
        return $this->container->get('api_caller')->call(new HttpGetJson("http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=".$this->appID."&key=".$this->API_KEY."&steamid=".$this->steamID."&format=".$this->format."", $parameters = array()));
    }

    public function getAchievementsCall(){
        return $this->container->get('api_caller')->call(new HttpGetJson("http://api.steampowered.com/ISteamUserStats/GetPlayerAchievements/v0001/?appid=".$this->appID."&key=".$this->API_KEY."&steamid=".$this->steamID."", $parameters = array()));

    }

    public function getFriendsCall() {
        return null;
    }

    public function getAllSteamData($steamID)
    {
        $this->steamID = $steamID;
        $this->profile = $this->getProfileCall();/*
        $this->stats = $this->getStatsCall();
        $this->achievements = $this->getAchievementsCall();*/
        var_dump($this->profile);die;
    }

    public function setAllSteamData($player)
    {
        $player->getProfile()->setSteamData($this->profile);/*
        $player->getProfile()->setAchievements($this->achievements);*/
        return $player;
    }
}