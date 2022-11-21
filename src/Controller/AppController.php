<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route(path: "/", name: "dashboard")]
    public function articles(): Response
    {
        return $this->render('components/dashboard.html.twig');
    }

    #[Route(path: "/project", name: "project")]
    public function project(): Response
    {
        return $this->render('components/project.html.twig');
    }

    #[Route(path: "/customer", name: "customer")]
    public function customer(): Response
    {
        return $this->render('components/customer.html.twig');
    }

    #[Route(path: "/host", name: "host")]
    public function host(): Response
    {
        return $this->render('components/host.html.twig');
    }
}