<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 *
 * @ORM\Table(name="app_profiles")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProfileRepository")
 */
class Profile
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
     * @var string
     *
     * @ORM\Column(name="steamID", type="string", length=255, nullable=true)
     */
    private $steamID;

    /**
    * @var string
    *
    * @ORM\Column(name="name", type="string", length=255, nullable=true)
    */
    private $name;

    /**
    * @var string
    *
    * @ORM\Column(name="surname", type="string", length=255, nullable=true)
    */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="rank", type="integer", nullable=true)
     */
    private $rank;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $steam_personaname;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $steam_lastlogoff;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $steam_profileurl;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $steam_avatar;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $steam_avatarmediun;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $steam_avatarfull;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $steam_timecreated;

    /**
    *@ORM\OneToOne(targetEntity="User", mappedBy="profile")
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
     * Set steamID
     *
     * @param string $steamID
     * @return Profile
     */
    public function setSteamID($steamID)
    {
        $this->steamID = $steamID;

        return $this;
    }

    /**
     * Get steamID
     *
     * @return string 
     */
    public function getSteamID()
    {
        return $this->steamID;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Profile
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Profile
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     * @return Profile
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set profileData
     *
     * @param array $profileData
     * @return Profile
     */

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Profile
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

    /**
     * Set steam_personaname
     *
     * @param string $steamPersonaname
     * @return Profile
     */
    public function setSteamPersonaname($steamPersonaname)
    {
        $this->steam_personaname = $steamPersonaname;
    
        return $this;
    }

    /**
     * Get steam_personaname
     *
     * @return string 
     */
    public function getSteamPersonaname()
    {
        return $this->steam_personaname;
    }

    /**
     * Set steam_lastlogoff
     *
     * @param \DateTime $steamLastlogoff
     * @return Profile
     */
    public function setSteamLastlogoff($steamLastlogoff)
    {
        $this->steam_lastlogoff = $steamLastlogoff;
    
        return $this;
    }

    /**
     * Get steam_lastlogoff
     *
     * @return \DateTime 
     */
    public function getSteamLastlogoff()
    {
        return $this->steam_lastlogoff;
    }

    /**
     * Set steam_profileurl
     *
     * @param string $steamProfileurl
     * @return Profile
     */
    public function setSteamProfileurl($steamProfileurl)
    {
        $this->steam_profileurl = $steamProfileurl;
    
        return $this;
    }

    /**
     * Get steam_profileurl
     *
     * @return string 
     */
    public function getSteamProfileurl()
    {
        return $this->steam_profileurl;
    }

    /**
     * Set steam_avatar
     *
     * @param string $steamAvatar
     * @return Profile
     */
    public function setSteamAvatar($steamAvatar)
    {
        $this->steam_avatar = $steamAvatar;
    
        return $this;
    }

    /**
     * Get steam_avatar
     *
     * @return string 
     */
    public function getSteamAvatar()
    {
        return $this->steam_avatar;
    }
    
    /**
     * Set steam_timecreated
     *
     * @param \DateTime $steamTimecreated
     * @return Profile
     */
    public function setSteamTimecreated($steamTimecreated)
    {
        $this->steam_timecreated = $steamTimecreated;
    
        return $this;
    }

    /**
     * Get steam_timecreated
     *
     * @return \DateTime 
     */
    public function getSteamTimecreated()
    {
        return $this->steam_timecreated;
    }

    /**
     * Set steam_avatarmediun
     *
     * @param string $steamAvatarmediun
     * @return Profile
     */
    public function setSteamAvatarmediun($steamAvatarmediun)
    {
        $this->steam_avatarmediun = $steamAvatarmediun;
    
        return $this;
    }

    /**
     * Get steam_avatarmediun
     *
     * @return string 
     */
    public function getSteamAvatarmediun()
    {
        return $this->steam_avatarmediun;
    }

    /**
     * Set steam_avatarfull
     *
     * @param string $steamAvatarfull
     * @return Profile
     */
    public function setSteamAvatarfull($steamAvatarfull)
    {
        $this->steam_avatarfull = $steamAvatarfull;
    
        return $this;
    }

    /**
     * Get steam_avatarfull
     *
     * @return string 
     */
    public function getSteamAvatarfull()
    {
        return $this->steam_avatarfull;
    }
}
