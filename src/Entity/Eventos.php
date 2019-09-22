<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

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
     * @Groups({"get_usuario"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,  nullable=false)
     * @Groups({"get_usuario"})
     */
    private $nome;

    /**
     * @ORM\Column(name="data_publicacao", type="date")
     */
    private $datapublicacao;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagem;

    /**
     * @ORM\Column(name="dt_inicio_evento", type="date")
     * @Groups({"get_usuario"})
     */
    private $dtinicioevento;

    /**
     * @ORM\Column(name="dt_fim_evento", type="date")
     * @Groups({"get_usuario"})
     */
    private $dtfimevento;

    /**
     * @ORM\Column(name="dt_inicio_venda", type="date")
     */
    private $dtiniciovenda;

    /**
     * @ORM\Column(name="hora_inicio_evento", type="time")
     * @Groups({"get_usuario"})
     */
    private $horainicioevento;

    /**
     * @ORM\Column(name="hora_fim_evento", type="time")
     * @Groups({"get_usuario"})
     */
    private $horafimevento;

    /**
     * @ORM\Column(type="text")
     */
    private $descricao;

    /**
     * @ORM\Column(type="integer")
     */
    private $visualizacoes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produtores", inversedBy="eventos")
     * @ORM\JoinColumn(name="id_produtor", referencedColumnName="id_produtor", nullable=false)
     */
    private $id_produtor;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categoria", inversedBy="eventos")
     * @ORM\JoinColumn(name="id_categoria", referencedColumnName="id_categoria", nullable=false)
     */
    private $id_categoria;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Atracoes", mappedBy="id_evento")
     */
    private $atracoes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Setores", mappedBy="id_evento")
     */
    private $setores;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FaixasEtarias", mappedBy="id_evento")
     */
    private $faixas_etarias;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Tickets", mappedBy="idevento")
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
        return $this->datapublicacao;
    }

    public function setDataPublicacao(\DateTimeInterface $datapublicacao): self
    {
        $this->datapublicacao = $datapublicacao;

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
        return $this->dtinicioevento;
    }

    public function setDtInicioEvento(\DateTimeInterface $dtinicioevento): self
    {
        $this->dtinicioevento = $dtinicioevento;

        return $this;
    }

    public function getDtFimEvento(): ?\DateTimeInterface
    {
        return $this->dtfimevento;
    }

    public function setDtFimEvento(\DateTimeInterface $dtfimevento): self
    {
        $this->dtfimevento = $dtfimevento;

        return $this;
    }

    public function getDtInicioVenda(): ?\DateTimeInterface
    {
        return $this->dtiniciovenda;
    }

    public function setDtInicioVenda(\DateTimeInterface $dtiniciovenda): self
    {
        $this->dtiniciovenda = $dtiniciovenda;

        return $this;
    }

    public function getHoraInicioEvento(): ?\DateTimeInterface
    {
        return $this->horainicioevento;
    }

    public function setHoraInicioEvento(\DateTimeInterface $horainicioevento): self
    {
        $this->horainicioevento = $horainicioevento;

        return $this;
    }

    public function getHoraFimEvento(): ?\DateTimeInterface
    {
        return $this->horafimevento;
    }

    public function setHoraFimEvento(\DateTimeInterface $horafimevento): self
    {
        $this->horafimevento = $horafimevento;

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
