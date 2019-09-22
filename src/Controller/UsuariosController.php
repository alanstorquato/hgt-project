<?php

namespace App\Controller;

use App\Entity\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UsuariosController extends AbstractController
{
    /**
     * @Route("/api/usuarios/find_by_email/{email}", name="find_usuario_by_cpf")
     */
    public function findUserByEmail($email){
        $repository = $this->getDoctrine()->getRepository(Usuarios::class);

        $usuario = $repository->findOneBy(['email' => $email]);

        return $this->json($usuario);
    }

    /**
     * @Route("/api/usuarios/find_by_cpf/{cpf}", name="find_usuario_by_cpf")
     */
    public function findUserByCpf($cpf){
        $repository = $this->getDoctrine()->getRepository(Usuarios::class);

        $usuario = $repository->findOneBy(['cpf' => $cpf]);

        return $this->json($usuario);
    }
}
