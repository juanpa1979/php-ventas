<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    // rutas
    // rutas de las paginas
    $app->get('/', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");

        // Render index view
        return $container->get('renderer')->render($response, 'index.phtml', $args)->withHeader('Access-Control-Allow-Origin', '*');
    });

    $app->get('/admin', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/admin' route");

        // Render index view
        return $container->get('renderer')->render($response, 'admin.phtml', $args);
    });

    $app->get('/menu', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/admin' route");

        // Render index view
        return $container->get('renderer')->render($response, 'menu.phtml', $args);
    });

    // rutas de las apis

};
