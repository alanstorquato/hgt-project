<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\EventosRepository")
 */
class Eventos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_evento", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $data_pubicacao;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagem;

    /**
     * @ORM\Column(type="date")
     */
    private $dt_inicio_venda;

    /**
     * @ORM\Column(type="time")
     */
    private $hora_inicio_venda;

    /**
     * @ORM\Column(type="time")
     */
    private $hora_fim_evento;

    /**
     * @ORM\Column(type="text")
     */
    private $descricao;

    /**
     * @ORM\Column(type="bigint")
     */
    private $visualizacoes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataPubicacao(): ?\DateTimeInterface
    {
        return $this->data_pubicacao;
    }

    public function setDataPubicacao(\DateTimeInterface $data_pubicacao): self
    {
        $this->data_pubicacao = $data_pubicacao;

        return $this;
    }

    public function getImagem(): ?string
    {
        return $this->imagem;
    }

    public function setImagem(string $imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }

    public function getDtInicioVenda(): ?\DateTimeInterface
    {
        return $this->dt_inicio_venda;
    }

    public function setDtInicioVenda(\DateTimeInterface $dt_inicio_venda): self
    {
        $this->dt_inicio_venda = $dt_inicio_venda;

        return $this;
    }

    public function getHoraInicioVenda(): ?\DateTimeInterface
    {
        return $this->hora_inicio_venda;
    }

    public function setHoraInicioVenda(\DateTimeInterface $hora_inicio_venda): self
    {
        $this->hora_inicio_venda = $hora_inicio_venda;

        return $this;
    }

    public function getHoraFimEvento(): ?\DateTimeInterface
    {
        return $this->hora_fim_evento;
    }

    public function setHoraFimEvento(\DateTimeInterface $hora_fim_evento): self
    {
        $this->hora_fim_evento = $hora_fim_evento;

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

    public function getVisualizacoes(): ?string
    {
        return $this->visualizacoes;
    }

    public function setVisualizacoes(string $visualizacoes): self
    {
        $this->visualizacoes = $visualizacoes;

        return $this;
    }
}
