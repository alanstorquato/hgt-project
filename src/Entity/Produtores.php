<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ProdutoresRepository")
 * @ORM\Table(name="PRODUTORES")
 */
class Produtores
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_produtor", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cidade;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $uf;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cnpj;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome_responsavel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cnpj_responsavel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefone_principal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefone_secundario;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Eventos", mappedBy="id_produtor")
     */
    private $eventos;

    public function __construct()
    {
        $this->eventos = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getEventos(): Collection
    {
        return $this->eventos;
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

    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    public function setCidade(string $cidade): self
    {
        $this->cidade = $cidade;

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

    public function getCnpj(): ?string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getNomeResponsavel(): ?string
    {
        return $this->nome_responsavel;
    }

    public function setNomeResponsavel(string $nome_responsavel): self
    {
        $this->nome_responsavel = $nome_responsavel;

        return $this;
    }

    public function getCnpjResponsavel(): ?string
    {
        return $this->cnpj_responsavel;
    }

    public function setCnpjResponsavel(string $cnpj_responsavel): self
    {
        $this->cnpj_responsavel = $cnpj_responsavel;

        return $this;
    }

    public function getTelefonePrincipal(): ?string
    {
        return $this->telefone_principal;
    }

    public function setTelefonePrincipal(string $telefone_principal): self
    {
        $this->telefone_principal = $telefone_principal;

        return $this;
    }

    public function getTelefoneSecundario(): ?string
    {
        return $this->telefone_secundario;
    }

    public function setTelefoneSecundario(string $telefone_secundario): self
    {
        $this->telefone_secundario = $telefone_secundario;

        return $this;
    }
}
