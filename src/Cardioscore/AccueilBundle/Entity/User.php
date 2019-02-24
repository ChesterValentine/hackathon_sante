<?php

namespace Cardioscore\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Cardioscore\AccueilBundle\Repository\UserRepository")
 */
class User
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
     * @var bool
     *
     * @ORM\Column(name="sex", type="boolean")
     */
    private $sex;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth_date", type="date")
     */
    private $birthDate;

    /**
     * @var int
     *
     * @ORM\Column(name="height", type="integer")
     */
    private $height;

    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="integer")
     */
    private $weight;

    /**
     * @var int
     *
     * @ORM\Column(name="waist", type="integer")
     */
    private $waist;

    /**
     * @var bool
     *
     * @ORM\Column(name="smoker", type="boolean")
     */
    private $smoker;

    /**
     * @var bool
     *
     * @ORM\Column(name="diabetes", type="boolean")
     */
    private $diabetes;

    /**
	* @ORM\OneToMany(targetEntity="Cardioscore\AccueilBundle\Entity\Analysis", cascade={"persist"}, mappedBy="user")
	* @ORM\JoinColumn(nullable=false)
	*/
    private $analysis;


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
     * Set sex
     *
     * @param string $sex
     *
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return User
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return User
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set waist
     *
     * @param integer $waist
     *
     * @return User
     */
    public function setWaist($waist)
    {
        $this->waist = $waist;

        return $this;
    }

    /**
     * Get waist
     *
     * @return int
     */
    public function getWaist()
    {
        return $this->waist;
    }

    /**
     * Set smoker
     *
     * @param boolean $smoker
     *
     * @return User
     */
    public function setSmoker($smoker)
    {
        $this->smoker = $smoker;

        return $this;
    }

    /**
     * Get smoker
     *
     * @return bool
     */
    public function getSmoker()
    {
        return $this->smoker;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->analysis = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add analysi
     *
     * @param \Cardioscore\AccueilBundle\Entity\Analysis $analysi
     *
     * @return User
     */
    public function addAnalysi(\Cardioscore\AccueilBundle\Entity\Analysis $analysi)
    {
        $this->analysis[] = $analysi;

        return $this;
    }

    /**
     * Remove analysi
     *
     * @param \Cardioscore\AccueilBundle\Entity\Analysis $analysi
     */
    public function removeAnalysi(\Cardioscore\AccueilBundle\Entity\Analysis $analysi)
    {
        $this->analysis->removeElement($analysi);
    }

    /**
     * Get analysis
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnalysis()
    {
        return $this->analysis;
    }

    /**
     * Set diabetes
     *
     * @param boolean $diabetes
     *
     * @return User
     */
    public function setDiabetes($diabetes)
    {
        $this->diabetes = $diabetes;

        return $this;
    }

    /**
     * Get diabetes
     *
     * @return boolean
     */
    public function getDiabetes()
    {
        return $this->diabetes;
    }
}
