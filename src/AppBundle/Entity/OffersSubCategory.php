<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffersSubCategory
 *
 * @ORM\Table(name="offers_sub_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OffersSubCategoryRepository")
 */
class OffersSubCategory
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
     * @var string
     *
     * @ORM\Column(name="NameSubCategory", type="string", length=255)
     */
    private $nameSubCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="Categoryid", type="integer", unique=true)
     */
    private $categoryid;


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
     * @return OffersSubCategory
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
     * @return OffersSubCategory
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
     * Set nameSubCategory
     *
     * @param string $nameSubCategory
     *
     * @return OffersSubCategory
     */
    public function setNameSubCategory($nameSubCategory)
    {
        $this->nameSubCategory = $nameSubCategory;

        return $this;
    }

    /**
     * Get nameSubCategory
     *
     * @return string
     */
    public function getNameSubCategory()
    {
        return $this->nameSubCategory;
    }

    /**
     * Set categoryid
     *
     * @param integer $categoryid
     *
     * @return OffersSubCategory
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return int
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }
}

