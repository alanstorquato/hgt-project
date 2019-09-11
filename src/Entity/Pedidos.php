<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\PedidosRepository")
 * @ORM\Table(name="PEDIDOS")
 */
class Pedidos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_pedido", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_valido;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FormasPagamento", inversedBy="pedidos")
     * @ORM\JoinColumn(name="id_forma_pg", referencedColumnName="id_forma_pg", nullable=false)
     */
    private $id_forma_pg;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Tickets", mappedBy="id_pedido")
     */
    private $tickets;

    public function __construct()
    {
        $this->tickets = new ArrayCollection();
    }

    public function getTickets(): Collection
    {
        return $this->tickets;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsValido(): ?bool
    {
        return $this->is_valido;
    }

    public function setIsValido(bool $is_valido): self
    {
        $this->is_valido = $is_valido;

        return $this;
    }


    public function getIdFormaPg(): FormasPagamento
    {
        return $this->id_forma_pg;
    }


    public function setIdFormaPg(FormasPagamento $id_forma_pg): self
    {
        $this->id_forma_pg = $id_forma_pg;

        return $this;
    }


}
