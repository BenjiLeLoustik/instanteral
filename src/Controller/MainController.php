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

        $latestArticles = [
            [
                "id" => 1,
                "cover" => "",
                "title" => "Lorem ipsum sit dolor emet",
                "smallDescription" => "Lorem ipsum dolor sit amet consectetur. Id lorem id diam pulvinar gravida consequat nec. Libero massa mauris et sapien sagittis mauris. Aenean feugiat tristique pretium ultrices fusce magna. Viverra aliquet nibh mi tortor purus venenatis est urna. Molestie sit ut ultrices morbi et integer...",
                "date" => [
                    "added" => "2025-03-20 10:00:00",
                    "updated" => ""
                ],
                "keywords" => array( "mot clé", "mot clé" ),
                "slug" => "lorem-ipsum-sit-dolor-emet"
            ],
            [
                "id" => 2,
                "cover" => "",
                "title" => "Lorem ipsum sit dolor emet 2",
                "smallDescription" => "Lorem ipsum dolor sit amet consectetur. Id lorem id diam pulvinar gravida consequat nec. Libero massa mauris et sapien sagittis mauris. Aenean feugiat tristique pretium ultrices fusce magna. Viverra aliquet nibh mi tortor purus venenatis est urna. Molestie sit ut ultrices morbi et integer...",
                "date" => [
                    "added" => "2025-03-20 10:00:00",
                    "updated" => "2025-05-10 20:00:00"
                ],
                "keywords" => array( "mot clé", "mot clé", "mot clé" ),
                "slug" => "lorem-ipsum-sit-dolor-emet-2"
            ]
        ];

        return $this->render("pages/main/index.html.twig", [
            "about_pseudo"              => "Allistair B.",
            "about_avatar"              => "",
            "about_small_description"   => "Lorem ipsum dolor sit amet consectetur. Bibendum donec ultricies eu libero urna eu pellentesque facilisi. Aenean dui feugiat tincidunt interdum ipsum mi rutrum. Eu amet ultrices neque aliquam velit id. A vitae scelerisque nunc interdum risus a egestas. At diam et pharetra suspendisse. Aenean at eu arcu donec nibh",
            "latestArticles"            => $latestArticles
        ]);
    }

}
