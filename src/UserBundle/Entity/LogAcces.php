<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogAcces
 *
 * @ORM\Table(name="log_acces")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\LogAccesRepository")
 */
class LogAcces
{
    /**
     * @var int
     *
     * @ORM\Column(name="idLogAcces", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idLogAcces;

    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer", unique=true)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="idEquipement", type="integer", unique=true)
     */
    private $idEquipement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="sens", type="integer")
     */
    private $sens;

    /**
     * Get idLogAcces
     *
     * @return integer 
     */
    public function getIdLogAcces()
    {
        return $this->idLogAcces;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return LogAcces
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idEquipement
     *
     * @param integer $idEquipement
     * @return LogAcces
     */
    public function setIdEquipement($idEquipement)
    {
        $this->idEquipement = $idEquipement;

        return $this;
    }

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
     * Set date
     *
     * @param \DateTime $date
     * @return LogAcces
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
     * Set sens
     *
     * @param integer $sens
     * @return LogAcces
     */
    public function setSens($sens)
    {
        $this->sens = $sens;

        return $this;
    }

    /**
     * Get sens
     *
     * @return integer 
     */
    public function getSens()
    {
        return $this->sens;
    }
}
