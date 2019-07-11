<?php

namespace App\Controller;

use App\Form\SearchFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) :Response
    {
        $form = $this->createForm(SearchFormType::class);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            dump($form->getData());
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
