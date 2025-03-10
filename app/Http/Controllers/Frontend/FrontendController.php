<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Interest;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index ()
    {
        $educations = Education::get();
        $services = Service::get();
        $skills = Skill::get();
        $interests = Interest::get();
        // dd($educations);
        return view ('frontend.index',compact('educations','skills','services','interests'));
    }
}
