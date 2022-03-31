<?php

namespace App\Factories;

use App\Controllers\HomePageController;
use Psr\Container\ContainerInterface;

class HomePageControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $db = $container->get('dbConn');
        return new HomePageController($renderer, $db);
    }
}