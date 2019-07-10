<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ExoController extends AbstractController{
    private $products =[
        [
            'title' => 'Trotinette 1',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
            'id' => 1
        ],
        [
            'title' => 'Trotinette 2',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
            'id' => 2
        ],
        [
            'title' => 'Trotinette 3',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
            'id' => 3
        ],
        [
            'title' => 'Trotinette 4',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
            'id' => 4
        ],
        [
            'title' => 'Trotinette 5',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
            'id' => 5
        ],
        [
            'title' => 'Trotinette 6',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
            'id' => 6
        ],
        [
            'title' => 'Trotinette 7',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
            'id' => 7
        ],
        [
            'title' => 'Trotinette 8',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum explicabo fuga ipsa nostrum officiis placeat quas quisquam ullam unde vitae. Blanditiis dolore enim perspiciatis quos rerum similique sint ut? Laboriosam.',
            'image' => 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/500x500/3/324168.jpg',
            'id' => 8
        ],
    ];
    /**
     * @Route("/Exo", name="Exo")
     */
    public function Exo(){

        return $this->render('exo.html.twig', [
            'products'=>$this->products
        ]);
    }

    /**
     * @Route("/SuiteExo/{id}", name="suiteExo")
     */
    public function SuiteExo($id){
        return $this->render('suiteExo.html.twig', [
            'product'=>$this->products[$id-1]
        ]);

    }
    /**
     * @Route("/cgv", name="cgv")
     */
    public function cgv(Request $request){
        $lang = $request->query->get('lang');

        return $this->render('cgv.html.twig', [
            'lang' => $lang
        ]);
    }






}