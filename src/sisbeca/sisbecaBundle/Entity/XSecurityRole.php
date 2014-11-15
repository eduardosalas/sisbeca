<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\XSecurityRole
 *
 * @ORM\Table(name="x_security_role")
 * @ORM\Entity
 */
class XSecurityRole {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="x_security_role_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string $roleLink
     *
     * @ORM\Column(name="role_link", type="string", length=50, nullable=false)
     */
    private $roleLink;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set roleLink
     *
     * @param string $roleLink
     */
    public function setRoleLink($roleLink) {
        $this->roleLink = $roleLink;
    }

    /**
     * Get roleLink
     *
     * @return string 
     */
    public function getRoleLink() {
        return $this->roleLink;
    }

    public function __toString() {
        return $this->roleLink;
    }

}
