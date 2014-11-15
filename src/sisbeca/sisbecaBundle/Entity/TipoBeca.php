<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\TipoBeca
 *
 * @ORM\Table(name="tipo_beca")
 * @ORM\Entity
 */
class TipoBeca
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipo_beca_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $tipoBeca
     *
     * @ORM\Column(name="tipo_beca", type="string", length=30, nullable=true)
     */
    private $tipoBeca;



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
     * Set tipoBeca
     *
     * @param string $tipoBeca
     */
    public function setTipoBeca($tipoBeca)
    {
        $this->tipoBeca = $tipoBeca;
    }

    /**
     * Get tipoBeca
     *
     * @return string 
     */
    public function getTipoBeca()
    {
        return $this->tipoBeca;
    }
}