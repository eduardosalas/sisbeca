<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\RangoIngreso
 *
 * @ORM\Table(name="rango_ingreso")
 * @ORM\Entity
 */
class RangoIngreso
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rango_ingreso_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $rangoIngreso
     *
     * @ORM\Column(name="rango_ingreso", type="string", nullable=true)
     */
    private $rangoIngreso;



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
     * Set rangoIngreso
     *
     * @param string $rangoIngreso
     */
    public function setRangoIngreso($rangoIngreso)
    {
        $this->rangoIngreso = $rangoIngreso;
    }

    /**
     * Get rangoIngreso
     *
     * @return string 
     */
    public function getRangoIngreso()
    {
        return $this->rangoIngreso;
    }
}