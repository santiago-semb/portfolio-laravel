<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto.contacto');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreEmisor' => 'required|min:2',
            'emailEmisor' => 'required|email',
            'mensajeEmisor' => 'required|min:10',
        ]);

        $correo = new ContactoMailable($request);
        Mail::to('santiagosemb@gmail.com')->send($correo);

        return redirect()->route('contacto')->with('info', 'Mensaje enviado.');
    }
}
