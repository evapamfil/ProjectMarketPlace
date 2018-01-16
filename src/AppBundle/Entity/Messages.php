<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessagesRepository")
 */
class Messages
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CreatedDate", type="datetime")
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UptatedDate", type="datetime")
     */
    private $uptatedDate;

    /**
     * @var int
     *
     * @ORM\Column(name="IdSourceUser", type="integer", unique=true)
     */
    private $idSourceUser;

    /**
     * @var int
     *
     * @ORM\Column(name="IdDestUser", type="integer", unique=true)
     */
    private $idDestUser;

    /**
     * @var int
     *
     * @ORM\Column(name="OfferId", type="integer", unique=true)
     */
    private $offerId;

    /**
     * @var string
     *
     * @ORM\Column(name="Message", type="string", length=255)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="Object", type="string", length=255)
     */
    private $object;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return Messages
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set uptatedDate
     *
     * @param \DateTime $uptatedDate
     *
     * @return Messages
     */
    public function setUptatedDate($uptatedDate)
    {
        $this->uptatedDate = $uptatedDate;

        return $this;
    }

    /**
     * Get uptatedDate
     *
     * @return \DateTime
     */
    public function getUptatedDate()
    {
        return $this->uptatedDate;
    }

    /**
     * Set idSourceUser
     *
     * @param integer $idSourceUser
     *
     * @return Messages
     */
    public function setIdSourceUser($idSourceUser)
    {
        $this->idSourceUser = $idSourceUser;

        return $this;
    }

    /**
     * Get idSourceUser
     *
     * @return int
     */
    public function getIdSourceUser()
    {
        return $this->idSourceUser;
    }

    /**
     * Set idDestUser
     *
     * @param integer $idDestUser
     *
     * @return Messages
     */
    public function setIdDestUser($idDestUser)
    {
        $this->idDestUser = $idDestUser;

        return $this;
    }

    /**
     * Get idDestUser
     *
     * @return int
     */
    public function getIdDestUser()
    {
        return $this->idDestUser;
    }

    /**
     * Set offerId
     *
     * @param integer $offerId
     *
     * @return Messages
     */
    public function setOfferId($offerId)
    {
        $this->offerId = $offerId;

        return $this;
    }

    /**
     * Get offerId
     *
     * @return int
     */
    public function getOfferId()
    {
        return $this->offerId;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Messages
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set object
     *
     * @param string $object
     *
     * @return Messages
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }
}

