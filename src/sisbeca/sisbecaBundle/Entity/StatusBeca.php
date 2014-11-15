<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\StatusBeca
 *
 * @ORM\Table(name="status_beca")
 * @ORM\Entity
 */
class StatusBeca
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="status_beca_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $statusBeca
     *
     * @ORM\Column(name="status_beca", type="string", nullable=true)
     */
    private $statusBeca;



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
     * Set statusBeca
     *
     * @param string $statusBeca
     */
    public function setStatusBeca($statusBeca)
    {
        $this->statusBeca = $statusBeca;
    }

    /**
     * Get statusBeca
     *
     * @return string 
     */
    public function getStatusBeca()
    {
        return $this->statusBeca;
    }
}