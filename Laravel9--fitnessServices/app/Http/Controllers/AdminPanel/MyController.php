<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return view('AdminPanel.index');
    }

    public function setting()
    {
        echo 'its working';
        exit();
    }
}
