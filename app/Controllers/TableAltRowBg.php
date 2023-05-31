<?php

namespace App\Controllers;

class TableAltRowBg extends BaseController
{
    public function index()
    {
        $rand_array = [];
        for ($i=0; $i < 10; $i++) { 
            $rand_array[$i] = $this -> generateRandomString();
        }

        $data = [
            'rand_array' => $rand_array
        ];
        return view('table_alt_row_bg/index', $data);
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}