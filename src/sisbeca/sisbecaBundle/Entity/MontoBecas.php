<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\MontoBecas
 *
 * @ORM\Table(name="monto_becas")
 * @ORM\Entity
 */
class MontoBecas
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="monto_becas_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var float $monto
     *
     * @ORM\Column(name="monto", type="float", nullable=true)
     */
    private $monto;

    /**
     * @var TipoBeca
     *
     * @ORM\ManyToOne(targetEntity="TipoBeca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_beca", referencedColumnName="id")
     * })
     */
    private $idTipoBeca;



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
     * Set monto
     *
     * @param float $monto
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    }

    /**
     * Get monto
     *
     * @return float 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set idTipoBeca
     *
     * @param sisbeca\sisbecaBundle\Entity\TipoBeca $idTipoBeca
     */
    public function setIdTipoBeca(\sisbeca\sisbecaBundle\Entity\TipoBeca $idTipoBeca)
    {
        $this->idTipoBeca = $idTipoBeca;
    }

    /**
     * Get idTipoBeca
     *
     * @return sisbeca\sisbecaBundle\Entity\TipoBeca 
     */
    public function getIdTipoBeca()
    {
        return $this->idTipoBeca;
    }
}