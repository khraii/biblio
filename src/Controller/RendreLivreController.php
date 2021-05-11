<?php

namespace App\Controller;

use App\Entity\Emprunt;
use App\Repository\EmpruntRepository;
use DateTime;
use Symfony\Component\HttpFoundation\Request;
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
        $tbrendu = $empruntRepository->findBy(['user' => $user, 'date_rendu' => Null]);
        return $this->render('rendre_livre/index.html.twig', [
            'emprunts' =>  $tbrendu,
        ]);
    }

    /**
     * @Route("/rendre/livre/{id}", name="rendu", methods={"GET","POST"})
     */
    public function rendre(Emprunt $emprunt): Response
    {
        $emprunt->setDateSortie(new \DateTime('now'));

        return $this->redirectToRoute('rendre_livre');
    }
}
