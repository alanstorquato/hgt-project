<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PedidosRepository")
 */
class Pedidos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_pedido", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_valido;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsValido(): ?bool
    {
        return $this->is_valido;
    }

    public function setIsValido(bool $is_valido): self
    {
        $this->is_valido = $is_valido;

        return $this;
    }
}
