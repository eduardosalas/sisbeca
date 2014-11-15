<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\DSocioEconomicos
 *
 * @ORM\Table(name="d_socio_economicos")
 * @ORM\Entity
 */
class DSocioEconomicos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="d_socio_economicos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $nomapeResponsable
     *
     * @ORM\Column(name="nomape_responsable", type="string", length=250, nullable=true)
     */
    private $nomapeResponsable;

    /**
     * @var integer $ciResponsable
     *
     * @ORM\Column(name="ci_responsable", type="integer", nullable=true)
     */
    private $ciResponsable;

    /**
     * @var string $telResponable
     *
     * @ORM\Column(name="tel_responable", type="string", length=15, nullable=true)
     */
    private $telResponable;

    /**
     * @var GrupoFamiliar
     *
     * @ORM\ManyToOne(targetEntity="GrupoFamiliar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grupo_fami", referencedColumnName="id")
     * })
     */
    private $idGrupoFami;

    /**
     * @var ViveCon
     *
     * @ORM\ManyToOne(targetEntity="ViveCon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentesco", referencedColumnName="id")
     * })
     */
    private $parentesco;

    /**
     * @var RangoIngreso
     *
     * @ORM\ManyToOne(targetEntity="RangoIngreso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rango_ingreso", referencedColumnName="id")
     * })
     */
    private $rangoIngreso;

    /**
     * @var TVivienda
     *
     * @ORM\ManyToOne(targetEntity="TVivienda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tenencia_vivienda", referencedColumnName="id")
     * })
     */
    private $idTenenciaVivienda;

    /**
     * @var ViveCon
     *
     * @ORM\ManyToOne(targetEntity="ViveCon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vive_con", referencedColumnName="id")
     * })
     */
    private $viveCon;

    /**
     * @var DPersonales
     *
     * @ORM\ManyToOne(targetEntity="DPersonales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cedula", referencedColumnName="cedula")
     * })
     */
    private $cedula;



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
     * Set nomapeResponsable
     *
     * @param string $nomapeResponsable
     */
    public function setNomapeResponsable($nomapeResponsable)
    {
        $this->nomapeResponsable = $nomapeResponsable;
    }

    /**
     * Get nomapeResponsable
     *
     * @return string 
     */
    public function getNomapeResponsable()
    {
        return $this->nomapeResponsable;
    }

    /**
     * Set ciResponsable
     *
     * @param integer $ciResponsable
     */
    public function setCiResponsable($ciResponsable)
    {
        $this->ciResponsable = $ciResponsable;
    }

    /**
     * Get ciResponsable
     *
     * @return integer 
     */
    public function getCiResponsable()
    {
        return $this->ciResponsable;
    }

    /**
     * Set telResponable
     *
     * @param string $telResponable
     */
    public function setTelResponable($telResponable)
    {
        $this->telResponable = $telResponable;
    }

    /**
     * Get telResponable
     *
     * @return string 
     */
    public function getTelResponable()
    {
        return $this->telResponable;
    }

    /**
     * Set idGrupoFami
     *
     * @param sisbeca\sisbecaBundle\Entity\GrupoFamiliar $idGrupoFami
     */
    public function setIdGrupoFami(\sisbeca\sisbecaBundle\Entity\GrupoFamiliar $idGrupoFami)
    {
        $this->idGrupoFami = $idGrupoFami;
    }

    /**
     * Get idGrupoFami
     *
     * @return sisbeca\sisbecaBundle\Entity\GrupoFamiliar 
     */
    public function getIdGrupoFami()
    {
        return $this->idGrupoFami;
    }

    /**
     * Set parentesco
     *
     * @param sisbeca\sisbecaBundle\Entity\ViveCon $parentesco
     */
    public function setParentesco(\sisbeca\sisbecaBundle\Entity\ViveCon $parentesco)
    {
        $this->parentesco = $parentesco;
    }

    /**
     * Get parentesco
     *
     * @return sisbeca\sisbecaBundle\Entity\ViveCon 
     */
    public function getParentesco()
    {
        return $this->parentesco;
    }

    /**
     * Set rangoIngreso
     *
     * @param sisbeca\sisbecaBundle\Entity\RangoIngreso $rangoIngreso
     */
    public function setRangoIngreso(\sisbeca\sisbecaBundle\Entity\RangoIngreso $rangoIngreso)
    {
        $this->rangoIngreso = $rangoIngreso;
    }

    /**
     * Get rangoIngreso
     *
     * @return sisbeca\sisbecaBundle\Entity\RangoIngreso 
     */
    public function getRangoIngreso()
    {
        return $this->rangoIngreso;
    }

    /**
     * Set idTenenciaVivienda
     *
     * @param sisbeca\sisbecaBundle\Entity\TVivienda $idTenenciaVivienda
     */
    public function setIdTenenciaVivienda(\sisbeca\sisbecaBundle\Entity\TVivienda $idTenenciaVivienda)
    {
        $this->idTenenciaVivienda = $idTenenciaVivienda;
    }

    /**
     * Get idTenenciaVivienda
     *
     * @return sisbeca\sisbecaBundle\Entity\TVivienda 
     */
    public function getIdTenenciaVivienda()
    {
        return $this->idTenenciaVivienda;
    }

    /**
     * Set viveCon
     *
     * @param sisbeca\sisbecaBundle\Entity\ViveCon $viveCon
     */
    public function setViveCon(\sisbeca\sisbecaBundle\Entity\ViveCon $viveCon)
    {
        $this->viveCon = $viveCon;
    }

    /**
     * Get viveCon
     *
     * @return sisbeca\sisbecaBundle\Entity\ViveCon 
     */
    public function getViveCon()
    {
        return $this->viveCon;
    }

    /**
     * Set cedula
     *
     * @param sisbeca\sisbecaBundle\Entity\DPersonales $cedula
     */
    public function setCedula(\sisbeca\sisbecaBundle\Entity\DPersonales $cedula)
    {
        $this->cedula = $cedula;
    }

    /**
     * Get cedula
     *
     * @return sisbeca\sisbecaBundle\Entity\DPersonales 
     */
    public function getCedula()
    {
        return $this->cedula;
    }
}