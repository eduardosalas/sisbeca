<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\Turno
 *
 * @ORM\Table(name="turno")
 * @ORM\Entity
 */
class Turno
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="turno_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $turno
     *
     * @ORM\Column(name="turno", type="string", length=20, nullable=true)
     */
    private $turno;



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
     * Set turno
     *
     * @param string $turno
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;
    }

    /**
     * Get turno
     *
     * @return string 
     */
    public function getTurno()
    {
        return $this->turno;
    }
}