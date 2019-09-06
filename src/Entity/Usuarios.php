<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ApiResource()
 * @ORM\Table(name="USUARIOS")
 * @ORM\Entity(repositoryClass="App\Repository\UsuariosRepository")
 * @UniqueEntity(
 *     fields={"email"},
 *     message="E-mail já cadastrado"
 * )
 * @UniqueEntity(
 *     fields={"usuario"},
 *     message="Usuario ja cadastrado"
 * )
 */
class Usuarios implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_usuario", type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $primeiro_nome;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $sobrenome;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="date")
     */
    private $dt_nascimento;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $cpf;

    /**
     * @Assert\NotBlank
     * @Assert\Email()
     * @ORM\Column(type="string", length=255)
     */
    private $email = [];

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="decimal")
     */
    private $telefone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img_perfil;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $usuario;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $senha;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $logradouro;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $complemento;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $cep;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $cidade;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $uf;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Tickets", mappedBy="id_titular")
     */
    private $tickets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Anuncios", mappedBy="id_usuario")
     */
    private $anuncios;

    // /**
    //  * @OneToMany(targetEntity="App\Entity\CartoesCredito", mappedBy="id_cartao")
    //  */
    // private $cartoesCredito;

    // /**
    //  * @OneToMany(targetEntity="App\Entity\Pedidos", mappedBy="id_pedido")
    //  */
    // private $pedidos;

    public function __construct()
    {
        $this->tickets = new ArrayCollection();
        $this->anuncios = new ArrayCollection();
        // $this->cartoesCredito = new ArrayCollection();
        // $this->pedidos = new ArrayCollection();
    }

    public function getTickets(): Collection
    {
        return $this->tickets;
    }

    public function getAnuncios(): Collection
    {
        return $this->anuncios;
    }

    // public function getCartoesCredito(): Collection
    // {
    //     return $this->cartoesCredito;
    // }

    // public function getPedidos()
    // {
    //     return $this->pedidos;
    // }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrimeiroNome(): ?string
    {
        return $this->primeiro_nome;
    }

    public function setPrimeiroNome(string $primeiro_nome): self
    {
        $this->primeiro_nome = $primeiro_nome;

        return $this;
    }

    public function getSobrenome(): ?string
    {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getDtNascimento(): ?\DateTimeInterface
    {
        return $this->dt_nascimento;
    }

    public function setDtNascimento(\DateTimeInterface $dt_nascimento): self
    {
        $this->dt_nascimento = $dt_nascimento;

        return $this;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefone(): ?float
    {
        return $this->telefone;
    }

    public function setTelefone(float $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getImgPerfil(): ?string
    {
        return $this->img_perfil;
    }

    public function setImgPerfil(string $img_perfil): self
    {
        $this->img_perfil = $img_perfil;

        return $this;
    }

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(string $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getSenha(): ?string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    public function getLogradouro(): ?string
    {
        return $this->logradouro;
    }

    public function setLogradouro(string $logradouro): self
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getComplemento(): ?string
    {
        return $this->complemento;
    }

    public function setComplemento(string $complemento): self
    {
        $this->complemento = $complemento;

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

    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return ['ROLE_USER'];
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        // TODO: Implement getPassword() method.
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        return null;
    }

}
