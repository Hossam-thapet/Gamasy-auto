<?php

namespace App\Http\Controllers;
use App\car ;
use App\Subcategory ;
use DB ;
use App\Image ;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function index($language,$brand)
    {

    $cars = DB::table('cars')->select('model','image','cars.id')
    ->where('brand',$brand)->get();
    $myJSON = json_encode($cars);
        return $myJSON ;
    }
    function subcategories($language,$brand)
    {
        $cars = DB::table('subcategories')->select('sub_name','car_id','subcategories.id')
    ->join('cars', 'cars.id', '=', 'car_id')
    ->where('brand', $brand)
    ->get();
    // dd($brand);

        $myJSON = json_encode($cars);
        return $myJSON ;
    }
    function subcategory($language,$id)
    {
        $cars = Subcategory::where('car_id', $id)->get();

        $myJSON = json_encode($cars);
        return $myJSON ;
    }
    function carImage($language,$id)
    {
        $cars = Image::where('car_id', $id)->select('carimages')->get();

        $myJSON = json_encode($cars);
        return $myJSON ;
    }
}
