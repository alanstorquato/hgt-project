<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LocaisRepository")
 * @ORM\Table(name="LOCAIS")
 */
class Locais
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_local", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_eventos"})
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=2)
     * @Groups({"get_eventos"})
     */
    private $uf;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Groups({"get_eventos"})
     */
    private $cidade;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Groups({"get_eventos"})
     */
    private $endereco;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Groups({"get_eventos"})
     */
    private $bairro;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Groups({"get_eventos"})
     */
    private $cep;

    /**
     * @ORM\Column(name="capacidade_max", type="bigint")
     * @Groups({"get_eventos"})
     */
    private $capacidademax;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Setores", mappedBy="idlocal")
     */
    private $setores;

    public function __construct()
    {
        $this->setores = new ArrayCollection();
    }


    public function getSetores(): Collection
    {
        return $this->setores;
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

    public function getUf(): ?string
    {
        return $this->uf;
    }

    public function setUf(string $uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    public function setCidade(string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    public function setBairro(string $bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(string $cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    public function getCapacidadeMaxima(): ?string
    {
        return $this->capacidademax;
    }

    public function setCapacidadeMaxima(string $capacidademax): self
    {
        $this->capacidademax = $capacidademax;

        return $this;
    }
}
