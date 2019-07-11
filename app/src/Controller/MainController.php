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
                'title' => 'plombiste spécialisationné en plombagations canigou',
                'domain' => 'btp'
            ]
        ];
        // liste des dernières formations ajoutées
        $lastUpdated = [
            [
                'date' => '01/01/1991',
                'title' => 'plombiste spécialisationné en plombagations canigou',
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
     * @Route(name="trainingResults",path="/formations")
     */
    public function trainingResults () {

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
            ],
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
          'trainingResults.html.twig',
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






    /**
     * @Route(name="trainingDetails",path="/formation")
     */
    public function trainingDetails () {

        $page_title = 'La page';
        // Détail d'une formation
        $formation = [
            [
                'date' => '01/01/1991', // date ou string
                'title' => 'plombiste spécialisationné en plombages canins', // string
                'domain' => 'btp', // string
                'certif' => 0, // booleen
                'seats' => 25, // int
                'session_start' => '12/12/1222', // string ou date (format à voir)
                'session_end' => '20/20/2000', // string ou date (format à voir)
                'training_organization' => 'IMIE Angers', // string
                'city' => 'Angers', //string
                'department' => 74, //int
                'pta' => 0, // booleen
                'hours_in_center' => 15, //int
                'hours_in_company' => 10, //int
                'hours_total' => 25, //int
                'training_goal' => 'lorem', //string
                'expected_result' => 'lorem', //string
                'training_content' => 'lorem', //string
                'training_process' => 'lorem', //string
                'teaching_way' => 'lorem',
                // et tout le reste parce que j'en ai marre de tout taper...
            ]
        ];


        return $this->render(
          'trainingDetails.html.twig',
          [
            'page_title' => $page_title,
            'formation' => $formation
          ]
        );
    }

}
