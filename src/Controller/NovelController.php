<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NovelController extends AbstractController
{
    /**
     * @Route("/LN", name="LN")
     */
    public function listLn(): Response
    {
        return $this->render('list_ln.html.twig');
    }
    /**
     * @Route("/traducteurs", name="translators")
     */
    public function translators(): Response
    {
        return $this->render('translators.html.twig');
    }
    /**
     * @Route("/forum", name="forum")
     */
    public function forum(): Response
    {
        return $this->render('forum.html.twig');
    }


    /**
     * @Route("/ajouter-chapitre", name="add_chapter")
     */
    public function addChapter(): Response
    {
        return $this->render('traductor/add_chapter.html.twig');
    }
}