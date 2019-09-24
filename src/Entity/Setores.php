<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\SetoresRepository")
 * @ORM\Table(name="SETORES")
 */
class Setores
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_setor", type="integer")
     * @Groups({"get_eventos"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_eventos"})
     */
    private $nome;

    /**
     * @ORM\Column(name="capacidade_max", type="bigint")
     * @Groups({"get_eventos"})
     */
    private $capacidademax;

    /**
     * @ORM\Column(type="float")
     * @Groups({"get_eventos"})
     */
    private $preco;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Eventos", inversedBy="setores")
     * @ORM\JoinColumn(name="id_evento", referencedColumnName="id_evento", nullable=false)
     */
    private $id_evento;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Locais", inversedBy="setores")
     * @ORM\JoinColumn(name="id_local", referencedColumnName="id_local", nullable=false)
     * @Groups({"get_usuario", "get_eventos"})
     */
    private $idlocal;

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

    public function getCapacidadeMax(): ?string
    {
        return $this->capacidademax;
    }

    public function setCapacidadeMax(string $capacidademax): self
    {
        $this->capacidademax = $capacidademax;

        return $this;
    }

    public function getPreco(): ?float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): self
    {
        $this->preco = $preco;

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

    public function getIdLocal(): Locais
    {
        return $this->idlocal;
    }


    public function setIdLocal(Locais $idlocal): self
    {
        $this->idlocal = $idlocal;

        return $this;
    }



}
