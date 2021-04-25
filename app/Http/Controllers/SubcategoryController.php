<?php

namespace App\Http\Controllers;
use auth ;
use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{

    public function store(Request $request ,$id)
    {
        if(auth::check())
        {
            if(auth::user()->role == "admin")
            {
        
        $request->validate([
            'sub_name' => 'required|max:50',
            'catprice' => 'required|numeric|min:0|max:10000000',
            'recommeneded_fuel' => 'required|numeric|min:0|max:1000',
            'hourse_power' => 'required|max:20',
            'cylinder' => 'required|numeric|min:0|max:100',
        ]);
  
         
        $form_data = array(
            'car_id'=> $id,
            'sub_name' => $request->sub_name ,
            'catprice' => $request->catprice ,
            'cylinder' => $request->cylinder ,
            'moment' => $request->moment ,
            'recommeneded_fuel' => $request->recommeneded_fuel ,
            'hourse_power' => $request->hourse_power ,
            'abs' => $request->abs ,
            'cruise_control' => $request->cruise_control ,
            'rear_sensors' => $request->rear_sensors ,
            'front_sensors' => $request->front_sensors ,
            'multifunction_steering_wheel' => $request->multifunction_steering_wheel ,
            'start_button' => $request->start_button ,
            'digita_dashboard' => $request->digita_dashboard ,
            'usb' => $request->usb ,
            'aux' => $request->aux ,
            'esp' => $request->esp ,
            'ebd' => $request->ebd ,
            'navigation' => $request->navigation ,
            'airbags' => $request->airbags  ,
            'air_conditionning' => $request->air_conditionning ,
            'sun_roof' => $request->sun_roof 
        );

        
        Subcategory::create($form_data);
        
        return redirect()->back();
    }
    }
                        
    }


    
    public function destroy($id)
    {
        if(auth::check())
        {
            if(auth::user()->role == "admin")
            {
        $subcategory= Subcategory::where('id',$id)->delete();
  
        return redirect()->back();
                        // ->with('success','Car deleted successfully');
    }
    }
    }
}
