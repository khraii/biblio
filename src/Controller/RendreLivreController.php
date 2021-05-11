<?php

namespace App\Controller;

use App\Repository\EmpruntRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RendreLivreController extends AbstractController
{
    /**
     * @Route("/rendre/livre", name="rendre_livre")
     */
    public function index(EmpruntRepository $empruntRepository): Response
    {
        $user =$this->getUser();
        $tbrendu = $empruntRepository->findBy(['user' => $user, 'dateRendu' => Null]);
        dd($tbrendu);
        return $this->render('rendre_livre/index.html.twig', [
            'emprunts' =>  $tbrendu,
        ]);
    }
}
