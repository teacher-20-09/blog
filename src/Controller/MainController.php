<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */

    public function index()
    {
        $render = array('title' => 'Головна');
        return $this->render('index.html.twig', $render);
    }
}