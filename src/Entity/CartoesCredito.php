<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Table(name="CARTOES_CREDITO")
 * @ORM\Entity(repositoryClass="App\Repository\CartoesCreditoRepository")
 */
class CartoesCredito
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_cartao", type="integer")
     * @Groups({"get_usuario"})
     */
    private $id;

    /**
     * @ORM\Column(name="nro_cartao", type="bigint")
     * @Groups({"get_usuario"})
     */
    private $nrocartao;

    /**
     * @ORM\Column(name="nome_titular", type="string", length=255)
     * @Groups({"get_usuario"})
     */
    private $nometitular;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_usuario"})
     */
    private $bandeira;

    /**
     * @ORM\Column(name="dt_vencimento", type="date")
     * @Groups({"get_usuario"})
     */
    private $dtvencimento;

    /**
     * @ORM\Column(name="cod_seguranca", type="integer")
     * @Groups({"get_usuario"})
     */
    private $codseguranca;

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
        return $this->nrocartao;
    }

    public function setNroCartao(string $nrocartao): self
    {
        $this->nrocartao = $nrocartao;

        return $this;
    }

    public function getNomeTitular(): ?string
    {
        return $this->nometitular;
    }

    public function setNomeTitular(string $nometitular): self
    {
        $this->nometitular = $nometitular;

        return $this;
    }

    public function getBandeira()
    {
        return $this->bandeira;
    }

    public function setBandeira($bandeira): void
    {
        $this->bandeira = $bandeira;
    }

    public function getDtVencimento(): ?\DateTimeInterface
    {
        return $this->dtvencimento;
    }

    public function setDtVencimento(\DateTimeInterface $dtvencimento): self
    {
        $this->dtvencimento = $dtvencimento;

        return $this;
    }

    public function getCodSeguranca(): ?int
    {
        return $this->codseguranca;
    }

    public function setCodSeguranca(int $codseguranca): self
    {
        $this->codseguranca = $codseguranca;

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
