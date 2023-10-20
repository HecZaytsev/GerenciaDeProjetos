<?php

namespace App\Controllers;

class Menu extends BaseController
{
    public function main(): string
    {
        return view('menu');
    }
}
