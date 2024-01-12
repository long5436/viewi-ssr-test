<?php

namespace Components\Views\Home;

use Viewi\Components\BaseComponent;
use Viewi\Components\Http\HttpClient;

class HomePage extends BaseComponent
{
    public string $title = 'Viewi - Reactive application for PHP';
    public $data = [];

    public function __construct(private HttpClient $http)
    {
    }

    public function init()
    {
       
        $this->http
            ->get("https://jsonplaceholder.typicode.com/todos")
            ->then(function ($response) {
                $this->data = $response;
            }, function () {
                
            }, function () {
               
            });
    }
}
