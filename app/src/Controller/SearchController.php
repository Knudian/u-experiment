<?php

namespace App\Controller;

use App\Form\SearchFormType;
use App\Service\SearchService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class SearchController
 *
 * @package App\Controller
 */
class SearchController extends AbstractController
{
    /**
     * @var SearchService
     */
    private $searchService;

    /**
     * SearchController constructor.
     * @param SearchService $searchService
     */
    public function __construct(SearchService $searchService)
    {
        $this->searchService = $searchService;
    }

    /**
     * Page de recherche des formations
     * @Route("/search", name="search")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) :Response
    {
        $form = $this->createForm(SearchFormType::class);
        $form->handleRequest($request);

//        if ($form->isSubmitted() && $form->isValid()) {
//            $formations = $this->searchService->search($form->getData());

//            return $this->redirectToRoute('results');
//        }

        return $this->render('search/index.html.twig', [
            'searchFormType' => $form->createView()
        ]);
    }
}
