<?php

namespace App\Controller;

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
        $search = json_decode($request->getContent());
        $tbauteur = $livreRepository->findAuteurLike($search->key);
        $tbreturn = [];
        foreach ($tbauteur as $key => $value) {
            $tbreturn[$key] = ['id' => $value->getId(),'auteur' => $value->getAuteur()];   
        }
        return new JsonResponse(["tbauteur" => $tbreturn]);
    }
}
