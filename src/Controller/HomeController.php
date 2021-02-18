<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/call_city", name="call-city")
     */
    public function callCity(CallApiService $callApiService, Request $request): Response
    {
        $city = $request->request->get('city');

        return $this->json([

            'data' => $callApiService->getCity($city)
        ]);

        /*$response = new JsonResponse();
        $response->setData(["requete" => $callApiService->getCity($city)]);
        return $response;*/
    }
}
