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
    public function serviceShow ()
    {
        $services = Service::get();
        return view ('backend.service.list',compact('services'));
    }
    public function serviceDelete ($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back();
    }
    public function serviceEdit ($id)
    {
        $service = Service::find($id);
        return view ('backend.service.edit',compact('service'));
    }
    public function serviceUpdate (Request $request, $id)
    {
        $service = Service::find($id);

        if(isset($request->image)){
            if($service->image && file_exists('backend/images/service/'.$service->image)){
                unlink('backend/images/service/'.$service->image);
            }

            $imageName = rand().'-service-'.'.'.$request->image->extension();
            $request->image->move('backend/images/service/', $imageName);
            $service->image = $imageName;
            
        }

        $service->service_name = $request->service_name;
        $service->description = $request->description;

        $service->save();
        return redirect('/admin/show-service');

    }

}
