<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\TVivienda
 *
 * @ORM\Table(name="t_vivienda")
 * @ORM\Entity
 */
class TVivienda
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="t_vivienda_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $tenenciaVivienda
     *
     * @ORM\Column(name="tenencia_vivienda", type="string", length=30, nullable=true)
     */
    private $tenenciaVivienda;



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
     * Set tenenciaVivienda
     *
     * @param string $tenenciaVivienda
     */
    public function setTenenciaVivienda($tenenciaVivienda)
    {
        $this->tenenciaVivienda = $tenenciaVivienda;
    }

    /**
     * Get tenenciaVivienda
     *
     * @return string 
     */
    public function getTenenciaVivienda()
    {
        return $this->tenenciaVivienda;
    }
}