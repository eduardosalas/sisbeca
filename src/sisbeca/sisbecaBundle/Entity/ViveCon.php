<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\ViveCon
 *
 * @ORM\Table(name="vive_con")
 * @ORM\Entity
 */
class ViveCon
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="vive_con_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $pariente
     *
     * @ORM\Column(name="pariente", type="string", length=50, nullable=true)
     */
    private $pariente;



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
     * Set pariente
     *
     * @param string $pariente
     */
    public function setPariente($pariente)
    {
        $this->pariente = $pariente;
    }

    /**
     * Get pariente
     *
     * @return string 
     */
    public function getPariente()
    {
        return $this->pariente;
    }
}