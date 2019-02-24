<?php

namespace Cardioscore\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Analysis
 *
 * @ORM\Table(name="analysis")
 * @ORM\Entity(repositoryClass="Cardioscore\AccueilBundle\Repository\AnalysisRepository")
 */
class Analysis
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
     * @ORM\Column(name="total_cholesterol", type="float")
     */
    private $total_cholesterol;

    /**
     * @var float
     *
     * @ORM\Column(name="hdl_cholesterol", type="float")
     */
    private $hdl_cholesterol;

    /**
     * @var float
     *
     * @ORM\Column(name="systolic_bp", type="float")
     */
    private $systolic_bp;

    /**
     * @var bool
     *
     * @ORM\Column(name="treated_blood_pressure", type="boolean")
     */
    private $treated_blood_pressure;

    /**
     * @var float
     *
     * @ORM\Column(name="ratio_omega", type="float")
     */
    private $ratioOmega;

    /**
     * @var float
     *
     * @ORM\Column(name="index_o3", type="float")
     */
    private $indexO3;

    /**
     * @var float
     *
     * @ORM\Column(name="aa_epa", type="float")
     */
    private $aaEpa;

    /**
     * @var bool
     *
     * @ORM\Column(name="omeganemie", type="boolean")
     */
    private $omeganemie;

    /**
     * @var int
     *
     * @ORM\Column(name="ratio_fd", type="integer")
     */
    private $ratioFd;

    /**
     * @var float
     *
     * @ORM\Column(name="ratio_waist_weight", type="float")
     */
    private $ratioWaistWeight;

    /**
     * @var bool
     *
     * @ORM\Column(name="ubiote", type="boolean")
     */
    private $ubiote;

    /**
     * @var bool
     *
     * @ORM\Column(name="ubiote_fb", type="boolean")
     */
    private $ubiote_fb;

    /**
     * @var bool
     *
     * @ORM\Column(name="ubiote_diversity", type="boolean")
     */
    private $ubiote_diversity;

    /**
     * @var bool
     *
     * @ORM\Column(name="ubiote_richness", type="boolean")
     */
    private $ubiote_richness;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="date")
     */
    private $created_date;

    /**
     * @var bool
     *
     * @ORM\Column(name="treated_diabetes", type="boolean")
     */
    private $treated_diabetes;

    /**
	 * @ORM\ManyToOne(targetEntity="Cardioscore\AccueilBundle\Entity\User", inversedBy="analysis")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;


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
     * Set totalCholesterol
     *
     * @param float $totalCholesterol
     *
     * @return Analysis
     */
    public function setTotalCholesterol($totalCholesterol)
    {
        $this->total_cholesterol = $totalCholesterol;

        return $this;
    }

    /**
     * Get totalCholesterol
     *
     * @return float
     */
    public function getTotalCholesterol()
    {
        return $this->total_cholesterol;
    }

    /**
     * Set hdlCholesterol
     *
     * @param float $hdlCholesterol
     *
     * @return Analysis
     */
    public function setHdlCholesterol($hdlCholesterol)
    {
        $this->hdl_cholesterol = $hdlCholesterol;

        return $this;
    }

    /**
     * Get hdlCholesterol
     *
     * @return float
     */
    public function getHdlCholesterol()
    {
        return $this->hdl_cholesterol;
    }

    /**
     * Set systolicBp
     *
     * @param float $systolicBp
     *
     * @return Analysis
     */
    public function setSystolicBp($systolicBp)
    {
        $this->systolic_bp = $systolicBp;

        return $this;
    }

    /**
     * Get systolicBp
     *
     * @return float
     */
    public function getSystolicBp()
    {
        return $this->systolic_bp;
    }

    /**
     * Set treatedBloodPressure
     *
     * @param boolean $treatedBloodPressure
     *
     * @return Analysis
     */
    public function setTreatedBloodPressure($treatedBloodPressure)
    {
        $this->treated_blood_pressure = $treatedBloodPressure;

        return $this;
    }

    /**
     * Get treatedBloodPressure
     *
     * @return boolean
     */
    public function getTreatedBloodPressure()
    {
        return $this->treated_blood_pressure;
    }

    /**
     * Set ratioOmega
     *
     * @param float $ratioOmega
     *
     * @return Analysis
     */
    public function setRatioOmega($ratioOmega)
    {
        $this->ratioOmega = $ratioOmega;

        return $this;
    }

    /**
     * Get ratioOmega
     *
     * @return float
     */
    public function getRatioOmega()
    {
        return $this->ratioOmega;
    }

    /**
     * Set indexO3
     *
     * @param float $indexO3
     *
     * @return Analysis
     */
    public function setIndexO3($indexO3)
    {
        $this->indexO3 = $indexO3;

        return $this;
    }

    /**
     * Get indexO3
     *
     * @return float
     */
    public function getIndexO3()
    {
        return $this->indexO3;
    }

    /**
     * Set aaEpa
     *
     * @param float $aaEpa
     *
     * @return Analysis
     */
    public function setAaEpa($aaEpa)
    {
        $this->aaEpa = $aaEpa;

        return $this;
    }

    /**
     * Get aaEpa
     *
     * @return float
     */
    public function getAaEpa()
    {
        return $this->aaEpa;
    }

    /**
     * Set omeganemie
     *
     * @param boolean $omeganemie
     *
     * @return Analysis
     */
    public function setOmeganemie($omeganemie)
    {
        $this->omeganemie = $omeganemie;

        return $this;
    }

    /**
     * Get omeganemie
     *
     * @return boolean
     */
    public function getOmeganemie()
    {
        return $this->omeganemie;
    }

    /**
     * Set ratioFd
     *
     * @param integer $ratioFd
     *
     * @return Analysis
     */
    public function setRatioFd($ratioFd)
    {
        $this->ratioFd = $ratioFd;

        return $this;
    }

    /**
     * Get ratioFd
     *
     * @return integer
     */
    public function getRatioFd()
    {
        return $this->ratioFd;
    }

    /**
     * Set ratioWaistWeight
     *
     * @param float $ratioWaistWeight
     *
     * @return Analysis
     */
    public function setRatioWaistWeight($ratioWaistWeight)
    {
        $this->ratioWaistWeight = $ratioWaistWeight;

        return $this;
    }

    /**
     * Get ratioWaistWeight
     *
     * @return float
     */
    public function getRatioWaistWeight()
    {
        return $this->ratioWaistWeight;
    }

    /**
     * Set ubiote
     *
     * @param boolean $ubiote
     *
     * @return Analysis
     */
    public function setUbiote($ubiote)
    {
        $this->ubiote = $ubiote;

        return $this;
    }

    /**
     * Get ubiote
     *
     * @return boolean
     */
    public function getUbiote()
    {
        return $this->ubiote;
    }

    /**
     * Set ubioteFb
     *
     * @param boolean $ubioteFb
     *
     * @return Analysis
     */
    public function setUbioteFb($ubioteFb)
    {
        $this->ubiote_fb = $ubioteFb;

        return $this;
    }

    /**
     * Get ubioteFb
     *
     * @return boolean
     */
    public function getUbioteFb()
    {
        return $this->ubiote_fb;
    }

    /**
     * Set ubioteDiversity
     *
     * @param boolean $ubioteDiversity
     *
     * @return Analysis
     */
    public function setUbioteDiversity($ubioteDiversity)
    {
        $this->ubiote_diversity = $ubioteDiversity;

        return $this;
    }

    /**
     * Get ubioteDiversity
     *
     * @return boolean
     */
    public function getUbioteDiversity()
    {
        return $this->ubiote_diversity;
    }

    /**
     * Set ubioteRichness
     *
     * @param boolean $ubioteRichness
     *
     * @return Analysis
     */
    public function setUbioteRichness($ubioteRichness)
    {
        $this->ubiote_richness = $ubioteRichness;

        return $this;
    }

    /**
     * Get ubioteRichness
     *
     * @return boolean
     */
    public function getUbioteRichness()
    {
        return $this->ubiote_richness;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return Analysis
     */
    public function setCreatedDate($createdDate)
    {
        $this->created_date = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * Set user
     *
     * @param \Cardioscore\AccueilBundle\Entity\User $user
     *
     * @return Analysis
     */
    public function setUser(\Cardioscore\AccueilBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Cardioscore\AccueilBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set treatedDiabetes
     *
     * @param boolean $treatedDiabetes
     *
     * @return Analysis
     */
    public function setTreatedDiabetes($treatedDiabetes)
    {
        $this->treated_diabetes = $treatedDiabetes;

        return $this;
    }

    /**
     * Get treatedDiabetes
     *
     * @return boolean
     */
    public function getTreatedDiabetes()
    {
        return $this->treated_diabetes;
    }
}
