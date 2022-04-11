<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function index()
    {
        return view("front-page.index");
    }

    public function test()
    {
        return view("Front-page.test");
    }

    // calling the same function with parameters.
    public function Param($p)
    {
        echo "it is " . $p . "yeah";
    }
}
