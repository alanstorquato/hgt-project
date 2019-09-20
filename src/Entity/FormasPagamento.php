<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\FormasPagamentoRepository")
 * @ORM\Table(name="FORMAS_PAGAMENTO")
 */
class FormasPagamento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_forma_pg", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $pagamento;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CartoesCredito")
     * @ORM\JoinColumn(name="id_cartao", referencedColumnName="id_cartao", nullable=false)
     */
    private $id_cartao;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Carteira")
     * @ORM\JoinColumn(name="id_carteira", referencedColumnName="id_carteira", nullable=false)
     */
    private $id_carteira;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuarios", inversedBy="formas_pagamento")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario", nullable=false)
     */
    private $id_usuario;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pedidos", mappedBy="id_forma_pg")
     */
    private $pedidos;

    public function __construct()
    {
        $this->pedidos = new ArrayCollection();
    }

    public function getPedidos(): Collection
    {
        return $this->pedidos;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPagamento()
    {
        return $this->pagamento;
    }

    public function setPagamento($pagamento): void
    {
        $this->pagamento = $pagamento;
    }


    public function getIdCartao(): ?CartoesCredito
    {
        return $this->id_cartao;
    }

    public function setIdCartao(CartoesCredito $id_cartao): self
    {
        $this->id_cartao = $id_cartao;

        return $this;
    }

    public function getIdCarteira(): ?Carteira
    {
        return $this->id_carteira;
    }

    public function setIdCarteira(Carteira $id_carteira): self
    {
        $this->id_carteira = $id_carteira;

        return $this;
    }

    public function getIdUsuario(): ?Usuarios
    {
        return $this->id_usuario;
    }

    public function setIdUsuario(Usuarios $id_usuario): self
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }
}
