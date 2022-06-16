<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ArticleType;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;

class ArticleFormController extends AbstractController
{
    #[Route('/article/form', name: 'app_article_form')]
    public function index(Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){

           $entityManagerInterface->persist($article);
           $entityManagerInterface->flush();
           return $this->redirectToRoute('app_article_form');
        }
        return $this->render('article_form/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
