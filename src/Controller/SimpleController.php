<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SimpleController extends AbstractController
{
    /**
     * @Route("/", name="simple")
     */
    public function index()
    {
        return $this->render('simple/index.html.twig', [
            'controller_name' => 'SimpleController',
        ]);
    }
}
