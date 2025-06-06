<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MainController extends AbstractController
{
    
    #[Route('/', name: 'main.index')]
    public function index(): Response
    {
        return $this->render("pages/main/index.html.twig", [
            "about_pseudo"              => "Allistair B.",
            "about_avatar"              => "",
            "about_small_description"   => "Lorem ipsum dolor sit amet consectetur. Bibendum donec ultricies eu libero urna eu pellentesque facilisi. Aenean dui feugiat tincidunt interdum ipsum mi rutrum. Eu amet ultrices neque aliquam velit id. A vitae scelerisque nunc interdum risus a egestas. At diam et pharetra suspendisse. Aenean at eu arcu donec nibh",
        ]);
    }

}
