<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Badge
 *
 * @ORM\Table(name="badge")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\BadgeRepository")
 */
class Badge
{
	/**
   * @ORM\OneToOne(targetEntity="UserBundle\Entity\User", cascade={"persist"})
   */
   private $user;
   
    /**
     * @var int
     *
     * @ORM\Column(name="id_badge", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_badge;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAttribution", type="datetime")
     */
    private $dateAttribution;

    /**
     * Get idBadge
     *
     * @return integer 
     */
    public function getIdBadge()
    {
        return $this->idBadge;
    }

    /**
     * Set dateAttribution
     *
     * @param \DateTime $dateAttribution
     * @return Badge
     */
    public function setDateAttribution($dateAttribution)
    {
        $this->dateAttribution = $dateAttribution;

        return $this;
    }

    /**
     * Get dateAttribution
     *
     * @return \DateTime 
     */
    public function getDateAttribution()
    {
        return $this->dateAttribution;
    }
}
