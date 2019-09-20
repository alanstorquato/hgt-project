<?php

namespace App\Controller;

use App\Entity\Eventos;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EventosController extends AbstractController
{
    /**
     * @Route("/api/eventos/find_all", name="find_eventos_all", methods={"GET"})
     */
    public function findEventos(){
        $repository = $this->getDoctrine()->getRepository(Eventos::class);

        $eventos = $repository->findAll();

        return $this->json($eventos);
    }

    /**
     * @Route("/eventos/find_by_id/{id}", name="find_eventos_by_id", methods={"GET"})
     */
    public function findEventosById($id){
        $repository = $this->getDoctrine()->getRepository(Eventos::class);

        $evento = $repository->find($id);

        var_dump($evento);

        return $this->json($evento);
    }

}
