<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="app_players")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\PlayerRepository")
 */
class Player
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     *@ORM\OneToOne(targetEntity="User", mappedBy="player")
     */
    private $user;
    

    /**
     * Get id
     *
     * @return integer 
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set player
     *
     * @param \AppBundle\Entity\User $player
     * @return Player
     */
    public function setPlayer(\AppBundle\Entity\User $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \AppBundle\Entity\User 
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Player
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
