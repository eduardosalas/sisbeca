<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\XSecurityRole2users
 *
 * @ORM\Table(name="x_security_role2users")
 * @ORM\Entity
 */
class XSecurityRole2users
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="x_security_role2users_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $idRole
     *
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     */
    private $idRole;

    /**
     * @var string $ci
     *
     * @ORM\Column(name="ci", type="string", length=20, nullable=false)
     */
    private $ci;



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
     * Set idRole
     *
     * @param integer $idRole
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    }

    /**
     * Get idRole
     *
     * @return integer 
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set ci
     *
     * @param string $ci
     */
    public function setCi($ci)
    {
        $this->ci = $ci;
    }

    /**
     * Get ci
     *
     * @return string 
     */
    public function getCi()
    {
        return $this->ci;
    }
}