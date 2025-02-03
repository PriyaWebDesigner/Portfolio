<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index ()
    {
        $educations = Education::get();
        $skills = Skill::get();
        // dd($educations);
        return view ('frontend.index',compact('educations','skills'));
    }
}
