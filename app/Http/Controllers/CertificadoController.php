<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$skills = Skill::all();
        $persona = Persona::all()->first();
        $educacion = Educacion::all();*/
        $certificados = Certificado::all();
        return view('certificados.certificados',compact('certificados'));
    }

    public function create()
    {
        return view('ADMIN.certificados.crear-certificado');
    }

    public function store(Request $request)
    {
        $certificado = new Certificado;
        $certificado->persona_id = 1;
        $certificado->nombre = $request->nombre;
        $certificado->imagen = $request->imagen;
        $certificado->link = $request->link;
        $certificado->save();     
        return redirect()->route('certificado.index');
    }

    public function destroy(Certificado $certificado)
    {
        $certificado->delete();
        return redirect()->route('certificado.index');
    }

    public function edit(Certificado $certificado)
    {
        return view('ADMIN.certificados.editar-certificado', compact('certificado'));
    }

    public function update(Request $request)
    {
        $certificadoUpdate = Certificado::all()->find($request->id);
        $certificadoUpdate->nombre = $request->nombre;
        $certificadoUpdate->imagen = $request->imagen;
        $certificadoUpdate->link = $request->link;
        $certificadoUpdate->update();
        return redirect()->route('certificado.index');
    }
}
