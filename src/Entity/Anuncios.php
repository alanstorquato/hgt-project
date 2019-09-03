<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ApiResource()
 * @ORM\Table(name="ANUNCIOS")
 * @ORM\Entity(repositoryClass="App\Repository\AnunciosRepository")
 */
class Anuncios
{
    /**
     * @ORM\Id()
     * @ManyToOne(targetEntity="App\Entity\Usuarios", inversedBy="anuncios")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario", nullable=false)
     */
    private $id_usuario;

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_ticket", type="integer")
     */
    private $id_ticket;

    /**
     * @ORM\Column(type="float")
     */
    private $preco;

    public function getPreco(): ?float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): self
    {
        $this->preco = $preco;

        return $this;
    }
}
