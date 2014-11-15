<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Alumnos
 *
 * @author jechenique
 */

/**
 * @ORM\Table(name="alumnos")
 * @ORM\Entity
 */
class Alumnos {

    /**
     * @var float
     * @ORM\Id
     * @ORM\Column(name="cedula", type="float", precision=8, scale=0, nullable=false)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="archivador", type="string", length=8, nullable=false)
     */
    private $archivador;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=30, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=30, nullable=false)
     */
    private $nombres;

    /**
     * Set cedula
     *
     * @param float $cedula
     * @return Alumnos
     */
    public function setCedula($cedula) {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return float 
     */
    public function getCedula() {
        return $this->cedula;
    }

    /**
     * Set archivador
     *
     * @param string $archivador
     * @return Alumnos
     */
    public function setArchivador($archivador) {
        $this->archivador = $archivador;

        return $this;
    }

    /**
     * Get archivador
     *
     * @return string 
     */
    public function getArchivador() {
        return $this->archivador;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    function getApellidos() {
        return $this->apellidos;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    function getNombres() {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Alumnos
     */
    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Alumnos
     */
    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

}
