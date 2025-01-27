<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function serviceCreate ()
    {
        return view ('backend.service.create');
    }
    public function serviceStore (Request $request)
    {
        $service = new Service();

        if(isset($request->image)){
            $imageName = rand().'-service-'.'.'.$request->image->extension();
            $request->image->move('backend/images/service/', $imageName);
            // dd($imageName);
            $service->image = $imageName;
        }

        $service->service_name = $request->service_name;
        $service->description = $request->description;

        $service->save();
        return redirect()->back();
    }
}
