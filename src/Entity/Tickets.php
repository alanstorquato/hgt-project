<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     itemOperations={"get", "put"},
 *     collectionOperations={"post", "get"},
 * )
 * @ORM\Entity(repositoryClass="App\Repository\TicketsRepository")
 * @ORM\Table(name="TICKETS")
 */
class Tickets
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_ticket", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_evento;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_meia_entrada;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuarios", inversedBy="tickets")
     * @ORM\JoinColumn(name="id_titular", referencedColumnName="id_usuario", nullable=false)
     */
    private $id_titular;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pedidos", inversedBy="tickets")
     * @ORM\JoinColumn(name="id_pedido", referencedColumnName="id_pedido", nullable=false)
     */
    private $id_pedido;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEvento(): ?int
    {
        return $this->id_evento;
    }

    public function setIdEvento(int $id_evento): self
    {
        $this->id_evento = $id_evento;

        return $this;
    }

    public function getIsMeiaEntrada(): ?bool
    {
        return $this->is_meia_entrada;
    }

    public function setIsMeiaEntrada(bool $is_meia_entrada): self
    {
        $this->is_meia_entrada = $is_meia_entrada;

        return $this;
    }

    public function getIdTitular(): Usuarios
    {
        return $this->id_titular;
    }

    public function setIdTitular(Usuarios $id_titular): self
    {
        $this->id_titular = $id_titular;

        return $this;
    }

    public function getIdPedido(): Pedidos
    {
        return $this->id_pedido;
    }

    public function setIdPedido(Pedidos $id_pedido): self
    {
        $this->id_pedido = $id_pedido;

        return $this;
    }



}
