<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\AtracoesRepository")
 * @ORM\Table(name="ATRACOES")
 */
class Atracoes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_atracao", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rede_sociais;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Eventos", inversedBy="atracoes")
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

    public function getRedeSociais(): ?string
    {
        return $this->rede_sociais;
    }

    public function setRedeSociais(string $rede_sociais): self
    {
        $this->rede_sociais = $rede_sociais;

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
