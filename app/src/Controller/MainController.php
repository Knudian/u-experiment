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
        // liste des intitulés de domaines professionnels
        $domains = [
          'domaine1',
          'domaine2',
          'Maxime appartient à Simon',
          'Simon appartient à Maxime',
          'Mais ils ne le savent pas ...'
        ];

        return $this->render(
          'index.html.twig',
          [
            'page_title' => $page_title,
            'domains' => $domains
          ]
        );
    }
}
