<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function create ()
    {
        return view ('backend.education.create');
    }
    public function store (Request $request)
    {
        $education = new Education();

        $education->year = $request->year;
        $education->title = $request->title;
        $education->institute_name = $request->institute_name;

        $education->save();
        return redirect()->back();
    }

    public function show ()
    {
        $educations = Education::get();
        // dd($education);
        return view ('backend.education.list',compact('educations'));
    }

    public function delete ($id)
    {
        $education = Education::find($id);
        return redirect()->back();
    }

    public function edit ($id)
    {
        $education = Education::find($id);
        return view ('backend.education.edit',compact('education'));
    }
}
