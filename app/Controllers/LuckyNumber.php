<?php

namespace App\Controllers;

class LuckyNumber extends BaseController
{
    public function index()
    {
        return view('lucky_number/index', ['random_number' => rand(222,456)]);
    }
}