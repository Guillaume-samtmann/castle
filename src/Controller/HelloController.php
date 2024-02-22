<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route('/page/hello', name: 'page_hello')]
    public function hello(): Response
    {
        return new Response(
            '<html><body><h1>Hello</h1></body></html>'
        );
    }
}