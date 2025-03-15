<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Education;
use App\Models\Hero;
use App\Models\Interest;
use App\Models\Service;
use App\Models\Skill;
use App\Models\WorkInterest;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index ()
    {
        $educations = Education::get();
        $services = Service::get();
        $skills = Skill::get();
        $interests = Interest::get();
        $hero = Hero::first();
        $aboutUs = About::first();
        $workInterest = WorkInterest::first();
        return view ('frontend.index',compact('educations','skills','services','interests','hero','aboutUs','workInterest'));
    }
}
