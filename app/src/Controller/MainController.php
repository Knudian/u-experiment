<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
<<<<<<< HEAD
=======
use Symfony\Component\Routing\Annotation\Route;
>>>>>>> 976cfe6d3ccce0bd273343ef46183d2ade999a62

class MainController extends AbstractController
{
    /**
<<<<<<< HEAD
     * @Route("/index")
=======
     * @Route(name="index",path="/")
>>>>>>> 976cfe6d3ccce0bd273343ef46183d2ade999a62
     */
    public function index()
    {
        $page_title = 'La page';

        return $this->render('index.html.twig', ['page_title' => $page_title]);
    }
}