<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controller extends AbstractController {

    /**
     * @Route("/", name="occasion")
     * @return Response
     */
    public function nextOccasion(): Response {
//        return new Response('test');
        return $this->render('occasion/occasion.html.twig');
    }
}