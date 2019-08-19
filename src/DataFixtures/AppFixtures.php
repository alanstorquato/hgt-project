<?php

namespace App\DataFixtures;

use App\Entity\Usuarios;
use AppTestBundle\Entity\FunctionalTests\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    /**
     * @var \Faker\Factory
     */
    private $faker;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->faker = \Faker\Factory::create();
    }

    public function load(ObjectManager $manager)
    {
        $user = new Usuarios();
        $user->setPrimeiroNome($this->faker->firstName());
        $user->setSobrenome($this->faker->lastName());
        $user->setDtNascimento($this->faker->dateTime());
        $user->setCpf($this->faker->numerify('###-###-###-##'));
        $user->setEmail($this->faker->email);
        $user->setTelefone($this->faker->e164PhoneNumber());
        $user->setImgPerfil('/img/teste.png');
        $user->setUsuario('alan.torquato');
        $user->setSenha(
            $this->passwordEncoder->encodePassword(
                $user,
                'secret123'
            )
        );
        $user->setLogradouro($this->faker->streetAddress());
        $user->setNumero($this->faker->buildingNumber());
        $user->setComplemento('');
        $user->setCep($this->faker->postcode());
        $user->setCidade($this->faker->city);
        $user->setUf($this->faker->stateAbbr());

        $manager->persist($user);
        $manager->flush();
    }
}
