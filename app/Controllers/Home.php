<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('tela_login\login');
    }
    public function cadastro(): string
    {
        return view('tela_login\cadastro');
    }
}
