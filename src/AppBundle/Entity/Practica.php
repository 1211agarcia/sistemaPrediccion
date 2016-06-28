<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Practica
 *
 * @ORM\Table(name="practica")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PracticaRepository")
 */
class Practica
{
    const PRACTICA_ESTADO_INICIADA = false;
    const PRACTICA_ESTADO_FINALIZADA = true;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var array
     *
     * @ORM\Column(name="data", type="json_array")
     */
    private $data;

    /**
     * @var \Datetime $inicio
     *
     * @ORM\Column(name="inicio", type="datetime")
     */
    private $inicio;
    /**
     * @var \Datetime $fin
     *
     * @ORM\Column(name="fin", type="datetime", nullable=true)
     */
    private $fin;
    /**
     * @var boolean $estado
     *
     * @ORM\Column(name="estado", type="boolean")
     */
    private $estado;

    public function __construct()
    {
        $this->estado = self::PRACTICA_ESTADO_INICIADA;
        $this->inicio = new \DateTime();
        $this->data = array();
    }
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
     * Set data
     *
     * @param array $data
     * @return Practica
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return array 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set inicio
     *
     * @param \DateTime $inicio
     * @return Practica
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime 
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     * @return Practica
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime 
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     * @return Practica
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
