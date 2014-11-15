<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\GrupoFamiliar
 *
 * @ORM\Table(name="grupo_familiar")
 * @ORM\Entity
 */
class GrupoFamiliar
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="grupo_familiar_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $nGrupoFa
     *
     * @ORM\Column(name="n_grupo_fa", type="integer", nullable=true)
     */
    private $nGrupoFa;



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
     * Set nGrupoFa
     *
     * @param integer $nGrupoFa
     */
    public function setNGrupoFa($nGrupoFa)
    {
        $this->nGrupoFa = $nGrupoFa;
    }

    /**
     * Get nGrupoFa
     *
     * @return integer 
     */
    public function getNGrupoFa()
    {
        return $this->nGrupoFa;
    }
}