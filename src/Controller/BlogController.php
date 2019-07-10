<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


//extend recupere l'attribue du parent
class BlogController extends AbstractController
{
    //je créer mon chemin
    /**
     * @Route("/home", name="home")
     */
    //declaration de mon array
    public function home()
    {
        $articles = [
            0 => [
                'title' => 'Article 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://gal.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fprismamedia_people.2F2017.2F07.2F03.2Fcd76a89a-9f7f-44fc-a066-06bbb34281af.2Ejpeg/2216x1536/quality/80/charles-pasqua.jpeg'
            ],
            1 => [
                'title' => 'Article 2',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://s1.lprs1.fr/images/2018/05/15/7716630_a7834498-5761-11e8-aba9-269965d92401-1_940x500.jpg'
            ],
            2 => [
                'title' => 'Article 3',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://tel.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2FTEL.2Enews.2F2018.2F01.2F12.2F28453de3-9265-4ba8-9b3d-1dae3e693d03.2Ejpeg/1150x495/crop-from/top/une-nouvelle-emission-pour-jamy-gourmaud.jpg'
            ],
            3 => [
                'title' => 'Article 4',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://static.cnews.fr/sites/default/files/styles/image_640_360/public/jean-lassalle_0.jpg?itok=kzxd2dc3'
            ],
            4 => [
                'title' => 'Article 5',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://www.lamanchelibre.fr/photos/maxi/649833.jpg'
            ],
            5 => [
                'title' => 'Article 6',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://img.cdandlp.com/2016/10/imgL/118348804.jpg'
            ],

        ];
        //recupere les 3 premiers elements de mon array
        $lastArticles = array_slice($articles,0,3);

        return $this-> Render('homepage.html.twig',
            [
            'articles'=>$lastArticles

            ]);
    }

    /**
     * @Route ("/articles", name="articles")
     */
    //redirection vers le twig de ma page home et insertion de ma variable array
    public function articles()
    {
        $articles = [
            0 => [
                'title' => 'Article 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://gal.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fprismamedia_people.2F2017.2F07.2F03.2Fcd76a89a-9f7f-44fc-a066-06bbb34281af.2Ejpeg/2216x1536/quality/80/charles-pasqua.jpeg'
            ],
            1 => [
                'title' => 'Article 2',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'http://s1.lprs1.fr/images/2018/05/15/7716630_a7834498-5761-11e8-aba9-269965d92401-1_940x500.jpg'
            ],
            2 => [
                'title' => 'Article 3',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://tel.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2FTEL.2Enews.2F2018.2F01.2F12.2F28453de3-9265-4ba8-9b3d-1dae3e693d03.2Ejpeg/1150x495/crop-from/top/une-nouvelle-emission-pour-jamy-gourmaud.jpg'
            ],
            3 => [
                'title' => 'Article 4',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://static.cnews.fr/sites/default/files/styles/image_640_360/public/jean-lassalle_0.jpg?itok=kzxd2dc3'
            ],
            4 => [
                'title' => 'Article 5',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://www.lamanchelibre.fr/photos/maxi/649833.jpg'
            ],
            5 => [
                'title' => 'Article 6',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                'image' => 'https://img.cdandlp.com/2016/10/imgL/118348804.jpg'
            ],

        ];

        return $this->render('articles.html.twig', [
            'articles' => $articles

        ]);
    }
        //je place dans mon chemin un id (wildcard/variable d'url) qui me permet de recupérer un articles a partir de sa key
        //les chiffres sont des key representant l'id de l'articles
        /**
         * @Route ("/finish/{id}", name="finish")
         */
        //je déclare une méthode articles avec une valeur id en parametre

        public function finish($id)
        {
            //les id sont indiqués en key à l'interieur de ma variable article [array]
            //un array est un type de variable (une table est un tableau html)
            // key => valeur
            $articles = [
                0 => [
                    'title' => 'Article 1',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                    'image' => 'https://gal.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fprismamedia_people.2F2017.2F07.2F03.2Fcd76a89a-9f7f-44fc-a066-06bbb34281af.2Ejpeg/2216x1536/quality/80/charles-pasqua.jpeg'
                ],
                1 => [
                    'title' => 'Article 2',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                    'image' => 'http://s1.lprs1.fr/images/2018/05/15/7716630_a7834498-5761-11e8-aba9-269965d92401-1_940x500.jpg'
                ],
                2 => [
                    'title' => 'Article 3',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                    'image' => 'https://tel.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2FTEL.2Enews.2F2018.2F01.2F12.2F28453de3-9265-4ba8-9b3d-1dae3e693d03.2Ejpeg/1150x495/crop-from/top/une-nouvelle-emission-pour-jamy-gourmaud.jpg'
                ],
                3 => [
                    'title' => 'Article 4',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                    'image' => 'https://static.cnews.fr/sites/default/files/styles/image_640_360/public/jean-lassalle_0.jpg?itok=kzxd2dc3'
                ],
                4 => [
                    'title' => 'Article 5',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                    'image' => 'https://www.lamanchelibre.fr/photos/maxi/649833.jpg'
                ],
                5 => [
                    'title' => 'Article 6',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
                    'image' => 'https://img.cdandlp.com/2016/10/imgL/118348804.jpg'
                ],

            ];
                //la méthode 'return' compile le fichier twig en html afin de renvoyer une reponse au navigateur
                //elle renvoie egalement l'article correspondant à la requête
                return $this->render('finish.html.twig',[

                    //je recupere la valeur correspondant a la key '$id' de l'array $articles
                    // que je stock ensuite dans la variable twig 'article'
                'article'=> $articles[$id]

            ]);
        }


}