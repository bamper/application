<?php

namespace AppBundle\Entity;

const MAX_TTL = 86400;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Table(name="app_users")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
 */
class User implements AdvancedUserInterface, \Serializable
{


    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     *
     * @Assert\NotBlank(
     *     message = "Nie podałeś nazwy użytkownika"
     * )
     * @Assert\Length(
     *      min = 3,
     *      minMessage = "Twoja nazwa użytkownika powinna składać się z minimum {{ limit }} znaków",
     * )
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank(
     *     message = "Nie podałeś hasła"
     * )
     * @Assert\Length(
     *      min = 6,
     *      minMessage = "Twoje hasło powinno składać się z minimum {{ limit }} znaków",
     * )
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     * @Assert\NotBlank(
     *     message = "Nie podałeś adresu e-mail"
     * )
     * @Assert\Email(
     *      message = "Wprowadzony adres-email jest nieprawidłowy"
     * )
     */
    protected $email;

    /**
     * @ORM\Column(name="enabled", type="boolean")
     */
    protected $enabled;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $confirmationToken;

    /**
     * @ORM\Column(type="integer")
     */
    protected $time;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $lastLogin;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $locked;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $expired;

    protected $expiresAt;

    protected $credentialsExpired;

    protected $credentialsExpireAt;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $firstLogin;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $passwordRequestedAt;

    /**
     * @ORM\OneToOne(targetEntity="Profile", orphanRemoval=true, inversedBy="user")
     */
    protected $profile;

    /**
     * @ORM\OneToOne(targetEntity="Player", orphanRemoval=true, inversedBy="user")
     */
    protected $player;

    /**
     * @ORM\OneToOne(targetEntity="Post", orphanRemoval=true, inversedBy="user")
     */
    protected $post;

    public function __construct()
    {
        $this->enabled = false;
        $this->locked = false;
        $this->expired = false;
        $this->credentialsExpired = false;
        $this->expiresAt = null;
        $this->credentialsExpireAt = null;
        $this->lastLogin = null;
        $this->passwordRequestedAt = null;
        $this->time = time();
        $this->firstLogin = true;
        $this->generateConfirmationToken();

    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
        $this->plainPassword = null;
    }

    public function isAccountNonExpired()
    {
        return !$this->expired;
    }

    public function isAccountNonLocked()
    {
        return !$this->locked;
    }

    public function isEnabled()
    {
        return $this->enabled;
    }

    public function isPasswordRequestNonExpired()
    {
        return $this->getPasswordRequestedAt() instanceof \DateTime &&
        $this->getPasswordRequestedAt()->getTimestamp() + MAX_TTL > time();
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->enabled
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->enabled
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }


    public function isAccountNotExpired()
    {
        if (true === $this->expired)
        {
            return false;
        }

        if (null !== $this->expiresAt && $this->expiresAt->getTimestamp()< time())
        {
            return false;
        }

        return true;
    }

    public function isCredentialsNonExpired()
    {
        if (true === $this->credentialsExpired) {
            return false;
        }
        if (null !== $this->credentialsExpireAt && $this->credentialsExpireAt->getTimestamp() < time()) {
            return false;
        }
        return true;
    }
    public function isCredentialsExpired()
    {
        return !$this->isCredentialsNonExpired();
    }


    /**
     * Set profile
     *
     * @param \AppBundle\Entity\Profile $profile
     * @return User
     */
    public function setProfile(\AppBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \AppBundle\Entity\Profile 
     */
    public function getProfile()
    {
        return $this->profile;
    }


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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return User
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set confirmationToken
     *
     * @param string $confirmationToken
     * @return User
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

    /**
     * Get confirmationToken
     *
     * @return string 
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * Set time
     *
     * @param integer $time
     * @return User
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer 
     */
    public function getTime()
    {
        return $this->time;
    }

    public function generateConfirmationToken()
    {
        $newToken = md5(uniqid(null, true));
        $this->setConfirmationToken($newToken);
    }

    /**
     * Set locked
     *
     * @param boolean $locked
     * @return User
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set expired
     *
     * @param boolean $expired
     * @return User
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;

        return $this;
    }

    /**
     * Get expired
     *
     * @return boolean 
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Set passwordRequestedAt
     *
     * @param \DateTime $passwordRequestedAt
     * @return User
     */
    public function setPasswordRequestedAt($passwordRequestedAt)
    {
        $this->passwordRequestedAt = $passwordRequestedAt;

        return $this;
    }

    /**
     * Get passwordRequestedAt
     *
     * @return \DateTime 
     */
    public function getPasswordRequestedAt()
    {
        return $this->passwordRequestedAt;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     * @return User
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set firstLogin
     *
     * @param boolean $firstLogin
     * @return User
     */
    public function setFirstLogin($firstLogin)
    {
        $this->firstLogin = $firstLogin;

        return $this;
    }

    /**
     * Get firstLogin
     *
     * @return boolean 
     */
    public function getFirstLogin()
    {
        return $this->firstLogin;
    }

    /**
     * Set player
     *
     * @param \AppBundle\Entity\Player $player
     * @return User
     */
    public function setPlayer(\AppBundle\Entity\Player $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \AppBundle\Entity\Player 
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set announcement
     *
     * @param \AppBundle\Entity\Announcement $announcement
     * @return User
     */
    public function setAnnouncement(\AppBundle\Entity\Announcement $announcement = null)
    {
        $this->announcement = $announcement;

        return $this;
    }

    /**
     * Get announcement
     *
     * @return \AppBundle\Entity\Announcement 
     */
    public function getAnnouncement()
    {
        return $this->announcement;
    }

    /**
     * Set post
     *
     * @param \AppBundle\Entity\Post $post
     * @return User
     */
    public function setPost(\AppBundle\Entity\Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \AppBundle\Entity\Post 
     */
    public function getPost()
    {
        return $this->post;
    }
}
