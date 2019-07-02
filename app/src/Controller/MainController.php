<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route(name="index",path="/")
     */
    public function index()
    {
        $page_title = 'La page';

        return $this->render('index.html.twig', ['page_title' => $page_title]);
    }
}