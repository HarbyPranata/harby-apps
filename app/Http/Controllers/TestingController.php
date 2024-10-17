<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    function informasi ()
    {
        phpinfo();
    }

    function enkripsi(string $param1)
    {
        $hash = hash('sha256',$param1);
        return 'angkanya adalah '. $hash;
    }

    function random($param1, $param2)
    {
        $random_number = rand ($param1, $param2);
        return 'angkanya adalah '. $random_number;
    }
}
