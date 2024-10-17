<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // public function index(){
    //     $url = route ('jabstruk.store');
    // }

    function show ($param1)
    {
        return 'harby'. $param1;
    }
}
