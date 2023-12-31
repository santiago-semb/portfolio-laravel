<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // solo necesito la primera persona, que soy yo.
        $persona = Persona::all()->first();
        $personaDefault = new Persona;
        $personaDefault->nombre = "undefined";
        $personaDefault->apellido = "undefined";
        $personaDefault->edad = 0;
        $personaDefault->fotografia = "undefined";
        $personaDefault->email = "undefined";
        $personaDefault->telefono = 0;

        // primeros 5
        $skills5 = Skill::select("*")->offset(0)->limit(5)->get();
        // otros 5
        $skills10 = Skill::select("*")->offset(5)->limit(10)->get();
        // otros 5
        $skills15 = Skill::select("*")->offset(10)->limit(15)->get();
        return view('sobre-mi.sobre-mi', compact('persona','personaDefault','skills5','skills10','skills15'));
    }

    public function create()
    {
        return view('ADMIN.personas.crear-persona');
    }

    public function store(Request $request)
    {
        $persona = new Persona;
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->edad = $request->edad;
        $persona->fotografia = $request->fotografia; 
        $persona->email = $request->email;
        $persona->telefono = $request->telefono;
        $persona->instagram = $request->instagram;
        $persona->linkedin = $request->linkedin;
        $persona->github = $request->github;
        $persona->save();     
        return redirect()->route('persona.index');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('persona.index');
    }

    public function edit(Persona $persona)
    {
        return view('ADMIN.personas.editar-persona', compact('persona'));
    }

    public function update(Request $request)
    {
        $personaUpdate = Persona::all()->find($request->id);
        $personaUpdate->nombre = $request->nombre;
        $personaUpdate->edad = $request->edad;
        $personaUpdate->fotografia = $request->fotografia;
        $personaUpdate->email = $request->email;
        $personaUpdate->telefono = $request->telefono;
        $personaUpdate->instagram = $request->instagram;
        $personaUpdate->linkedin = $request->linkedin;
        $personaUpdate->github = $request->github;
        $personaUpdate->update();
        return redirect()->route('persona.index');
    }
}
