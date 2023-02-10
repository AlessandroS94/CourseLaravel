<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(int $id)
    {
        return 'Hello, World!'. $id;
    }
    public function message2(string $view)
    {
        return 'Hello, World!'. $view;
    }

    public function returnView(){
        return view("ciao");
    }

    public function view3(){
        return view('ciao2', ['name' => 'Alessandro Sallese']);
    }
}
