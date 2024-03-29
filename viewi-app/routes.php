<?php

use Components\Views\About\AboutPage;
use Components\Views\Home\HomePage;
use Components\Views\NotFound\NotFoundPage;
use Components\Views\Todo\TodoPage;
use Viewi\App;
use Viewi\Components\Http\Message\Response;

/**
 * @var App $app
 */
$router = $app->router();
$router->get('/about', AboutPage::class);
$router->get('/todo/{id}', TodoPage::class);
$router->get('/', HomePage::class);
$router
    ->get('*', NotFoundPage::class)
    ->transform(function (Response $response) {
        return $response->withStatus(404, 'Not Found');
    });
