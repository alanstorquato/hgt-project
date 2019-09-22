<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

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
     * @Groups({"get_eventos"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_eventos"})
     */
    private $nome;

    /**
     * @ORM\Column(name="rede_sociais", type="string", length=255)
     * @Groups({"get_eventos"})
     */
    private $redesociais;

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
        return $this->redesociais;
    }

    public function setRedeSociais(string $redesociais): self
    {
        $this->redesociais = $redesociais;

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
