<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticPages extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home.html.twig', [
            'titre' => 'Bienvenue sur ma page d\'accueil',
            'paragraphe' => 'Voici un paragraphe page d\'accueil',
            'message' => ''
        ]);
    }

    #[Route('/apropos', name: 'apropos')]
    public function apropos(): Response
    {
        return $this->render('home.html.twig', [
            'titre' => 'Bienvenue ma page des a propos',
            'paragraphe' => 'Voici un paragraphe',
            'message' => ''
        ]);
    }

    // méthode a ajouter dans la classe StaticPages

    #[Route('/number/{id}', name: 'number')]
    public function number(int $id): Response
    {
        $message = 'Le nombre reçu est '.$id;
        return $this->render('home.html.twig', [
            'titre' => 'Bienvenue ma page des a propos',
            'paragraphe' => 'Voici un paragraphe',
            'message' => $message
        ]);
    }




}