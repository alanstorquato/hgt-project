<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Table(name="CATEGORIAS")
 * @ORM\Entity(repositoryClass="App\Repository\CategoriaRepository")
 */
class Categoria
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_categoria", type="integer")
     *  @Groups({"get_eventos"})
     */

    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_eventos"})
     */
    private $nome;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Eventos", mappedBy="idcategoria")
     */
    private $eventos;

    public function __construct()
    {
        $this->eventos = new ArrayCollection();
    }


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
}
