<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car ;

class CompareController extends Controller
{
    function compare($language,Request $request,$id)
    {
        // dd($id,$language);
        $combrand=$request->get('combrand');
        $commodel=$request->get('commodel');
        $comyear=$request->get('comyear');
        $firstCar=car::where("id",$id)->get();
        // dd($firstCar);
        $secondCar=car::where('brand','like','%'.$combrand.'%')
        ->where(function ($query)use($commodel)
        {
            $query->where('model','like','%'.$commodel.'%');
        })->where(function ($query)use($comyear)
        {
            $query->where('version','like','%'.$comyear.'%');
        })->limit(1)->get();
        
        return view('cars.compare',compact('firstCar','secondCar','language'));
    }
}
