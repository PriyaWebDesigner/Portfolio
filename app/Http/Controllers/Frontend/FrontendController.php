<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index ()
    {
        $educations = Education::get();
        // dd($educations);
        return view ('frontend.index',compact('educations'));
    }
}
