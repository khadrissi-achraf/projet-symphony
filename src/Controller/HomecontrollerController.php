<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomecontrollerController extends AbstractController
{
    #[Route('/', name: 'app_homecontroller')]
    public function index(): Response
    {
        return $this->render('homecontroller/index.html.twig', [
            'controller_name' => 'HomecontrollerController',
        ]);
    }
}
