<?php

namespace App\Controllers;

class Credits extends BaseController
{
    public function index()
    {
        return view('credits/index');
    }
}