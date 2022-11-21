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
    
    #[Route(path: "customer/customertUD", name: "customer/customerUD")]
    public function customerUD(): Response
    {
        return $this->render('customer/customerUD.html.twig');
    }
}
