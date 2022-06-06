<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('pages/home.html.twig');
    }

    /**
     * @Route("/offers", name="app_offer")
     */
    public function offer(): Response
    {
        return $this->render('pages/offer.html.twig');
    }

    /**
     * @Route("/companies", name="app_company")
     */
    public function company(): Response
    {
        return $this->render('pages/company.html.twig');
    }

    /**
     * @Route("/student", name="app_student")
     */
    public function student(): Response
    {
        return $this->render('pages/student.html.twig');
    }

    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig');
    }
}
