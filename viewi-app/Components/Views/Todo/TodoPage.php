<?php

namespace Components\Views\Todo;

use Viewi\Components\BaseComponent;
use Viewi\Components\Http\HttpClient;

class TodoPage extends BaseComponent
{
    public string $title = 'Viewi - Reactive application for PHP';
    public $data = [];

    public function __construct(private HttpClient $http, public int $id)
    {
    }

    public function init()
    {
       
        $this->http
            ->get("https://jsonplaceholder.typicode.com/todos/" . $this->id)
            ->then(function ($response) {
                $this->data = $response;
            }, function () {
                
            }, function () {
               
            });
    }
}
