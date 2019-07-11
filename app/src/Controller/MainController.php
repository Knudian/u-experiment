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
        $page_title = 'Titre de la page';
        $site_about = 'Texte descriptif du site';
        // liste des intitulés de domaines professionnels
        $list_domain = [
          'Agroalimentaire',
          'BTP',
          'Banque / Assurance',
          'Informatique / Télécoms',
          'Transports / Logistique'
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
                'date' => '05/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services'
            ],
            [
                'date' => '05/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services'
            ],
            [
                'date' => '05/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services'
            ]
        ];
        // liste des dernières formations ajoutées
        $lastUpdated = [
            [
                'date' => '05/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services'
            ],
            [
                'date' => '05/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services'
            ],
            [
                'date' => '05/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services'
            ]
        ];

        return $this->render(
          'index.html.twig',
          [
            'page_title' => $page_title,
            'site_about' => $site_about,
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

        $page_title = 'Titre de la page';
        // liste des intitulés de domaines professionnels
        $list_domain = [
          'Agroalimentaire',
          'BTP',
          'Banque / Assurance',
          'Informatique / Télécoms',
          'Transports / Logistique'
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
                'date' => '5/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services',
                'certif' => 1,
                'seats' => 25,
                'session_start' => '15/08/2019',
                'session_end' => '20/12/2019',
                'training_organiz' => 'AFPA',
                'city' => 'Angers',
                'departement' => 49,
                'pta' => 0
            ],
            [
                'date' => '5/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services',
                'certif' => 1,
                'seats' => 25,
                'session_start' => '15/08/2019',
                'session_end' => '20/12/2019',
                'training_organiz' => 'AFPA',
                'city' => 'Angers',
                'departement' => 49,
                'pta' => 0
            ],
            [
                'date' => '5/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services',
                'certif' => 1,
                'seats' => 25,
                'session_start' => '15/08/2019',
                'session_end' => '20/12/2019',
                'training_organiz' => 'AFPA',
                'city' => 'Angers',
                'departement' => 49,
                'pta' => 0
            ],
            [
                'date' => '5/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services',
                'certif' => 1,
                'seats' => 25,
                'session_start' => '15/08/2019',
                'session_end' => '20/12/2019',
                'training_organiz' => 'AFPA',
                'city' => 'Angers',
                'departement' => 49,
                'pta' => 0
            ],
            [
                'date' => '5/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services',
                'certif' => 1,
                'seats' => 25,
                'session_start' => '15/08/2019',
                'session_end' => '20/12/2019',
                'training_organiz' => 'AFPA',
                'city' => 'Angers',
                'departement' => 49,
                'pta' => 0
            ],
            [
                'date' => '5/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services',
                'certif' => 1,
                'seats' => 25,
                'session_start' => '15/08/2019',
                'session_end' => '20/12/2019',
                'training_organiz' => 'AFPA',
                'city' => 'Angers',
                'departement' => 49,
                'pta' => 0
            ],
            [
                'date' => '5/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services',
                'certif' => 1,
                'seats' => 25,
                'session_start' => '15/08/2019',
                'session_end' => '20/12/2019',
                'training_organiz' => 'AFPA',
                'city' => 'Angers',
                'departement' => 49,
                'pta' => 0
            ],
            [
                'date' => '5/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services',
                'certif' => 1,
                'seats' => 25,
                'session_start' => '15/08/2019',
                'session_end' => '20/12/2019',
                'training_organiz' => 'AFPA',
                'city' => 'Angers',
                'departement' => 49,
                'pta' => 0
            ],
            [
                'date' => '5/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services',
                'certif' => 1,
                'seats' => 25,
                'session_start' => '15/08/2019',
                'session_end' => '20/12/2019',
                'training_organiz' => 'AFPA',
                'city' => 'Angers',
                'departement' => 49,
                'pta' => 0
            ],
            [
                'date' => '5/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services',
                'certif' => 1,
                'seats' => 25,
                'session_start' => '15/08/2019',
                'session_end' => '20/12/2019',
                'training_organiz' => 'AFPA',
                'city' => 'Angers',
                'departement' => 49,
                'pta' => 0
            ],
            [
                'date' => '5/07/2019',
                'title' => "2438 - Qualification - Technicien(ne) supérieur(e) en système d'information géographique (TP) Niveau III",
                'domain' => 'Logiciels/outils/applications/services',
                'certif' => 1,
                'seats' => 25,
                'session_start' => '15/08/2019',
                'session_end' => '20/12/2019',
                'training_organiz' => 'AFPA',
                'city' => 'Angers',
                'departement' => 49,
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
     * @Route(name="trainingDetails",path="/formation/id")
     */
    public function trainingDetails () {

        $page_title = 'Titre de la page';
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
