<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{

    /**
     * @Route("/", name="page.index")
     */
    public function showIndexPage()
    {
        return new Response('HODL');
    }

}