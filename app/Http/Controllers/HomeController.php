<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function contact()
    {
        return view('layouts.contact');
    }
    public function team()
    {
        return view('team.contact');
    }
    
    public function mensajes()
    {
        !session('mensajes') ? $mensajes = [] : $mensajes = session('mensajes');

        return view('mensajes', ['mensajes' => $mensajes ]);

    }
}
