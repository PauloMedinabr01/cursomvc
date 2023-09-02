<?php

namespace app\controllers;

class Site
{
    public function home($foto)
    {
        $photo = $foto;
        require_once __DIR__ . '/../views/home.php';
    }
}
