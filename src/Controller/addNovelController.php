<?php


namespace App\Controller;

use App\Entity\Novel;
use App\Form\AddNovelType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class addNovelController extends AbstractController
{
    /**
     * @Route("/ajouter-novel", name="add_novel")
     */
    public function addNovel(Request $request): Response
    {
        $alert = null;
        $novel = new Novel();
        $form = $this->createForm(AddNovelType::class, $novel);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $novel->setDatePost(new \DateTime('now'));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($novel);
            $entityManager->flush();
            $alert = "Le novel a été ajouté avec succès !";
        }
        return $this->render('traductor/add_novel.html.twig', [
            'addNovelForm' => $form->createView(),
            'alert' => $alert
        ]);

    }
}