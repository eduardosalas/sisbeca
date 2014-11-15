<?php

namespace sisbeca\sisbecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sisbeca\sisbecaBundle\Entity\Sino
 *
 * @ORM\Table(name="sino")
 * @ORM\Entity
 */
class Sino
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sino_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $sino
     *
     * @ORM\Column(name="sino", type="string", length=2, nullable=true)
     */
    private $sino;



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
     * Set sino
     *
     * @param string $sino
     */
    public function setSino($sino)
    {
        $this->sino = $sino;
    }

    /**
     * Get sino
     *
     * @return string 
     */
    public function getSino()
    {
        return $this->sino;
    }
}