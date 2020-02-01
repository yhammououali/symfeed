<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function homepage(): Response
    {
        return new Response(
            '<html><body>Welcome to Symfeed app!</body></html>'
        );
    }
}