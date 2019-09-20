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
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="bigint")
     */
    private $capacidade_max;

    /**
     * @ORM\Column(type="float")
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
     */
    private $id_local;

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
        return $this->capacidade_max;
    }

    public function setCapacidadeMax(string $capacidade_max): self
    {
        $this->capacidade_max = $capacidade_max;

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
        return $this->id_local;
    }


    public function setIdLocal(Locais $id_local): self
    {
        $this->id_local = $id_local;

        return $this;
    }



}
