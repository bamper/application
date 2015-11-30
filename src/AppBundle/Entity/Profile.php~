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
    *@ORM\OneToOne(targetEntity="User", mappedBy="profile")
    */
    private $user;

    /**
    * @var string
    *
    * @ORM\Column(name="in_queue", type="boolean", nullable=true)
    */
    private $inQueue;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     */
    private $profileData;
    private $userStats;
    private $friends;
    private $achievements;

    /**
    *@ORM\Column(name="is_playing", type="json_array", nullable=true)
    */
    private $isPlaying;


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
     * Set inQueue
     *
     * @param boolean $inQueue
     * @return Profile
     */
    public function setInQueue($inQueue)
    {
        $this->inQueue = $inQueue;

        return $this;
    }

    /**
     * Get inQueue
     *
     * @return boolean 
     */
    public function getInQueue()
    {
        return $this->inQueue;
    }

    /**
     * Set steamData
     *
     * @param array $steamData
     * @return Profile
     */
    public function setSteamData($steamData)
    {
        $this->steamData = $steamData;

        return $this;
    }

    /**
     * Get steamData
     *
     * @return array 
     */
    public function getSteamData()
    {
        return $this->steamData;
    }

    /**
     * Set userStats
     *
     * @param array $userStats
     * @return Profile
     */
    public function setUserStats($userStats)
    {
        $this->userStats = $userStats;

        return $this;
    }

    /**
     * Get userStats
     *
     * @return array 
     */
    public function getUserStats()
    {
        return $this->userStats;
    }

    /**
     * Set friends
     *
     * @param array $friends
     * @return Profile
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;

        return $this;
    }

    /**
     * Get friends
     *
     * @return array 
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * Set achievements
     *
     * @param array $achievements
     * @return Profile
     */
    public function setAchievements($achievements)
    {
        $this->achievements = $achievements;

        return $this;
    }

    /**
     * Get achievements
     *
     * @return array 
     */
    public function getAchievements()
    {
        return $this->achievements;
    }

    /**
     * Set isPlaying
     *
     * @param array $isPlaying
     * @return Profile
     */
    public function setIsPlaying($isPlaying)
    {
        $this->isPlaying = $isPlaying;

        return $this;
    }

    /**
     * Get isPlaying
     *
     * @return array 
     */
    public function getIsPlaying()
    {
        return $this->isPlaying;
    }

    /**
     * Set firstLogin
     *
     * @param boolean $firstLogin
     * @return Profile
     */

    /**
     * Set profileData
     *
     * @param array $profileData
     * @return Profile
     */
    public function setProfileData($profileData)
    {
        $this->profileData = $profileData;

        return $this;
    }

    /**
     * Get profileData
     *
     * @return json_array
     */
    public function getProfileData()
    {
        return $this->profileData;
    }
}
