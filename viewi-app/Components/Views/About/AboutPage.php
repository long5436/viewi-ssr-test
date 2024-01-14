<?php

namespace Components\Views\About;

use Viewi\Components\BaseComponent;
use Viewi\Components\Http\HttpClient;

class AboutPage extends BaseComponent
{
    public string $title = 'About';
    public array $data = [];

    public function __construct(private HttpClient $http)
    {
    }

    public function init()
    {

        $this->http->post('http://localhost:5000/api/movies',[
            "id" => 123
        ])->then(function ($data) {
            $this->data = $data;
        }, function ($error) {
            echo $error;
        });
    }
}
