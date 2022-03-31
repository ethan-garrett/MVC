<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

class HomePageController
{
    private $renderer;
    private $db;

    public function __construct(PhpRenderer $renderer, \PDO $db)
    {
        $this->renderer = $renderer;
        $this->db = $db;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $args['test'] = $this->db;

        return $this->renderer->render($response, 'index.phtml', $args);
    }
}