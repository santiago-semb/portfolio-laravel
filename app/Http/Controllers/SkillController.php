<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillFormRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view('ADMIN.sobre-mi.skills.index', compact('skills'));
    }
}
