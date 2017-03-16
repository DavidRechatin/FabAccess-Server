<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipement
 *
 * @ORM\Table(name="equipement")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\EquipementRepository")
 */
class Equipement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEquipement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idEquipement;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="autorisation", type="integer")
     */
    private $autorisation;

    /**
     * @var string
     *
     * @ORM\Column(name="ipRpi", type="string", length=255)
     */
    private $ipRpi;

    /**
     * Get idEquipement
     *
     * @return integer 
     */
    public function getIdEquipement()
    {
        return $this->idEquipement;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Equipement
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Equipement
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set autorisation
     *
     * @param integer $autorisation
     * @return Equipement
     */
    public function setAutorisation($autorisation)
    {
        $this->autorisation = $autorisation;

        return $this;
    }

    /**
     * Get autorisation
     *
     * @return integer 
     */
    public function getAutorisation()
    {
        return $this->autorisation;
    }

    /**
     * Set ipRpi
     *
     * @param string $ipRpi
     * @return Equipement
     */
    public function setIpRpi($ipRpi)
    {
        $this->ipRpi = $ipRpi;

        return $this;
    }

    /**
     * Get ipRpi
     *
     * @return string 
     */
    public function getIpRpi()
    {
        return $this->ipRpi;
    }
}
