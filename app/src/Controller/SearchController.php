<?php

namespace App\Controller;

use App\Form\SearchFormType;
use App\Service\SearchService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SearchController extends AbstractController
{
    /**
     * @var SearchService
     */
    private $searchService;

    public function __construct(SearchService $searchService)
    {
        $this->searchService = $searchService;
    }

    /**
     * @Route("/search", name="search")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) :Response
    {
        $form = $this->createForm(SearchFormType::class);
        $form->handleRequest($request);

        dump($form);


        if ($form->isSubmitted() && $form->isValid()) {
//            dump($form->getData());


            $formations = $this->searchService->search($form);

            dump('Yo Soy a la fiesta');

            /*
            $repository = $this->getDoctrine()->getRepository(Formation::class);
            $formations = $repository->findBy(
                ['intituleFormation' => $request->request->get('search')],
            );
            return $this->redirectToRoute('results');*/
        }


        return $this->render('search/index.html.twig', [
//            'controller_name' => 'SearchController',
            'searchFormType' => $form->createView()
        ]);
    }
}
