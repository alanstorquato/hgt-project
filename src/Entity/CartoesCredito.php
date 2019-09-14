<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     itemOperations={"get", "put"},
 *     collectionOperations={"post"},
 * )
 * @ORM\Table(name="CARTOES_CREDITO")
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
    private $cod_seguranca;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuarios", inversedBy="cartoesCredito")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario", nullable=false)
     */
    private $id_usuario;

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

    public function getCodSeguranca(): ?int
    {
        return $this->cod_seguranca;
    }

    public function setCodSeguranca(int $cod_seguranca): self
    {
        $this->cod_seguranca = $cod_seguranca;

        return $this;
    }

    public function getIdUsuario(): Usuarios
    {
        return $this->id_usuario;
    }

    function setIdUsuario(Usuarios $id_usuario): self
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }


}
