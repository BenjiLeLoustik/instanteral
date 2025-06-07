<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MainController extends AbstractController
{

    public $gallery = [
        [
            "src" => "",
            "size" => "",
            "title" => ""
        ],
        [
            "src" => "",
            "size" => "",
            "title" => ""
        ],
        [
            "src" => "",
            "size" => "tall",
            "title" => ""
        ],
        [
            "src" => "",
            "size" => "big",
            "title" => ""
        ],
        [
            "src" => "",
            "size" => "wide",
            "title" => ""
        ],
        [
            "src" => "",
            "size" => "",
            "title" => ""
        ],
        [
            "src" => "",
            "size" => "",
            "title" => ""
        ],
        [
            "src" => "",
            "size" => "tall",
            "title" => ""
        ],
        [
            "src" => "",
            "size" => "big",
            "title" => ""
        ],
        [
            "src" => "",
            "size" => "wide",
            "title" => ""
        ]
    ];

    public $aboutPictures = [
        [
            "src" => "",
            "size" => "",
            "title" => ""
        ],
        [
            "src" => "",
            "size" => "",
            "title" => ""
        ],
        [
            "src" => "",
            "size" => "tall",
            "title" => ""
        ],
        [
            "src" => "",
            "size" => "big",
            "title" => ""
        ],
        [
            "src" => "",
            "size" => "wide",
            "title" => ""
        ]
    ];
    public $aboutPseudo = "Allistair B.";
    public $aboutAvatar = "";
    public $aboutSmallDescription = "Lorem ipsum dolor sit amet consectetur. Bibendum donec ultricies eu libero urna eu pellentesque facilisi. Aenean dui feugiat tincidunt interdum ipsum mi rutrum. Eu amet ultrices neque aliquam velit id. A vitae scelerisque nunc interdum risus a egestas. At diam et pharetra suspendisse. Aenean at eu arcu donec nibh";
    public $aboutFullDescription = "Lorem ipsum dolor sit amet consectetur. Arcu nisi nec duis laoreet duis facilisis. Id enim ut egestas purus nec sollicitudin quis. Placerat mattis massa ultrices vulputate nulla in. Lectus ornare ac dignissim commodo varius suscipit ullamcorper. Vitae lorem vitae est felis at gravida sed aliquam. Sapien in orci bibendum ornare. Fames feugiat arcu blandit sit ornare. Est blandit non lobortis at tempor mauris nullam justo. Interdum neque quis ipsum risus sagittis velit et duis at. Eu arcu eget proin proin congue aliquam viverra. Interdum nunc neque varius lorem justo sagittis commodo. Neque neque scelerisque velit lectus nullam nascetur mattis. Egestas a placerat eu sit accumsan aliquet pellentesque amet. In lacinia tellus ut vitae.
                                    At cras pellentesque nunc adipiscing. Lacus sit purus sit quis nunc varius lacus. Est feugiat et consectetur curabitur sed leo cursus. Id in montes diam orci. Mattis enim id risus adipiscing feugiat vehicula pretium tincidunt gravida. Faucibus ipsum et amet a malesuada ut diam. Tempor auctor vitae mauris adipiscing. Nec ipsum eu scelerisque sem sed arcu ultrices sit id. Bibendum in eros sodales est eu. Adipiscing purus quam volutpat quis at. Sit consectetur vivamus sagittis imperdiet. Odio blandit quis viverra parturient donec felis gravida tempor. Facilisis morbi eros amet et.

                                    Faucibus velit eu quam faucibus nec ullamcorper vel malesuada. Habitant eget semper nunc sed. Augue nibh nulla sed consequat dictumst ut in. In aliquam sed sit id hac dictumst diam mauris congue. Et sollicitudin vitae vestibulum ornare nec varius orci leo faucibus. Eget egestas pellentesque nec fringilla adipiscing amet etiam. In porta sagittis id nibh quis vel viverra nec. Tristique vel netus purus tristique quis tempor. Bibendum turpis sollicitudin libero fames. Dignissim pellentesque elementum sit id. Habitant vivamus egestas feugiat commodo. Sed dui lobortis amet in viverra venenatis venenatis a. Enim tempus dui ultrices a. Est in id ut libero libero rhoncus. Sagittis tempus ut nullam malesuada integer.
                                    Viverra accumsan nec elementum aliquam id auctor. At elit mi erat id congue quis. Et in luctus velit sapien ut. Viverra ut dictum purus diam massa nibh rhoncus lacus. Dui pharetra nisi integer morbi eget. Mi semper etiam in ullamcorper ut leo tincidunt eget eget.

                                    At est faucibus ipsum aliquam. Habitant nulla in posuere a gravida vitae a cras lobortis. Velit tristique arcu facilisi iaculis eleifend sapien ultrices mauris. Pharetra non velit nisi enim sit eros. Cras feugiat sit duis quis tristique pellentesque lobortis. Amet sapien at vitae enim morbi aliquam enim. Quam neque fermentum sit nulla tincidunt egestas. Congue ut semper quis accumsan pellentesque cum ut. Sit sagittis tristique pellentesque auctor quis tempor viverra sed magna.
                                    Metus nulla et facilisis sit neque convallis amet amet semper. Vitae eget sit odio ultrices mauris id id. Facilisis viverra non est vitae. Purus sed maecenas consequat laoreet. Aliquet tortor id suscipit massa fermentum risus quis augue. Platea aliquet risus eget mattis dictum. Ullamcorper pharetra dui turpis et. Aliquam dui rhoncus viverra pellentesque convallis at at fusce nullam. Tincidunt elementum donec diam feugiat vitae elit amet consequat lectus. Bibendum eu sed non pulvinar at ipsum aliquam diam.
                                    Euismod netus in lectus condimentum. Posuere sed nibh leo neque interdum metus massa. Platea leo pulvinar laoreet malesuada tristique. Amet orci velit porttitor orci lectus tristique tristique at sodales. Ut sed et cursus tellus dapibus egestas nisl.

                                    Magna eget tellus diam malesuada eget velit libero. Mollis congue blandit turpis turpis augue. Nullam amet massa duis facilisis dui felis duis pretium netus. Velit ullamcorper nibh nec metus lacus. Arcu arcu proin diam consequat id. Sit blandit nisl quam quam et viverra. Quis ullamcorper iaculis orci commodo sed sed. Sed et justo dignissim ornare sollicitudin. Imperdiet enim sociis aliquet blandit consequat varius leo. Suspendisse fermentum habitasse risus ultricies dictum id. Fringilla est pretium malesuada tempor eget massa gravida. Amet sem et nunc commodo faucibus tempor ipsum. Dictumst sit amet pharetra velit integer ut fusce faucibus elit. In in massa id egestas sed dolor leo semper.
                                    Velit pulvinar ultrices pellentesque varius mi pellentesque. Tellus tristique nunc ac arcu dolor habitasse donec cras neque. Mattis arcu posuere pellentesque diam sodales. Ut morbi odio dolor dignissim. Natoque nibh cursus mattis viverra. Neque imperdiet nisi sollicitudin adipiscing tincidunt consequat. In nam et vulputate euismod suscipit et suspendisse urna sed. A dolor risus libero et dis euismod viverra lobortis. Adipiscing augue semper elementum nec feugiat lorem nisl.
                                    Vel est felis quis ornare adipiscing sagittis iaculis cursus sem. Porttitor dictum massa euismod sed sed id orci. Lacus sed morbi ultrices sed.";

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
            "about_pseudo"              => $this->aboutPseudo,
            "about_avatar"              => $this->aboutAvatar,
            "about_small_description"   => $this->aboutSmallDescription,
            "latestArticles"            => $latestArticles
        ]);
    }

    #[Route('/about', name: 'main.about')]
    public function about(): Response
    {
        return $this->render("pages/main/about.html.twig", [
            "about_pseudo" => $this->aboutPseudo,
            "about_avatar" => $this->aboutAvatar,
            "about_full_description" => $this->aboutFullDescription,
            "about_pictures" => $this->aboutPictures
        ]);
    }

    #[Route('/gallery', name: 'main.gallery')]
    public function gallery(): Response
    {
        return $this->render("pages/main/gallery.html.twig", [
            "gallery" => $this->gallery
        ]);
    }

}
