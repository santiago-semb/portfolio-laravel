<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Skill;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // solo necesito la primera persona, que soy yo.
        $persona = Persona::all()->first();
        return view('sobre-mi.sobre-mi', compact('persona'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ADMIN.sobre-mi.agregar-sobre-mi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $persona = Persona::create($request->all());
        return redirect()->route('sobre-mi.ver', compact('persona'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        return view('ADMIN.sobre-mi.ver-sobre-mi', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        return view('ADMIN.sobre-mi.editar-sobre-mi', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
