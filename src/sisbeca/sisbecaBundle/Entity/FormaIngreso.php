<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\FormaIngreso
 *
 * @ORM\Table(name="forma_ingreso")
 * @ORM\Entity
 */
class FormaIngreso
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="forma_ingreso_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $fIngreso
     *
     * @ORM\Column(name="f_ingreso", type="string", length=20, nullable=true)
     */
    private $fIngreso;



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
     * Set fIngreso
     *
     * @param string $fIngreso
     */
    public function setFIngreso($fIngreso)
    {
        $this->fIngreso = $fIngreso;
    }

    /**
     * Get fIngreso
     *
     * @return string 
     */
    public function getFIngreso()
    {
        return $this->fIngreso;
    }
}