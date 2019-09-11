<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\EventosRepository")
 * @ORM\Table(name="EVENTOS")
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
    private $data_publicacao;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagem;

    /**
     * @ORM\Column(type="date")
     */
    private $dt_inicio_evento;

    /**
     * @ORM\Column(type="date")
     */
    private $dt_fim_evento;

    /**
     * @ORM\Column(type="date")
     */
    private $dt_inicio_venda;

    /**
     * @ORM\Column(type="time")
     */
    private $hora_inicio_evento;

    /**
     * @ORM\Column(type="time")
     */
    private $hora_fim_evento;

    /**
     * @ORM\Column(type="text")
     */
    private $descricao;

    /**
     * @ORM\Column(type="integer")
     */
    private $visualizacoes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Atracoes", mappedBy="id_evento")
     */
    private $atracoes;

    public function __construct()
    {
        $this->atracoes = new ArrayCollection();
    }

    public function getAtracoes(): Collection
    {
        return $this->atracoes;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataPublicacao(): ?\DateTimeInterface
    {
        return $this->data_publicacao;
    }

    public function setDataPublicacao(\DateTimeInterface $data_publicacao): self
    {
        $this->data_publicacao = $data_publicacao;

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

    public function getDtInicioEvento(): ?\DateTimeInterface
    {
        return $this->dt_inicio_evento;
    }

    public function setDtInicioEvento(\DateTimeInterface $dt_inicio_evento): self
    {
        $this->dt_inicio_evento = $dt_inicio_evento;

        return $this;
    }

    public function getDtFimEvento(): ?\DateTimeInterface
    {
        return $this->dt_fim_evento;
    }

    public function setDtFimEvento(\DateTimeInterface $dt_fim_evento): self
    {
        $this->dt_fim_evento = $dt_fim_evento;

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

    public function getHoraInicioEvento(): ?\DateTimeInterface
    {
        return $this->hora_inicio_evento;
    }

    public function setHoraInicioEvento(\DateTimeInterface $hora_inicio_evento): self
    {
        $this->hora_inicio_evento = $hora_inicio_evento;

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

    public function getVisualizacoes(): ?int
    {
        return $this->visualizacoes;
    }

    public function setVisualizacoes(int $visualizacoes): self
    {
        $this->visualizacoes = $visualizacoes;

        return $this;
    }
}
