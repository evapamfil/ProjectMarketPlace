<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offers
 *
 * @ORM\Table(name="offers")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OffersRepository")
 */
class Offers
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
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Picture", type="string", length=255)
     */
    private $picture;

    /**
     * @var int
     *
     * @ORM\Column(name="Price", type="integer")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="PostalCode", type="integer")
     */
    private $postalCode;

    /**
     * @var int
     *
     * @ORM\Column(name="IdCategorySub", type="integer", unique=true)
     */
    private $idCategorySub;

    /**
     * @var int
     *
     * @ORM\Column(name="NumberViews", type="integer")
     */
    private $numberViews;

    /**
     * @var int
     *
     * @ORM\Column(name="UserAuthorId", type="integer", unique=true)
     */
    private $userAuthorId;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Offers
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Offers
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Offers
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Offers
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set postalCode
     *
     * @param integer $postalCode
     *
     * @return Offers
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return int
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set idCategorySub
     *
     * @param integer $idCategorySub
     *
     * @return Offers
     */
    public function setIdCategorySub($idCategorySub)
    {
        $this->idCategorySub = $idCategorySub;

        return $this;
    }

    /**
     * Get idCategorySub
     *
     * @return int
     */
    public function getIdCategorySub()
    {
        return $this->idCategorySub;
    }

    /**
     * Set numberViews
     *
     * @param integer $numberViews
     *
     * @return Offers
     */
    public function setNumberViews($numberViews)
    {
        $this->numberViews = $numberViews;

        return $this;
    }

    /**
     * Get numberViews
     *
     * @return int
     */
    public function getNumberViews()
    {
        return $this->numberViews;
    }

    /**
     * Set userAuthorId
     *
     * @param integer $userAuthorId
     *
     * @return Offers
     */
    public function setUserAuthorId($userAuthorId)
    {
        $this->userAuthorId = $userAuthorId;

        return $this;
    }

    /**
     * Get userAuthorId
     *
     * @return int
     */
    public function getUserAuthorId()
    {
        return $this->userAuthorId;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return Offers
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
     * @return Offers
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
}

