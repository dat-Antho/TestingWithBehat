<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CustomController extends Controller
{
    /**
     * @Route("/custom", name="custom")
     */
    public function index()
    {
        return $this->render('custom/index.html.twig', [
            'controller_name' => 'CustomController',
        ]);
    }
}
