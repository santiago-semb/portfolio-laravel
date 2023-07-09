<?php

namespace App\Http\Controllers;

use App\Models\Educacion;
use App\Models\Persona;
use Illuminate\Http\Request;

class EducacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // solo necesito la primera persona, que soy yo.
        $persona = Persona::all()->first();
        return view('educacion.educacion',compact('persona'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Educacion $educacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Educacion $educacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Educacion $educacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Educacion $educacion)
    {
        //
    }
}
