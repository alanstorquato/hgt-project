<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CartoesCreditoRepository")
 */
class CartoesCredito
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_cartao", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="bigint")
     */
    private $nro_cartao;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome_titular;

    /**
     * @ORM\Column(type="date")
     */
    private $dt_vencimento;

    /**
     * @ORM\Column(type="integer")
     */
    private $cod_seguraca;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNroCartao(): ?string
    {
        return $this->nro_cartao;
    }

    public function setNroCartao(string $nro_cartao): self
    {
        $this->nro_cartao = $nro_cartao;

        return $this;
    }

    public function getNomeTitular(): ?string
    {
        return $this->nome_titular;
    }

    public function setNomeTitular(string $nome_titular): self
    {
        $this->nome_titular = $nome_titular;

        return $this;
    }

    public function getDtVencimento(): ?\DateTimeInterface
    {
        return $this->dt_vencimento;
    }

    public function setDtVencimento(\DateTimeInterface $dt_vencimento): self
    {
        $this->dt_vencimento = $dt_vencimento;

        return $this;
    }

    public function getCodSeguraca(): ?int
    {
        return $this->cod_seguraca;
    }

    public function setCodSeguraca(int $cod_seguraca): self
    {
        $this->cod_seguraca = $cod_seguraca;

        return $this;
    }
}
