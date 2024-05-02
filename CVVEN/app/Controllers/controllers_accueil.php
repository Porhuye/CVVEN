<?php

namespace App\Controllers;

class controllers_accueil extends BaseController
{
    public function index()
    {
        return view('accueil');
    }
}
