<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habilitation
 *
 * @ORM\Table(name="habilitation")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\HabilitationRepository")
 */
class Habilitation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idHabilitation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idHabilitation;

    /**
     * @var string
     *
     * @ORM\Column(name="equipement", type="string", length=255)
     */
    private $equipement;

    /**
     * @var int
     *
     * @ORM\Column(name="level_habilitation", type="integer")
     */
    private $levelHabilitation;

    /**
     * Get idHabilitation
     *
     * @return integer 
     */
    public function getIdHabilitation()
    {
        return $this->idHabilitation;
    }

    /**
     * Set equipement
     *
     * @param string $equipement
     * @return Habilitation
     */
    public function setEquipement($equipement)
    {
        $this->equipement = $equipement;

        return $this;
    }

    /**
     * Get equipement
     *
     * @return string 
     */
    public function getEquipement()
    {
        return $this->equipement;
    }

    /**
     * Set levelHabilitation
     *
     * @param integer $levelHabilitation
     * @return Habilitation
     */
    public function setLevelHabilitation($levelHabilitation)
    {
        $this->levelHabilitation = $levelHabilitation;

        return $this;
    }

    /**
     * Get levelHabilitation
     *
     * @return integer 
     */
    public function getLevelHabilitation()
    {
        return $this->levelHabilitation;
    }
}
