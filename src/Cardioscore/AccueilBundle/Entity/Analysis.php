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
     * @var int
     *
     * @ORM\Column(name="ratio_omega", type="integer")
     */
    private $ratioOmega;

    /**
     * @var int
     *
     * @ORM\Column(name="index_o3", type="integer")
     */
    private $indexO3;

    /**
     * @var int
     *
     * @ORM\Column(name="aa_epa", type="integer")
     */
    private $aaEpa;

    /**
     * @var int
     *
     * @ORM\Column(name="ratio_fd", type="integer")
     */
    private $ratioFd;

    /**
     * @var int
     *
     * @ORM\Column(name="ratio_waist_weight", type="integer")
     */
    private $ratioWaistWeight;

    /**
     * @var int
     *
     * @ORM\Column(name="results", type="integer")
     */
    private $results;

    /**
     * @var int
     *
     * @ORM\Column(name="diversity", type="integer")
     */
    private $diversity;

    /**
     * @var int
     *
     * @ORM\Column(name="richness", type="integer")
     */
    private $richness;

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
     * Set ratioOmega
     *
     * @param integer $ratioOmega
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
     * @return int
     */
    public function getRatioOmega()
    {
        return $this->ratioOmega;
    }

    /**
     * Set indexO3
     *
     * @param integer $indexO3
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
     * @return int
     */
    public function getIndexO3()
    {
        return $this->indexO3;
    }

    /**
     * Set aaEpa
     *
     * @param integer $aaEpa
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
     * @return int
     */
    public function getAaEpa()
    {
        return $this->aaEpa;
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
     * @return int
     */
    public function getRatioFd()
    {
        return $this->ratioFd;
    }

    /**
     * Set ratioWaistWeight
     *
     * @param integer $ratioWaistWeight
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
     * @return int
     */
    public function getRatioWaistWeight()
    {
        return $this->ratioWaistWeight;
    }

    /**
     * Set results
     *
     * @param integer $results
     *
     * @return Analysis
     */
    public function setResults($results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * Get results
     *
     * @return int
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Set fkUser
     *
     * @param \Cardioscore\AccueilBundle\Entity\User $fkUser
     *
     * @return Analysis
     */
    public function setFkUser(\Cardioscore\AccueilBundle\Entity\User $fkUser)
    {
        $this->fk_user = $fkUser;

        return $this;
    }

    /**
     * Get fkUser
     *
     * @return \Cardioscore\AccueilBundle\Entity\User
     */
    public function getFkUser()
    {
        return $this->fk_user;
    }

    /**
     * Set diversity
     *
     * @param integer $diversity
     *
     * @return Analysis
     */
    public function setDiversity($diversity)
    {
        $this->diversity = $diversity;

        return $this;
    }

    /**
     * Get diversity
     *
     * @return integer
     */
    public function getDiversity()
    {
        return $this->diversity;
    }

    /**
     * Set richness
     *
     * @param integer $richness
     *
     * @return Analysis
     */
    public function setRichness($richness)
    {
        $this->richness = $richness;

        return $this;
    }

    /**
     * Get richness
     *
     * @return integer
     */
    public function getRichness()
    {
        return $this->richness;
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
}
