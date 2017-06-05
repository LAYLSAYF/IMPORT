<?php

namespace FMI\ImportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Price
 *
 * @ORM\Table(name="price")
 * @ORM\Entity(repositoryClass="FMI\ImportBundle\Repository\PriceRepository")
 */
class Price
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
     * @var float
     *
     * @ORM\Column(name="averageprice", type="float")
     */
    private $averageprice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateprice", type="string")
     */
    private $dateprice;


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
     * Set averageprice
     *
     * @param float $averageprice
     * @return Price
     */
    public function setAverageprice($averageprice)
    {
        $this->averageprice = $averageprice;

        return $this;
    }

    /**
     * Get averageprice
     *
     * @return float 
     */
    public function getAverageprice()
    {
        return $this->averageprice;
    }

    /**
     * Set dateprice
     *
     * @param \String $dateprice
     * @return Price
     */
    public function setDateprice($dateprice)
    {
        $this->dateprice = $dateprice;

        return $this;
    }

    /**
     * Get dateprice
     *
     * @return \String
     */
    public function getDateprice()
    {
        return $this->dateprice;
    }
}
