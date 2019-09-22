<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ApiResource(
 *      normalizationContext={"groups"={"get"}},
 *     itemOperations={
 *         "get"={
 *              "normalization_context"={"groups"={"get_usuario"}}
 *          },
 *         "put", "delete"
 *     },
 *     collectionOperations={
 *          "post",
            "get"={
 *              "normalization_context"={"groups"={"get_usuario"}}
 *          },
 *     }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\UsuariosRepository")
 * @UniqueEntity(
 *     fields={"email"},
 *     message="E-mail já cadastrado"
 * )
 * @ORM\Table(name="USUARIOS")
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
     *@Groups({"get_usuario"})
     * @Assert\NotBlank
     * @ORM\Column(name="primeiro_nome", type="string", length=255)
     */
    private $primeironome;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_usuario"})
     */
    private $sobrenome;

    /**
     * @Assert\NotBlank
     * @ORM\Column(name="dt_nascimento", type="date")
     *@Groups({"get_usuario"})
     */
    private $dtnascimento;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     *@Groups({"get_usuario"})
     */
    private $cpf;

    /**
     * @Assert\NotBlank
     * @Assert\Email()
     * @ORM\Column(name="email", type="string", length=255)
     * @Groups({"get_usuario"})
     */
    private $email;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="decimal")
     * @Groups({"get_usuario"})
     */
    private $telefone;


    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(name="senha", type="string")
     */
    private $password;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     *@Groups({"get_usuario"})
     */
    private $logradouro;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     *@Groups({"get_usuario"})
     */
    private $numero;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     *@Groups({"get_usuario"})
     */
    private $complemento;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     *@Groups({"get_usuario"})
     */
    private $cep;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     *@Groups({"get_usuario"})
     */
    private $cidade;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     *@Groups({"get_usuario"})
     */
    private $uf;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Tickets", mappedBy="idtitular")
     * @Groups({"get_usuario"})
     * @ApiSubresource()
     */
    private $tickets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Anuncios", mappedBy="id_usuario")
     *@Groups({"get_usuario"})
     */
    private $anuncios;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CartoesCredito", mappedBy="id_usuario")
     *@Groups({"get_usuario"})
     */
    private $cartoesCredito;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Carteira", mappedBy="id_usuario")
     * @Groups({"get_usuario"})
     */
    private $carteiras;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FormasPagamento", mappedBy="id_usuario")
     * @Groups({"get_usuario"})
     */
    private $formaspagamento;

    public function __construct()
    {
        $this->tickets = new ArrayCollection();
        $this->anuncios = new ArrayCollection();
        $this->cartoesCredito = new ArrayCollection();
        $this->formaspagamento = new ArrayCollection();
    }

    public function getTickets(): Collection
    {
        return $this->tickets;
    }

    public function getAnuncios(): Collection
    {
        return $this->anuncios;
    }

    public function getCartoesCredito(): Collection
    {
        return $this->cartoesCredito;
    }

    public function getCarteiras()
    {
        return $this->carteiras;
    }

    public function getFormasPagamento(): Collection
    {
        return $this->formaspagamento;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrimeiroNome(): string
    {
        return $this->primeironome;
    }

    public function setPrimeiroNome($primeironome): self
    {
        $this->primeironome = $primeironome;

        return $this;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): self
    {
        $this->sobrenome = $sobrenome;

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

    public function getUsername(): string
    {
        return (string) $this->email;
    }

    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getDtNascimento(): ?\DateTimeInterface
    {
        return $this->dtnascimento;
    }

    public function setDtNascimento(\DateTimeInterface $dtnascimento): self
    {
        $this->dtnascimento = $dtnascimento;

        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro): void
    {
        $this->logradouro = $logradouro;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }

    public function getComplemento()
    {
        return $this->complemento;
    }

    public function setComplemento($complemento): void
    {
        $this->complemento = $complemento;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep): void
    {
        $this->cep = $cep;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade): void
    {
        $this->cidade = $cidade;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function setUf($uf): void
    {
        $this->uf = $uf;
    }

    public function getRoles(): array
    {
        return ['ROLE_USER'];
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    public function eraseCredentials()
    {
        return null;
    }

}
