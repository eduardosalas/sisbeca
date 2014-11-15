<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\EdoCivil
 *
 * @ORM\Table(name="edo_civil")
 * @ORM\Entity
 */
class EdoCivil
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="edo_civil_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $edoCivil
     *
     * @ORM\Column(name="edo_civil", type="string", length=30, nullable=true)
     */
    private $edoCivil;



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
     * Set edoCivil
     *
     * @param string $edoCivil
     */
    public function setEdoCivil($edoCivil)
    {
        $this->edoCivil = $edoCivil;
    }

    /**
     * Get edoCivil
     *
     * @return string 
     */
    public function getEdoCivil()
    {
        return $this->edoCivil;
    }
}