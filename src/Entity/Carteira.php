<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     itemOperations={"get", "put"},
 *     collectionOperations={"post"},
 * )
 * @UniqueEntity(
 *     fields={"id_usuario"},
 *     message="Este usuario já possui uma carteira"
 * )
 * @ORM\Table(name="CARTEIRAS")
 * @ORM\Entity(repositoryClass="App\Repository\CarteiraRepository")
 */
class Carteira
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_carteira", type="integer")
     *  @Groups({"get_usuario"})
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     * @Groups({"get_usuario"})
     */
    private $saldo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuarios", inversedBy="carteiras")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario", nullable=false)
     */
    private $id_usuario;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSaldo(): ?float
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): self
    {
        $this->saldo = $saldo;

        return $this;
    }

    public function getIdUsuario(): Usuarios
    {
        return $this->id_usuario;
    }

    public function setIdUsuario(Usuarios $id_usuario): self
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

}
