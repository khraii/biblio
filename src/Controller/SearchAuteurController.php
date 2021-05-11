<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchAuteurController extends AbstractController
{
    /**
     * @Route("/search/auteur", name="search_auteur")
     */
    public function index(Request $request): Response
    {
        return $this->render('search_auteur/index.html.twig', [
            'controller_name' => 'SearchAuteurController',
        ]);
    }
}
