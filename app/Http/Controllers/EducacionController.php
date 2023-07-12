<?php

namespace App\Http\Controllers;

use App\Models\Educacion;
use App\Models\Persona;
use App\Models\Skill;
use Illuminate\Http\Request;

class EducacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // primeros 5
        $skills5 = Skill::select("*")->offset(0)->limit(5)->get();
        // otros 5
        $skills10 = Skill::select("*")->offset(5)->limit(10)->get();
        // otros 5
        $skills15 = Skill::select("*")->offset(10)->limit(15)->get();

        $persona = Persona::all()->first();
        $educacion = Educacion::all();
        $personaDefault = new Persona;
        $personaDefault->nombre = "undefined";
        $personaDefault->apellido = "undefined";
        $personaDefault->edad = 0;
        $personaDefault->fotografia = "undefined";
        $personaDefault->email = "undefined";
        $personaDefault->telefono = 0;
        return view('educacion.educacion',compact('educacion','persona','skills5','skills10','skills15','personaDefault'));
    }

    public function create()
     {
         return view('ADMIN.educacion.crear-educacion');
     }
 
     public function store(Request $request)
     {
         $educacion = new Educacion;
         $educacion->persona_id = 1;
         $educacion->institucion = $request->institucion;
         $educacion->fecha = $request->fecha;
         $educacion->estado = $request->estado;
         $educacion->descripcion = $request->descripcion; 
         $educacion->save();     
         return redirect()->route('educacion.index');
     }
 
     public function destroy(Educacion $educacion)
     {
         $educacion->delete();
         return redirect()->route('educacion.index');
     }
 
     public function edit(Educacion $educacion)
     {
         return view('ADMIN.educacion.editar-educacion', compact('educacion'));
     }
 
     public function update(Request $request)
     {
         $educacionUpdate = Educacion::all()->find($request->id);
         $educacionUpdate->institucion = $request->institucion;
         $educacionUpdate->fecha = $request->fecha;
         $educacionUpdate->estado = $request->estado;
         $educacionUpdate->descripcion = $request->descripcion;
         $educacionUpdate->update();
         return redirect()->route('educacion.index');
     }
}
