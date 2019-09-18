<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={
 *          "groups"={"Eventos"}
 *     })
 * @ORM\Entity(repositoryClass="App\Repository\EventosRepository")
 * @ORM\Table(name="EVENTOS")
 */
class Eventos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_evento", type="integer")
     * @Groups({"Eventos"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,  nullable=false)
     * @Groups({"Eventos"})
     */
    private $nome;

    /**
     * @ORM\Column(type="date")
     * @Groups({"Eventos"})
     */
    private $data_publicacao;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Eventos"})
     */
    private $imagem;

    /**
     * @ORM\Column(type="date")
     * @Groups({"Eventos"})
     */
    private $dt_inicio_evento;

    /**
     * @ORM\Column(type="date")
     * @Groups({"Eventos"})
     */
    private $dt_fim_evento;

    /**
     * @ORM\Column(type="date")
     * @Groups({"Eventos"})
     */
    private $dt_inicio_venda;

    /**
     * @ORM\Column(type="time")
     * @Groups({"Eventos"})
     */
    private $hora_inicio_evento;

    /**
     * @ORM\Column(type="time")
     * @Groups({"Eventos"})
     */
    private $hora_fim_evento;

    /**
     * @ORM\Column(type="text")
     * @Groups({"Eventos"})
     */
    private $descricao;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"Eventos"})
     */
    private $visualizacoes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produtores", inversedBy="eventos")
     * @ORM\JoinColumn(name="id_produtor", referencedColumnName="id_produtor", nullable=false)
     * @Groups({"Eventos"})
     */
    private $id_produtor;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categoria", inversedBy="eventos")
     * @ORM\JoinColumn(name="id_categoria", referencedColumnName="id_categoria", nullable=false)
     * @Groups({"Eventos"})
     */
    private $id_categoria;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Atracoes", mappedBy="id_evento")
     * @Groups({"Eventos"})
     */
    private $atracoes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Setores", mappedBy="id_evento")
     * @Groups({"Eventos"})
     */
    private $setores;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FaixasEtarias", mappedBy="id_evento")
     * @Groups({"Eventos"})
     */
    private $faixas_etarias;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Tickets", mappedBy="id_evento")
     */
    private $tickets;

    public function __construct()
    {
        $this->atracoes = new ArrayCollection();
        $this->setores = new ArrayCollection();
        $this->faixas_etarias = new ArrayCollection();
        $this->tickets = new  ArrayCollection();
    }

    public function getAtracoes(): Collection
    {
        return $this->atracoes;
    }

    public function getSetores(): Collection
    {
        return $this->setores;
    }


    public function getFaixasEtarias(): Collection
    {
        return $this->faixas_etarias;
    }

    public function getTickets(): Collection
    {
        return $this->tickets;
    }


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

    public function getIdProdutor(): Produtores
    {
        return $this->id_produtor;
    }

    public function setIdProdutor(Produtores $id_produtor): self
    {
        $this->id_produtor = $id_produtor;

        return $this;
    }

    public function getIdCategoria(): Categoria
    {
        return $this->id_categoria;
    }

    public function setIdCategoria(Categoria $id_categoria): self
    {
        $this->id_categoria = $id_categoria;

        return $this;
    }


}
