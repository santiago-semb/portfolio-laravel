<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillFormRequest;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('ADMIN.sobre-mi.skills.index');
    }

    public function create()
    {
        return view('ADMIN.skills.crear-skill');
    }

    public function store(Request $request)
    {
        $skill = new Skill;
        $skill->persona_id = 1;
        $skill->nombre = $request->nombre;
        $skill->categoria = $request->categoria;
        $skill->imagen = $request->imagen;
        $skill->save();     
        return redirect()->route('skill.index');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('skill.index');
    }

    public function edit(Skill $skill)
    {
        return view('ADMIN.skills.editar-skill', compact('skill'));
    }

    public function update(Request $request)
    {
        $skillUpdate = Skill::all()->find($request->id);
        $skillUpdate->nombre = $request->nombre;
        $skillUpdate->categoria = $request->categoria;
        $skillUpdate->imagen = $request->imagen;
        $skillUpdate->update();
        return redirect()->route('skill.index');
    }
}
