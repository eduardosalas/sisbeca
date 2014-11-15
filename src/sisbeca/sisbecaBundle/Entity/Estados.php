<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\Estados
 *
 * @ORM\Table(name="estados")
 * @ORM\Entity
 */
class Estados
{
    /**
     * @var string $id
     *
     * @ORM\Column(name="id", type="string", length=7, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="estados_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $estado
     *
     * @ORM\Column(name="estado", type="string", length=17, nullable=true)
     */
    private $estado;



    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set estado
     *
     * @param string $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}