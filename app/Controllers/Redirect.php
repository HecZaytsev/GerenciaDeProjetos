<?php

namespace App\Controllers;

class Redirect extends BaseController
{
    public function index(): string
    {
        header('Location: '.base_url('/login') );
        exit;
    }
}
