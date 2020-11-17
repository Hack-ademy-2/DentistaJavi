<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $nuevoMensajeHome = request()->validate([
            'name' => 'required | min:6',
            'lastname' => 'required | min:6',
            'telefono' => 'required | min:9',
            'email' => 'required',
        ]);

        $request->session()->push('mensajes', $nuevoMensajeHome);

        return redirect()->route('home');

    }
}
