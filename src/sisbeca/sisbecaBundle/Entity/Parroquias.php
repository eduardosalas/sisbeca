<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\Parroquias
 *
 * @ORM\Table(name="parroquias")
 * @ORM\Entity
 */
class Parroquias
{
    /**
     * @var string $id
     *
     * @ORM\Column(name="id", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="parroquias_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $parroquia
     *
     * @ORM\Column(name="parroquia", type="string", length=50, nullable=true)
     */
    private $parroquia;

    /**
     * @var Municipios
     *
     * @ORM\ManyToOne(targetEntity="Municipios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_munici", referencedColumnName="id")
     * })
     */
    private $idMunici;



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
     * Set parroquia
     *
     * @param string $parroquia
     */
    public function setParroquia($parroquia)
    {
        $this->parroquia = $parroquia;
    }

    /**
     * Get parroquia
     *
     * @return string 
     */
    public function getParroquia()
    {
        return $this->parroquia;
    }

    /**
     * Set idMunici
     *
     * @param sisbeca\sisbecaBundle\Entity\Municipios $idMunici
     */
    public function setIdMunici(\sisbeca\sisbecaBundle\Entity\Municipios $idMunici)
    {
        $this->idMunici = $idMunici;
    }

    /**
     * Get idMunici
     *
     * @return sisbeca\sisbecaBundle\Entity\Municipios 
     */
    public function getIdMunici()
    {
        return $this->idMunici;
    }
}