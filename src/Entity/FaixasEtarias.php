<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\FaixasEtariasRepository")
 * @ORM\Table(name="FAIXAS_ETARIAS")
 */
class FaixasEtarias
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_faixa_etaria", type="integer")
     * @Groups({"get_eventos"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_eventos"})
     */
    private $nome;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descricao;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Eventos", inversedBy="faixasetarias")
     * @ORM\JoinColumn(name="id_evento", referencedColumnName="id_evento", nullable=false)
     */
    private $id_evento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getIdEvento(): Eventos
    {
        return $this->id_evento;
    }

    public function setIdEvento(Eventos $id_evento): self
    {
        $this->id_evento = $id_evento;

        return $this;
    }

}
