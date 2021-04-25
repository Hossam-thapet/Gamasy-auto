<?php

namespace App\Http\Controllers;
use App\car;
use App\ Subcategory ;
use PDF ;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    // function index()
    // {
       
    //     $car_data=$this-> get_car_data();
    //     return view('cars.pdf')->with('car_data',$car_data);
    // }
    // function get_car_data()
    // {
    //     $car_data= car::where("id",4)->get();
    //     // dd($car_data);
    //     return $car_data;
        
    // }
    // function pdf($id,$idcat)
    // {
    //     // dd($id,$idcat);
    //     $newid= $id+1 ;
    //     // dd($newid);
    //     $theid = $this->newid; 
    //     $pdf=\App::make('dompdf.wrapper');
    //     // dd($this->convert_car_data_to_html());
    //     $pdf->loadHTML($this->convert_car_data_to_html());
    //     return $pdf->stream();
    // }
    // function convert_car_data_to_html()
    // {
    
    //    dd($theid);
    //     $car_data=$this->get_car_data();
    //     $output ="welcome in pdf";
        
    //     return $output ;
    // }
    public function generatePDF($id, $idcat)
    {
        $cars=car::where('id',$id)->get(); 
        // dd($car);
        $subs= Subcategory::where('id',$idcat)->get();
        // dd($sub);
        // $data = ['title' => 'Welcome to ElGumasy Auto'];
        // $items=$cars->toArray();
        // dd($items);
        $pdf = PDF::loadView('cars.pdf',compact('cars','subs'));
        
        return $pdf->download('ElGumasy Auto.pdf');
    }
}
