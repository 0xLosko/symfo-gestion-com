<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HostController extends AbstractController
{
    #[Route(path: "/host", name: "host")]
    public function host(): Response
    {
        return $this->render('components/host.html.twig');
    }
    
    #[Route(path: "host/hostUD", name: "host/hostUD")]
    public function hostUD(): Response
    {
        return $this->render('host/hostUD.html.twig');
    }
}
