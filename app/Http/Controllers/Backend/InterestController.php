<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function interestCreate ()
    {
        return view ('backend.interest.create');
    }
    public function interestStore (Request $request)
    {
        $interest = new Interest();

        if(isset($request->image)){
            $imageName = rand(). '-interest-'.'.'.$request->image->extension();
            $request->image->move('backend/images/interest/', $imageName);

            $interest->image = $imageName;
        }

        $interest->interest_name = $request->interest_name;
        $interest->description = $request->description;

        $interest->save();
        return redirect()->back();
    }
    public function interestShow ()
    {
        $interests = Interest::get();
        return view ('backend.interest.list',compact('interests'));
    }
    public function interestDelete ($id)
    {
        $interest = Interest::find($id);
        $interest->delete();
        return redirect()->back();
    }
    public function interestEdit ($id)
    {
        $interest = Interest::find($id);
        return view ('backend.interest.edit',compact('interest'));
    }
    public function interestUpdate (Request $request, $id)
    {
        $interest = Interest::find($id);

        if(isset($request->image)){
            if($interest->image && file_exists('backend/images/interest/'.$interest->image));
            unlink('backend/images/interest/'.$interest->image);

            $imageName = rand(). '-interest-'.'.'.$request->image->extension();
            $request->image->move('backend/images/interest/',$imageName);

            $interest->image = $imageName;
        }

        $interest->interest_name = $request->interest_name;
        $interest->description = $request->description;

        $interest->save();
        return redirect('/admin/show-interest');
    }
}
