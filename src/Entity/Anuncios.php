<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ApiResource()
 * @ORM\Table(name="ANUNCIOS")
 * @ORM\Entity(repositoryClass="App\Repository\AnunciosRepository")
 * @UniqueEntity(
 *     fields={"id_usuario", "id_ticket"},
 *     message="Anuncio já cadastrado"
 * )
 */
class Anuncios
{
    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuarios")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario", nullable=false)
     */
    private $id_usuario;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Tickets")
     * @ORM\JoinColumn(name="id_ticket", referencedColumnName="id_ticket", nullable=false)
     */
    private $id_ticket;

    /**
     * @ORM\Column(type="float")
     */
    private $preco;

    // public function __construct($id_usuario, $id_ticket)
    // {
    //     $this->id_usuario = $id_usuario;
    //     $this->id_ticket = $id_ticket;
    // }

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
