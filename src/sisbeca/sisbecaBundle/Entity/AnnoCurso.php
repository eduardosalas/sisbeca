<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\AnnoCurso
 *
 * @ORM\Table(name="anno_curso")
 * @ORM\Entity
 */
class AnnoCurso
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anno_curso_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $anno
     *
     * @ORM\Column(name="anno", type="integer", nullable=true)
     */
    private $anno;



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
     * Set anno
     *
     * @param integer $anno
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;
    }

    /**
     * Get anno
     *
     * @return integer 
     */
    public function getAnno()
    {
        return $this->anno;
    }
}