<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Zoologico extends BaseController
{
    public function index()
    {
        return view('Nixon/index');
    }
    public function registrar()
    {
        return view('Nixon/registrar');
    }
    public function editar()
    {
        return view('Nixon/editar');
    }
}
