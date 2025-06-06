<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArticlesController extends AbstractController
{
    
    #[Route('/articles', name: 'articles.index')]
    public function articles(): Response
    {
        return $this->render("pages/articles/index.html.twig", []);
    }

}
