<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Repository\LivreRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchAuteurController extends AbstractController
{
    /**
     * @Route("/search/auteur", name="search_auteur", methods={"POST"})
     */
   public function new(Request $request, LivreRepository $livreRepository): Response
    {
        $livre = new Livre();
        $search = explode("=",$request->getContent());
        $search = str_replace("+"," ",$search[1]);
        $tbauteur = $livreRepository->findAuteurLike($search);
        $response = json_encode($tbauteur);
        $response = new JsonResponse(['auteur' => $response]);
        dd($tbauteur, $response);
        return $this->render('search_auteur/index.html.twig', [
            'controller_name' => 'SearchAuteurController',
        ]);
    }
}
