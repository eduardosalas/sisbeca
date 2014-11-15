<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\DPersonales
 *
 * @ORM\Table(name="d_personales")
 * @ORM\Entity
 */
class DPersonales
{
    /**
     * @var string $cedula
     *
     * @ORM\Column(name="cedula", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="d_personales_cedula_seq", allocationSize="1", initialValue="1")
     */
    private $cedula;

    /**
     * @var bigint $id
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     */
    private $id;

    /**
     * @var string $nombre1
     *
     * @ORM\Column(name="nombre1", type="string", length=150, nullable=true)
     */
    private $nombre1;

    /**
     * @var string $nombre2
     *
     * @ORM\Column(name="nombre2", type="string", length=150, nullable=true)
     */
    private $nombre2;

    /**
     * @var string $apellido1
     *
     * @ORM\Column(name="apellido1", type="string", length=150, nullable=true)
     */
    private $apellido1;

    /**
     * @var string $apellido2
     *
     * @ORM\Column(name="apellido2", type="string", length=150, nullable=true)
     */
    private $apellido2;

    /**
     * @var string $direccHab
     *
     * @ORM\Column(name="direcc_hab", type="string", length=300, nullable=true)
     */
    private $direccHab;

    /**
     * @var string $telefono1
     *
     * @ORM\Column(name="telefono1", type="string", length=15, nullable=true)
     */
    private $telefono1;

    /**
     * @var string $telefono2
     *
     * @ORM\Column(name="telefono2", type="string", length=15, nullable=true)
     */
    private $telefono2;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;

    /**
     * @var string $lugarNac
     *
     * @ORM\Column(name="lugar_nac", type="string", length=100, nullable=true)
     */
    private $lugarNac;

    /**
     * @var date $fechNac
     *
     * @ORM\Column(name="fech_nac", type="date", nullable=true)
     */
    private $fechNac;

    /**
     * @var integer $edad
     *
     * @ORM\Column(name="edad", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var integer $nHijos
     *
     * @ORM\Column(name="n_hijos", type="integer", nullable=true)
     */
    private $nHijos;

    /**
     * @var integer $asignacion
     *
     * @ORM\Column(name="asignacion", type="integer", nullable=true)
     */
    private $asignacion;

    /**
     * @var EdoCivil
     *
     * @ORM\ManyToOne(targetEntity="EdoCivil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_edo_civil", referencedColumnName="id")
     * })
     */
    private $idEdoCivil;

    /**
     * @var Sino
     *
     * @ORM\ManyToOne(targetEntity="Sino")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hijos", referencedColumnName="id")
     * })
     */
    private $hijos;

    /**
     * @var Estados
     *
     * @ORM\ManyToOne(targetEntity="Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado", referencedColumnName="id")
     * })
     */
    private $idEstado;

    /**
     * @var Municipios
     *
     * @ORM\ManyToOne(targetEntity="Municipios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipios", referencedColumnName="id")
     * })
     */
    private $idMunicipios;

    /**
     * @var Nacionalidad
     *
     * @ORM\ManyToOne(targetEntity="Nacionalidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nac", referencedColumnName="id")
     * })
     */
    private $nac;

    /**
     * @var Sino
     *
     * @ORM\ManyToOne(targetEntity="Sino")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="otra_beca", referencedColumnName="id")
     * })
     */
    private $otraBeca;

    /**
     * @var Parroquias
     *
     * @ORM\ManyToOne(targetEntity="Parroquias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_parroquia", referencedColumnName="id")
     * })
     */
    private $idParroquia;

    /**
     * @var Sexo
     *
     * @ORM\ManyToOne(targetEntity="Sexo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sexo", referencedColumnName="id")
     * })
     */
    private $sexo;

    /**
     * @var StatusBeca
     *
     * @ORM\ManyToOne(targetEntity="StatusBeca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_beca", referencedColumnName="id")
     * })
     */
    private $statusBeca;

    /**
     * @var TipoBeca
     *
     * @ORM\ManyToOne(targetEntity="TipoBeca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_beca", referencedColumnName="id")
     * })
     */
    private $tipoBeca;



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
     * Set id
     *
     * @param bigint $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return bigint 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre1
     *
     * @param string $nombre1
     */
    public function setNombre1($nombre1)
    {
        $this->nombre1 = $nombre1;
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
     */
    public function setNombre2($nombre2)
    {
        $this->nombre2 = $nombre2;
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
     * Set apellido1
     *
     * @param string $apellido1
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;
    }

    /**
     * Get apellido1
     *
     * @return string 
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set apellido2
     *
     * @param string $apellido2
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;
    }

    /**
     * Get apellido2
     *
     * @return string 
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Set direccHab
     *
     * @param string $direccHab
     */
    public function setDireccHab($direccHab)
    {
        $this->direccHab = $direccHab;
    }

    /**
     * Get direccHab
     *
     * @return string 
     */
    public function getDireccHab()
    {
        return $this->direccHab;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;
    }

    /**
     * Get telefono1
     *
     * @return string 
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;
    }

    /**
     * Get telefono2
     *
     * @return string 
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set lugarNac
     *
     * @param string $lugarNac
     */
    public function setLugarNac($lugarNac)
    {
        $this->lugarNac = $lugarNac;
    }

    /**
     * Get lugarNac
     *
     * @return string 
     */
    public function getLugarNac()
    {
        return $this->lugarNac;
    }

    /**
     * Set fechNac
     *
     * @param date $fechNac
     */
    public function setFechNac($fechNac)
    {
        $this->fechNac = $fechNac;
    }

    /**
     * Get fechNac
     *
     * @return date 
     */
    public function getFechNac()
    {
        return $this->fechNac;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set nHijos
     *
     * @param integer $nHijos
     */
    public function setNHijos($nHijos)
    {
        $this->nHijos = $nHijos;
    }

    /**
     * Get nHijos
     *
     * @return integer 
     */
    public function getNHijos()
    {
        return $this->nHijos;
    }

    /**
     * Set asignacion
     *
     * @param integer $asignacion
     */
    public function setAsignacion($asignacion)
    {
        $this->asignacion = $asignacion;
    }

    /**
     * Get asignacion
     *
     * @return integer 
     */
    public function getAsignacion()
    {
        return $this->asignacion;
    }

    /**
     * Set idEdoCivil
     *
     * @param sisbeca\sisbecaBundle\Entity\EdoCivil $idEdoCivil
     */
    public function setIdEdoCivil(\sisbeca\sisbecaBundle\Entity\EdoCivil $idEdoCivil)
    {
        $this->idEdoCivil = $idEdoCivil;
    }

    /**
     * Get idEdoCivil
     *
     * @return sisbeca\sisbecaBundle\Entity\EdoCivil 
     */
    public function getIdEdoCivil()
    {
        return $this->idEdoCivil;
    }

    /**
     * Set hijos
     *
     * @param sisbeca\sisbecaBundle\Entity\Sino $hijos
     */
    public function setHijos(\sisbeca\sisbecaBundle\Entity\Sino $hijos)
    {
        $this->hijos = $hijos;
    }

    /**
     * Get hijos
     *
     * @return sisbeca\sisbecaBundle\Entity\Sino 
     */
    public function getHijos()
    {
        return $this->hijos;
    }

    /**
     * Set idEstado
     *
     * @param sisbeca\sisbecaBundle\Entity\Estados $idEstado
     */
    public function setIdEstado(\sisbeca\sisbecaBundle\Entity\Estados $idEstado)
    {
        $this->idEstado = $idEstado;
    }

    /**
     * Get idEstado
     *
     * @return sisbeca\sisbecaBundle\Entity\Estados 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set idMunicipios
     *
     * @param sisbeca\sisbecaBundle\Entity\Municipios $idMunicipios
     */
    public function setIdMunicipios(\sisbeca\sisbecaBundle\Entity\Municipios $idMunicipios)
    {
        $this->idMunicipios = $idMunicipios;
    }

    /**
     * Get idMunicipios
     *
     * @return sisbeca\sisbecaBundle\Entity\Municipios 
     */
    public function getIdMunicipios()
    {
        return $this->idMunicipios;
    }

    /**
     * Set nac
     *
     * @param sisbeca\sisbecaBundle\Entity\Nacionalidad $nac
     */
    public function setNac(\sisbeca\sisbecaBundle\Entity\Nacionalidad $nac)
    {
        $this->nac = $nac;
    }

    /**
     * Get nac
     *
     * @return sisbeca\sisbecaBundle\Entity\Nacionalidad 
     */
    public function getNac()
    {
        return $this->nac;
    }

    /**
     * Set otraBeca
     *
     * @param sisbeca\sisbecaBundle\Entity\Sino $otraBeca
     */
    public function setOtraBeca(\sisbeca\sisbecaBundle\Entity\Sino $otraBeca)
    {
        $this->otraBeca = $otraBeca;
    }

    /**
     * Get otraBeca
     *
     * @return sisbeca\sisbecaBundle\Entity\Sino 
     */
    public function getOtraBeca()
    {
        return $this->otraBeca;
    }

    /**
     * Set idParroquia
     *
     * @param sisbeca\sisbecaBundle\Entity\Parroquias $idParroquia
     */
    public function setIdParroquia(\sisbeca\sisbecaBundle\Entity\Parroquias $idParroquia)
    {
        $this->idParroquia = $idParroquia;
    }

    /**
     * Get idParroquia
     *
     * @return sisbeca\sisbecaBundle\Entity\Parroquias 
     */
    public function getIdParroquia()
    {
        return $this->idParroquia;
    }

    /**
     * Set sexo
     *
     * @param sisbeca\sisbecaBundle\Entity\Sexo $sexo
     */
    public function setSexo(\sisbeca\sisbecaBundle\Entity\Sexo $sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * Get sexo
     *
     * @return sisbeca\sisbecaBundle\Entity\Sexo 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set statusBeca
     *
     * @param sisbeca\sisbecaBundle\Entity\StatusBeca $statusBeca
     */
    public function setStatusBeca(\sisbeca\sisbecaBundle\Entity\StatusBeca $statusBeca)
    {
        $this->statusBeca = $statusBeca;
    }

    /**
     * Get statusBeca
     *
     * @return sisbeca\sisbecaBundle\Entity\StatusBeca 
     */
    public function getStatusBeca()
    {
        return $this->statusBeca;
    }

    /**
     * Set tipoBeca
     *
     * @param sisbeca\sisbecaBundle\Entity\TipoBeca $tipoBeca
     */
    public function setTipoBeca(\sisbeca\sisbecaBundle\Entity\TipoBeca $tipoBeca)
    {
        $this->tipoBeca = $tipoBeca;
    }

    /**
     * Get tipoBeca
     *
     * @return sisbeca\sisbecaBundle\Entity\TipoBeca 
     */
    public function getTipoBeca()
    {
        return $this->tipoBeca;
    }
}