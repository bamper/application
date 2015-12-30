<?php

namespace AppBundle\Form\Model;

class SearchPost
{

    protected $minimumRank;
    protected $maximumRank;
    protected $type;

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

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

}