<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class skillController extends Controller
{
    public function skillCreate ()
    {
        return view ('backend.skill.create');
    }

    public function skillStore (Request $request)
    {
        $skill = new Skill();

        $skill->skill_name = $request->skill_name;
        $skill->percentage = $request->percentage;

        $skill->save();
        return redirect()->back();

    }
    public function skillShow ()
    {
        $skills = Skill::get();
        return view ('backend.skill.list',compact('skills'));
    }
    public function skillDelete ($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->back();

    }
    public function skillEdit ($id)
    {
        $skill = Skill::find($id);
        return view ('backend.skill.edit',compact('skill'));
    }
    public function skillUpdate (Request $request, $id)
    {
        $skill = Skill::find($id);
        
        $skill->skill_name = $request->skill_name;
        $skill->percentage = $request->percentage;

        $skill->save();
        return redirect('/admin/show-skill');
    }
        

}
