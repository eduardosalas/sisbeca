<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\Municipios
 *
 * @ORM\Table(name="municipios")
 * @ORM\Entity
 */
class Municipios
{
    /**
     * @var string $id
     *
     * @ORM\Column(name="id", type="string", length=7, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="municipios_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $etiqueta
     *
     * @ORM\Column(name="etiqueta", type="string", length=50, nullable=true)
     */
    private $etiqueta;

    /**
     * @var Estados
     *
     * @ORM\ManyToOne(targetEntity="Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado", referencedColumnName="id")
     * })
     */
    private $idEstado;



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
     * Set etiqueta
     *
     * @param string $etiqueta
     */
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta = $etiqueta;
    }

    /**
     * Get etiqueta
     *
     * @return string 
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
    }

    /**
     * Set idEstado
     *
     * @param sisbeca\sisbecaBundle\Entity\Estados $idEstado
     */
    public function setIdEstado(\sisbeca\sisbecaBundle\Entity\Estados $idEstado)
    {
        $this->idEstado = $idEstado;
    }

    /**
     * Get idEstado
     *
     * @return sisbeca\sisbecaBundle\Entity\Estados 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }
}