<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotifyMeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render("base.html.twig");
    }

    /**
     * @Route("/notify", name="notify_me")
     */
    public function notifyMe()
    {

        return new Response("La response à marché");//$this->render("base.html.twig");
    }
}
