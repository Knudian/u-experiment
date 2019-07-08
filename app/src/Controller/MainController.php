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
        $list_domain = [
          'domaine1',
          'domaine2',
          'Maxime appartient à Simon',
          'Simon appartient à Maxime',
          'Mais ils ne le savent pas ...'
        ];
        // liste des métiers
        $list_job = [
          'boulanger',
          'ébéniste',
          'je-m\'en-foutiste',
          'marsouin'
        ];
        // liste des niveaux d'entrée
        $list_lvlin = [
          'CAP',
          'BAC',
          'BAC+52',
          'Brevet des collèges'
        ];
        // liste des niveaux de sortie
        $list_lvlout = [
            'CAP',
            'BAC',
            'BAC+52',
            'Brevet des collèges'
        ];
        // liste des dernières formations ajoutées
        $lastAdded = [
            [
                'date' => '01/01/1991',
                'title' => 'plombiste spécialisationné en plomberies',
                'domain' => 'btp'
            ]
        ];
        // liste des dernières formations ajoutées
        $lastUpdated = [
            [
                'date' => '01/01/1991',
                'title' => 'plombiste spécialisationné en plomberies',
                'domain' => 'btp'
            ]
        ];

        return $this->render(
          'index.html.twig',
          [
            'page_title' => $page_title,
            'list_domain' => $list_domain,
            'list_job' => $list_job,
            'lastAdded' => $lastAdded,
            'lastUpdated' => $lastUpdated,
            'list_lvlin' => $list_lvlin,
            'list_lvlout' => $list_lvlout
          ]
        );
    }
}
