<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    #[Route(path: "/customer", name: "customer")]
    public function customer(): Response
    {
        return $this->render('components/customer.html.twig');
    }
}