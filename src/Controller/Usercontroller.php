<?php
use Symfony\Component\HttpFoundation\Request;
use Entity\Utilisateur;
use Form\UtilisateurType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
namespace AppBundle\Controller;


class UserController extends Controller
{
    public function addaction(){
      /**
     * @Route("/add", name="inscription")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
        $user=new Utilisateur();
        $form =$this ->createform(UtilisateurType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);

            $em->flush();

            return new Response("L'utilisateur à bien été créer.");
        }

        $Formview=$form->createView();
        return $this->render("inscription.html.twig"),array?
    }

}