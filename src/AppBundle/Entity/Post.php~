<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Announcement
 *
 * @ORM\Table(name="app_post")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\PostRepository")
 */
class Post
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
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer")
     */
    private $views;

    /**
     * @var integer
     *
     * @ORM\Column(name="numberOfAnswers", type="integer")
     */
    private $numberOfAnswers;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     *@ORM\OneToOne(targetEntity="User", mappedBy="post")
     */
    private $user;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
        $this->numberOfAnswers = 0;
        $this->views = 0;
        $this->note = null;
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Announcement
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return Announcement
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set answers
     *
     * @param integer $answers
     * @return Announcement
     */
    public function setAnswers($answers)
    {
        $this->answers = $answers;

        return $this;
    }

    /**
     * Get answers
     *
     * @return integer 
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Set numberOfAnswers
     *
     * @param integer $numberOfAnswers
     * @return Announcement
     */
    public function setNumberOfAnswers($numberOfAnswers)
    {
        $this->numberOfAnswers = $numberOfAnswers;

        return $this;
    }

    /**
     * Get numberOfAnswers
     *
     * @return integer 
     */
    public function getNumberOfAnswers()
    {
        return $this->numberOfAnswers;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Announcement
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Announcement
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }



    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Announcement
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
     * Set type
     *
     * @param integer $type
     * @return Post
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }
}
