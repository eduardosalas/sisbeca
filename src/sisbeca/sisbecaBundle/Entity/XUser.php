<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;

/**
 * sisbeca\sisbecaBundle\Entity\XUser
 *
 * @ORM\Table(name="x_user")
 * @ORM\Entity
 */
class XUser implements UserInterface {


    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="x_user_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $ci
     *
     * @ORM\Column(name="ci", type="string", length=20, nullable=false)
     */
    private $ci;

    /**
     * @var string $login
     *
     * @ORM\Column(name="login", type="string", length=1024, nullable=false)
     */
    private $login;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=1024, nullable=false)
     */
    private $password;

    /**
     * @var string $salt
     *
     * @ORM\Column(name="salt", type="string", length=1024, nullable=true)
     */
    private $salt;

    /**
     * @var boolean $admin
     *
     * @ORM\Column(name="admin", type="boolean", nullable=true)
     */
    private $admin;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var boolean $enabled
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var string $createdby
     *
     * @ORM\Column(name="createdby", type="string", length=1024, nullable=true)
     */
    private $createdby;

    /**
     * @var datetime $createdon
     *
     * @ORM\Column(name="createdon", type="datetime", nullable=true)
     */
    private $createdon;

    /**
     * @var datetime $modifiedon
     *
     * @ORM\Column(name="modifiedon", type="datetime", nullable=true)
     */
    private $modifiedon;

    /**
     * @var string $archivador
     *
     * @ORM\Column(name="archivador", type="string", length=150, nullable=true)
     */
    private $archivador;

    /**
     * Get ci
     *
     * @return string 
     */
    public function getCi() {
        return $this->ci;
    }

    /**
     * Set ci
     *
     * @param string $ci
     */
    function setCi($ci) {
        $this->ci = $ci;
    }

    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set login
     *
     * @param string $login
     */
    public function setLogin($login) {
        $this->login = $login;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin() {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt) {
        $this->salt = $salt;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt() {
        return $this->salt;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     */
    public function setAdmin($admin) {
        $this->admin = $admin;
    }

    /**
     * Get admin
     *
     * @return boolean 
     */
    public function getAdmin() {
        return $this->admin;
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
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled() {
        return $this->enabled;
    }

    /**
     * Set createdby
     *
     * @param string $createdby
     */
    public function setCreatedby($createdby) {
        $this->createdby = $createdby;
    }

    /**
     * Get createdby
     *
     * @return string 
     */
    public function getCreatedby() {
        return $this->createdby;
    }

    /**
     * Set createdon
     *
     * @param datetime $createdon
     */
    public function setCreatedon($createdon) {
        $this->createdon = $createdon;
    }

    /**
     * Get createdon
     *
     * @return datetime 
     */
    public function getCreatedon() {
        return $this->createdon;
    }

    /**
     * Set modifiedon
     *
     * @param datetime $modifiedon
     */
    public function setModifiedon($modifiedon) {
        $this->modifiedon = $modifiedon;
    }

    /**
     * Get modifiedon
     *
     * @return datetime 
     */
    public function getModifiedon() {
        return $this->modifiedon;
    }

    /**
     * Set archivador
     *
     * @param string $archivador
     */
    public function setArchivador($archivador) {
        $this->archivador = $archivador;
    }

    /**
     * Get archivador
     *
     * @return string 
     */
    public function getArchivador() {
        return $this->archivador;
    }

    public function equals(UserInterface $user) {
        return $this->login === $user->getUsername();
    }

    public function eraseCredentials() {
        
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function getRoles() {
        return array('ROLE_USER');
    }

    public function getUsername() {
        return $this->login;
    }

    public function isEnabled() {

        $this->enabled = true;
    }

    public function __construct() {

        $this->enabled = true;
        $this->salt = md5(true);
    }

    public function __sleep() {
        return array('id', 'login', 'email');
    }

}
