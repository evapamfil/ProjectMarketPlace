<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersOffersBookmarker
 *
 * @ORM\Table(name="users_offers_bookmarker")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersOffersBookmarkerRepository")
 */
class UsersOffersBookmarker
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
     * @ORM\Column(name="UserId", type="integer", unique=true)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="OfferId", type="integer", unique=true)
     */
    private $offerId;


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
     * @return UsersOffersBookmarker
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
     * @return UsersOffersBookmarker
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return UsersOffersBookmarker
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set offerId
     *
     * @param integer $offerId
     *
     * @return UsersOffersBookmarker
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
}

