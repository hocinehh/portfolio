<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $skill= SkillResource::collection(Skill::all());
        return Inertia::render('Welcome',compact("skills"));
    }
}
