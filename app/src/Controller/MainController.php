<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/index")
     */
    public function index()
    {
        $page_title = 'La page';

        return $this->render('index.html.twig', ['page_title' => $page_title]);
    }
}