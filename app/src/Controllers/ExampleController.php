<?php

namespace App\Controllers;

use Core\BaseController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ExampleController extends BaseController
{
    /**
     * Display home page
     *
     * @param  ResponseInterface $response
     * @return ResponseInterface
     */
    public function index(Response $response)
    {
        return $this->view->render($response, "flash.twig");
    }

    public function post(Response $response)
    {
        $this->flash->addMessage('pizza', "Delisyoso!");
        return $response->withRedirect("/");
    }
}
