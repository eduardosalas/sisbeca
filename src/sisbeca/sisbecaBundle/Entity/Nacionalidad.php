<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\Nacionalidad
 *
 * @ORM\Table(name="nacionalidad")
 * @ORM\Entity
 */
class Nacionalidad
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="nacionalidad_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $nacionalidad
     *
     * @ORM\Column(name="nacionalidad", type="string", length=15, nullable=true)
     */
    private $nacionalidad;



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
     * Set nacionalidad
     *
     * @param string $nacionalidad
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
    }

    /**
     * Get nacionalidad
     *
     * @return string 
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }
}