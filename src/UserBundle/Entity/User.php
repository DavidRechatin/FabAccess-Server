<?php


namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
	
	/**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;
	
	/**
     * @var int
     *
     * @ORM\Column(name="idRole", type="integer")
     */
    private $idRole;
	
	/**
     * @var int
     *
     * @ORM\Column(name="present", type="integer")
     */
    private $present;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}