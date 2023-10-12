<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  home()
    {
        return view('home');
    }
    public function  kirim(Request $request)
    {
        $name = $request['name'];
        $namee = $request['namee'];
        return view('welcome', ['name' => $name]);
        return view('welcome', ['namee' => $namee]);
    }
}
