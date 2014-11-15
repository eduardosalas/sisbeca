<?php

namespace IUT\BecarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Becarios
 *
 * @ORM\Table(name="becarios")
 * @ORM\Entity
 */
class Becarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="becarios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=255, nullable=false)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_1", type="string", length=255, nullable=true)
     */
    private $nombre1;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_2", type="string", length=255, nullable=true)
     */
    private $nombre2;

    /**
     * @var string
     *
     * @ORM\Column(name="ape_1", type="string", length=255, nullable=true)
     */
    private $ape1;

    /**
     * @var string
     *
     * @ORM\Column(name="ape_2", type="string", length=255, nullable=true)
     */
    private $ape2;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_carrera", type="string", length=255, nullable=true)
     */
    private $codCarrera;



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
     * Set cedula
     *
     * @param string $cedula
     * @return Becarios
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Becarios
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set nombre1
     *
     * @param string $nombre1
     * @return Becarios
     */
    public function setNombre1($nombre1)
    {
        $this->nombre1 = $nombre1;

        return $this;
    }

    /**
     * Get nombre1
     *
     * @return string 
     */
    public function getNombre1()
    {
        return $this->nombre1;
    }

    /**
     * Set nombre2
     *
     * @param string $nombre2
     * @return Becarios
     */
    public function setNombre2($nombre2)
    {
        $this->nombre2 = $nombre2;

        return $this;
    }

    /**
     * Get nombre2
     *
     * @return string 
     */
    public function getNombre2()
    {
        return $this->nombre2;
    }

    /**
     * Set ape1
     *
     * @param string $ape1
     * @return Becarios
     */
    public function setApe1($ape1)
    {
        $this->ape1 = $ape1;

        return $this;
    }

    /**
     * Get ape1
     *
     * @return string 
     */
    public function getApe1()
    {
        return $this->ape1;
    }

    /**
     * Set ape2
     *
     * @param string $ape2
     * @return Becarios
     */
    public function setApe2($ape2)
    {
        $this->ape2 = $ape2;

        return $this;
    }

    /**
     * Get ape2
     *
     * @return string 
     */
    public function getApe2()
    {
        return $this->ape2;
    }

    /**
     * Set codCarrera
     *
     * @param string $codCarrera
     * @return Becarios
     */
    public function setCodCarrera($codCarrera)
    {
        $this->codCarrera = $codCarrera;

        return $this;
    }

    /**
     * Get codCarrera
     *
     * @return string 
     */
    public function getCodCarrera()
    {
        return $this->codCarrera;
    }
}
