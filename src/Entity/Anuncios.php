<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     attributes={"order"={"id":"DESC"}}
 * )
 *  @UniqueEntity(
 *     fields={"id_usuario", "idticket"},
 *     message="Anuncio já cadastrado"
 * )
 * @ORM\Entity(repositoryClass="App\Repository\AnunciosRepository")
 * @ORM\Table(name="ANUNCIOS")
 */
class Anuncios
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_anuncio", type="integer")
     * @Groups({"get_usuario"})
     */
    private $id;

     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuarios", inversedBy="anuncios")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario", nullable=false)
     */
    private $id_usuario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tickets")
     * @ORM\JoinColumn(name="id_ticket", referencedColumnName="id_ticket", nullable=false)
     * @Groups({"get_usuario"})
     */
    private $idticket;

    /**
     * @ORM\Column(type="float")
     * @Groups({"get_usuario"})
     */
    private $preco;

    /**
     * @ORM\Column(name="is_vendido", type="boolean", nullable=true)
     * @Groups({"get_usuario"})
     */
    private $isvendido;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIsVendido(): ?bool
    {
        return $this->isvendido;
    }

    public function setIsVendido(bool $isvendido): self
    {
        $this->isvendido = $isvendido;

        return  $this;
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

    public function getIdTicket(): Tickets
    {
        return $this->idticket;
    }


    public function setIdTicket(Tickets $idticket): self
    {
        $this->idticket = $idticket;

        return $this;
    }


}
