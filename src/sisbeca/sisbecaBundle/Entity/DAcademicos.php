<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\DAcademicos
 *
 * @ORM\Table(name="d_academicos")
 * @ORM\Entity
 */
class DAcademicos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="d_academicos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var date $annoIngreso
     *
     * @ORM\Column(name="anno_ingreso", type="date", nullable=true)
     */
    private $annoIngreso;

    /**
     * @var FormaIngreso
     *
     * @ORM\ManyToOne(targetEntity="FormaIngreso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="f_ingreso", referencedColumnName="id")
     * })
     */
    private $fIngreso;

    /**
     * @var AnnoCurso
     *
     * @ORM\ManyToOne(targetEntity="AnnoCurso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_anno_curso", referencedColumnName="id")
     * })
     */
    private $idAnnoCurso;

    /**
     * @var Turno
     *
     * @ORM\ManyToOne(targetEntity="Turno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_turno", referencedColumnName="id")
     * })
     */
    private $idTurno;

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
     * @var Carreras
     *
     * @ORM\ManyToOne(targetEntity="Carreras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_carrera", referencedColumnName="id")
     * })
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
     * Set annoIngreso
     *
     * @param date $annoIngreso
     */
    public function setAnnoIngreso($annoIngreso)
    {
        $this->annoIngreso = $annoIngreso;
    }

    /**
     * Get annoIngreso
     *
     * @return date 
     */
    public function getAnnoIngreso()
    {
        return $this->annoIngreso;
    }

    /**
     * Set fIngreso
     *
     * @param sisbeca\sisbecaBundle\Entity\FormaIngreso $fIngreso
     */
    public function setFIngreso(\sisbeca\sisbecaBundle\Entity\FormaIngreso $fIngreso)
    {
        $this->fIngreso = $fIngreso;
    }

    /**
     * Get fIngreso
     *
     * @return sisbeca\sisbecaBundle\Entity\FormaIngreso 
     */
    public function getFIngreso()
    {
        return $this->fIngreso;
    }

    /**
     * Set idAnnoCurso
     *
     * @param sisbeca\sisbecaBundle\Entity\AnnoCurso $idAnnoCurso
     */
    public function setIdAnnoCurso(\sisbeca\sisbecaBundle\Entity\AnnoCurso $idAnnoCurso)
    {
        $this->idAnnoCurso = $idAnnoCurso;
    }

    /**
     * Get idAnnoCurso
     *
     * @return sisbeca\sisbecaBundle\Entity\AnnoCurso 
     */
    public function getIdAnnoCurso()
    {
        return $this->idAnnoCurso;
    }

    /**
     * Set idTurno
     *
     * @param sisbeca\sisbecaBundle\Entity\Turno $idTurno
     */
    public function setIdTurno(\sisbeca\sisbecaBundle\Entity\Turno $idTurno)
    {
        $this->idTurno = $idTurno;
    }

    /**
     * Get idTurno
     *
     * @return sisbeca\sisbecaBundle\Entity\Turno 
     */
    public function getIdTurno()
    {
        return $this->idTurno;
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

    /**
     * Set codCarrera
     *
     * @param sisbeca\sisbecaBundle\Entity\Carreras $codCarrera
     */
    public function setCodCarrera(\sisbeca\sisbecaBundle\Entity\Carreras $codCarrera)
    {
        $this->codCarrera = $codCarrera;
    }

    /**
     * Get codCarrera
     *
     * @return sisbeca\sisbecaBundle\Entity\Carreras 
     */
    public function getCodCarrera()
    {
        return $this->codCarrera;
    }
}