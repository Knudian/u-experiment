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
                'title' => 'plombiste spécialisationné en plombages canins',
                'domain' => 'btp'
            ]
        ];
        // liste des dernières formations ajoutées
        $lastUpdated = [
            [
                'date' => '01/01/1991',
                'title' => 'plombiste spécialisationné en plombages canins',
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





    /**
     * @Route(name="results",path="/formations")
     */
    public function results () {

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
        $nbResults = 132;
        $list_sorting = [
            'Intitulé',
            'Date',
            'Département',
            'Certifiante'
        ];
        // liste des formations (résultats d'un recherche)
        $list_formation = [
            [
                'date' => '01/01/1991',
                'title' => 'plombiste spécialisationné en plombages canins',
                'domain' => 'btp',
                'certif' => 1,
                'seats' => 25,
                'session_start' => '12/12/1222',
                'session_end' => '20/20/2000',
                'training_organiz' => 'EMEI Angers',
                'city' => 'Palourdes',
                'departement' => 74,
                'pta' => 0
            ]
        ];


        return $this->render(
          'results.html.twig',
          [
            'page_title' => $page_title,
            'list_domain' => $list_domain,
            'list_job' => $list_job,
            'list_lvlin' => $list_lvlin,
            'list_lvlout' => $list_lvlout,
            'nbResults' => $nbResults,
            'list_sorting' => $list_sorting,
            'list_formation' => $list_formation
          ]
        );
    }
}
