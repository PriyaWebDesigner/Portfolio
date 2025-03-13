<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Hero;
use App\Models\SiteSetting;
use App\Models\WorkInterest;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    // Site Setting
    public function showSettings ()
    {
        $siteSetting = SiteSetting::first();
        return view ('backend.settings.site-setting',compact('siteSetting'));
    }

    public function updateSettings (Request $request)
    {
        $getSiteSetting = SiteSetting::first();

        $getSiteSetting->name = $request->name;
        $getSiteSetting->address = $request->address;
        $getSiteSetting->email = $request->email;
        $getSiteSetting->phone = $request->phone;
        $getSiteSetting->twitter = $request->twitter;
        $getSiteSetting->facebook = $request->facebook;
        $getSiteSetting->instagram = $request->instagram;
        $getSiteSetting->linked_in = $request->linked_in;

        $getSiteSetting->save();
        return redirect()->back();
    }

    // Hero
    public function showhero()
    {
        $hero = Hero::first();
        return view ('backend.settings.hero',compact('hero'));
    }

    public function updatehero (Request $request)
    {
        $hero = Hero::first();
        
        $hero->title = $request->title;

        if(isset($request->image)){

            if($hero->image && file_exists('backend/images/hero/'.$hero->image)){
                unlink('backend/images/hero/'.$hero->image);
            }

            $imageName = rand().'-hero-'.'.'.$request->image->extension();  //6578-hero-.jpg
            $request->image->move('backend/images/hero/',$imageName);
            $hero->image = $imageName;

        }

        $hero->save();
        return redirect()->back();
    }

    //About Us
    public function showAboutUs ()
    {
        $aboutUs = About::first();
        return view ('backend.settings.about-us',compact('aboutUs'));
    }

    public function updateAboutUs (Request $request)
    {
        $aboutUs = About::first();

        if(isset($request->image)){

            if($aboutUs->image && file_exists('backend/images/aboutUs/'.$aboutUs->image)){
                unlink('backend/images/aboutUs/'.$aboutUs->image);
            }

            $imageName = rand().'-aboutUs-'.'.'.$request->image->extension();  //6578-aboutUs-.jpg
            $request->image->move('backend/images/aboutUs/',$imageName);
            $aboutUs->image = $imageName;

        }

        $aboutUs->description = $request->description;

        $aboutUs->save();
        return redirect()->back();

    }

    //Work Interest
    public function showWorkInterest ()
    {
        $workInterest = WorkInterest::first();
        return view ('backend.settings.work-interest',compact('workInterest'));
    } 

    public function updateWorkInterest (Request $request)
    {
        $workInterest = WorkInterest::first();
        
        $workInterest->title = $request->title;

        if(isset($request->image)){

            if($workInterest->image && file_exists('backend/images/work-interest/'.$workInterest->image)){
                unlink('backend/images/work-interest/'.$workInterest->image);
            }

            $imageName = rand().'-work-interest-'.'.'.$request->image->extension();  //6578-work-interest-.jpg
            $request->image->move('backend/images/work-interest/',$imageName);
            $workInterest->image = $imageName;

        }

        $workInterest->save();
        return redirect()->back();
    }
}
