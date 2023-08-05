<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController  extends AbstractController
{
    #[Route('/',name:'homepage_')]
    public function homepage() {
        return new Response(content:'Hello!!!');
    }

    #[Route('/articles/{slug}',name:'articles_')]
    public function articles($slug) {
        $comments = [
            'первый',
            'второй',
            'третий',
            'четвертый',
            'пятый',
            
        ];
        //dd($slug,$this);
        return $this->render(
                'articles/show.html.twig',
                [
                    'article' => ucwords(str_replace('-', ' ', $slug)),
                    'comments' => $comments,
                ]
         );
        /*
        return new Response(sprintf(
                'Публикация страницы: %s',
                ucwords(str_replace('-', ' ', $slug))
             ));
         * 
         */
    }
    
    #[Route('/art', name:'art_')]
    public function art() {
        return new Response(content:'Art!!!');
    }


}