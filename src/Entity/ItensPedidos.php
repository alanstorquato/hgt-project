<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ItensPedidosRepository")
 */
class ItensPedidos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_item_pedido", type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
