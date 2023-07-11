<?php

namespace App\Http\Controllers;

use App\Models\Experiencia;
use App\Models\Persona;
use Illuminate\Http\Request;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // solo necesito la primera persona, que soy yo.
        $persona = Persona::all()->first();
        $experiencias = Experiencia::all();
        $personaDefault = new Persona;
        $personaDefault->nombre = "undefined";
        $personaDefault->apellido = "undefined";
        $personaDefault->edad = 0;
        $personaDefault->fotografia = "undefined";
        $personaDefault->email = "undefined";
        $personaDefault->telefono = 0;
        return view('experiencia.experiencia', compact('experiencias','persona','personaDefault'));
    }


    public function create()
      {
          return view('ADMIN.experiencias.crear-experiencia');
      }
  
      public function store(Request $request)
      {
          $experiencia = new Experiencia;
          $experiencia->persona_id = 1;
          $experiencia->titulo = $request->titulo;
          $experiencia->lugar = $request->lugar;
          $experiencia->desde = $request->desde;
          $experiencia->hasta = $request->hasta; 
          $experiencia->descripcion = $request->descripcion; 
          $experiencia->imagen = $request->imagen; 
          $experiencia->save();     
          return redirect()->route('experiencia.index');
      }
  
      public function destroy(Experiencia $experiencia)
      {
          $experiencia->delete();
          return redirect()->route('experiencia.index');
      }
  
      public function edit(Experiencia $experiencia)
      {
          return view('ADMIN.experiencias.editar-experiencia', compact('experiencia'));
      }
  
      public function update(Request $request)
      {
          $experienciaUpdate = Experiencia::all()->find($request->id);
          $experienciaUpdate->titulo = $request->nombre;
          $experienciaUpdate->lugar = $request->lenguajes;
          $experienciaUpdate->desde = $request->link;
          $experienciaUpdate->hasta = $request->descripcion;
          $experienciaUpdate->descripcion = $request->descripcion;
          $experienciaUpdate->imagen = $request->imagen;
          $experienciaUpdate->update();
          return redirect()->route('experiencia.index');
      }
  
}
