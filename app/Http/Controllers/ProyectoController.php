<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.proyectos', compact('proyectos'));
    }

    public function create()
     {
         return view('ADMIN.proyectos.crear-proyecto');
     }
 
     public function store(Request $request)
     {
         $proyecto = new Proyecto;
         $proyecto->persona_id = 1;
         $proyecto->nombre = $request->nombre;
         $proyecto->lenguajes = $request->lenguajes;
         $proyecto->link = $request->link;
         $proyecto->descripcion = $request->descripcion; 
         $proyecto->save();    
         return redirect()->route('proyecto.index'); 
     }
 
     public function destroy(Proyecto $proyecto)
     {
         $proyecto->delete();
         return redirect()->route('proyecto.index');
     }
 
     public function edit(Proyecto $proyecto)
     {
         return view('ADMIN.proyectos.editar-proyecto', compact('proyecto'));
     }
 
     public function update(Request $request)
     {
         $proyectoUpdate = Proyecto::all()->find($request->id);
         $proyectoUpdate->nombre = $request->nombre;
         $proyectoUpdate->lenguajes = $request->lenguajes;
         $proyectoUpdate->link = $request->link;
         $proyectoUpdate->descripcion = $request->descripcion;
         $proyectoUpdate->update();
         return redirect()->route('proyecto.index');
     }
}
