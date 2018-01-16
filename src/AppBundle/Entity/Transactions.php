<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transactions
 *
 * @ORM\Table(name="transactions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TransactionsRepository")
 */
class Transactions
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
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime")
     */
    private $date;

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
     * @ORM\Column(name="IdOffer", type="integer", unique=true)
     */
    private $idOffer;

    /**
     * @var int
     *
     * @ORM\Column(name="Price", type="integer")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="Fee", type="integer")
     */
    private $fee;


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
     * @return Transactions
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
     * @return Transactions
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Transactions
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idSourceUser
     *
     * @param integer $idSourceUser
     *
     * @return Transactions
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
     * @return Transactions
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
     * Set idOffer
     *
     * @param integer $idOffer
     *
     * @return Transactions
     */
    public function setIdOffer($idOffer)
    {
        $this->idOffer = $idOffer;

        return $this;
    }

    /**
     * Get idOffer
     *
     * @return int
     */
    public function getIdOffer()
    {
        return $this->idOffer;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Transactions
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
     * Set fee
     *
     * @param integer $fee
     *
     * @return Transactions
     */
    public function setFee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Get fee
     *
     * @return int
     */
    public function getFee()
    {
        return $this->fee;
    }
}

