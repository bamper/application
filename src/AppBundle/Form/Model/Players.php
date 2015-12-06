<?php

namespace AppBundle\Form\Model;

class Players
{

    protected $minimumRank;
    protected $maximumRank;
    protected $gameType;

    public function getMinimumRank()
    {
        return $this->minimumRank;
    }

    public function setMinimumRank($minimumRank)
    {
        $this->minimumRank = $minimumRank;
    }

    public function getMaximumRank()
    {
        return $this->maximumRank;
    }

    public function setMaximumRank($maximumRank)
    {
        $this->maximumRank = $maximumRank;
    }

    public function getGameType()
    {
        return $this->gameType;
    }

    public function setGameType($gameType)
    {
        $this->gameType = $gameType;
    }

}