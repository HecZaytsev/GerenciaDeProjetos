<?php

namespace App\Controllers;

class Cadastro extends BaseController
{
    public function cadastro(): string
    {
        return view('tela_login\cadastro');
    }
}
