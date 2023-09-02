<?php

namespace core;

class Router
{

    private $controller = 'Site';
    private $method = 'home';
    private $param = [];

    public function __construct()
    {
        $router = $this->url();

        if (file_exists('app/controllers/' . ucfirst($router[0]) . '.php')) :
            echo 'Arquivo existe.';
        else :
            echo 'Arquivo não existe.';
        endif;
    }

    private function url()
    {
        $parse_url = explode("/", filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));
        return $parse_url;
    }
}
