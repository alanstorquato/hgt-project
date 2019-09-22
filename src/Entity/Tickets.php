<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *      *     normalizationContext={"groups"={"get"}},
 *     itemOperations={
 *         "get"={
 *              "normalization_context"={"groups"={"api_usuarios_tickets_get_subresource"}}
 *          },
 *         "put", "delete"
 *     },
 *     collectionOperations={
 *          "post",
            "get"={
 *              "normalization_context"={"groups"={"api_usuarios_tickets_get_subresource"}}
 *          },
 *     }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\TicketsRepository")
 * @ORM\Table(name="TICKETS")
 */
class Tickets
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_ticket", type="integer")
     * @Groups({"get_usuario", "api_usuarios_tickets_get_subresource"})
     */
    private $id;

    /**
     * @ORM\Column(name="is_meia_entrada", type="boolean")
     * @Groups({"get_usuario", "api_usuarios_tickets_get_subresource"})
     */
    private $ismeiaentrada;

    /**
     * @ORM\Column(type="string")
     * @Groups({"get_usuario", "api_usuarios_tickets_get_subresource"})
     */
    private $setor;

    /**
     * @ORM\Column(type="float")
     * @Groups({"get_usuario", "api_usuarios_tickets_get_subresource"})
     */
    private $preco;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Eventos", inversedBy="tickets")
     * @ORM\JoinColumn(name="id_evento", referencedColumnName="id_evento", nullable=false)
     * @Groups({"get_usuario", "api_usuarios_tickets_get_subresource"})
     */
    private $idevento;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuarios", inversedBy="tickets")
     * @ORM\JoinColumn(name="id_titular", referencedColumnName="id_usuario", nullable=false)
     * @Groups({"api_usuarios_tickets_get_subresource"})
     */
    private $idtitular;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pedidos", inversedBy="tickets")
     * @ORM\JoinColumn(name="id_pedido", referencedColumnName="id_pedido", nullable=false)
     */
    private $id_pedido;


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getIsMeiaEntrada(): ?bool
    {
        return $this->ismeiaentrada;
    }

    public function setIsMeiaEntrada(bool $ismeiaentrada): self
    {
        $this->ismeiaentrada = $ismeiaentrada;

        return $this;
    }

    public function getSetor():?string
    {
        return $this->setor;
    }

    public function setSetor(string $setor): self
    {
        $this->setor = $setor;

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



    public function getIdTitular(): Usuarios
    {
        return $this->idtitular;
    }

    public function setIdTitular(Usuarios $idtitular): self
    {
        $this->idtitular = $idtitular;

        return $this;
    }

    public function getIdPedido(): Pedidos
    {
        return $this->id_pedido;
    }

    public function setIdPedido(Pedidos $id_pedido): self
    {
        $this->id_pedido = $id_pedido;

        return $this;
    }

    public function getIdEvento(): Eventos
    {
        return $this->idevento;
    }

    public function setIdEvento(Eventos $idevento): self
    {
        $this->idevento = $idevento;

        return $this;
    }


}
