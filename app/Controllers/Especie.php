<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Especie extends BaseController
{
    public function index()
    {
        return view('Benavides/index');
    }
    public function listar()
    {
        return view('Benavides/listar');
    }

}
