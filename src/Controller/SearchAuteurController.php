<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Form\LivreType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchAuteurController extends AbstractController
{
    /**
     * @Route("/search/auteur", name="search_auteur", methods={"POST"})
     */
    public function index(Request $request): Response
    {
        $livre = new Livre();
        dd($request->getContent());
        // $form = $this->createForm(LivreType::class, $livre);
        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     dd($form->getData());
        // }
        return $this->render('search_auteur/index.html.twig', [
            'controller_name' => 'SearchAuteurController',
        ]);
    }
}
