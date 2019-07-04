<?php declare(strict_types = 1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class MainController extends AbstractController
{
    /**
     * @Route(name="index",path="/")
     * @return Response
     */
    public function index(): Response
    {
        $page_title = 'La page';

        return $this->render('index.html.twig', ['page_title' => $page_title]);
    }
}
