<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function nuevoContacto(Request $request)
    {
        $nuevoContacto = $request->except('_token');

        Mail::to('admin@admin.com')->send(new ContactReceived($nuevoContacto));

        dd($nuevoContacto);


    }
}
