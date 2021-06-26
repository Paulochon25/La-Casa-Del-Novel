<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Recrut extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function fetchallrecrutement(): Response
    {
        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder->select('u')
           ->from(recrutement::class, 'u');
        
        $query = $queryBuilder->getQuery();
        return $app['twig']->render('allrecrutement.html.twig', array("site" => $query));
 
})->bind('index');

    }
}
