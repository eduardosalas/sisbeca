<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\Carreras
 *
 * @ORM\Table(name="carreras")
 * @ORM\Entity
 */
class Carreras
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="carreras_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $nombreCarrera
     *
     * @ORM\Column(name="nombre_carrera", type="string", length=255, nullable=true)
     */
    private $nombreCarrera;



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
     * Set nombreCarrera
     *
     * @param string $nombreCarrera
     */
    public function setNombreCarrera($nombreCarrera)
    {
        $this->nombreCarrera = $nombreCarrera;
    }

    /**
     * Get nombreCarrera
     *
     * @return string 
     */
    public function getNombreCarrera()
    {
        return $this->nombreCarrera;
    }
}