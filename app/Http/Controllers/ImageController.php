<?php

namespace App\Http\Controllers;
use App\Traits\ImageTrait ;
use App\Image;
use auth ;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    use ImageTrait;
    public function create()
    {
        return view('cars.addimges');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        if(auth::check())
        {
            if(auth::user()->role == "admin")
            {
        $request->validate([
           
            'carimages' => 'required|image|max:2048'

        ]);
        $image_file = $request->carimages;
        $photo = rand() . '.' . $image_file->getClientOriginalExtension();
        
        $image_file->move(public_path('images'), $photo);
        
        $form_data = array(

            'car_id' => $id ,
            'carimages' => $photo,
             
        );
        Image::create($form_data);
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
        $Images= Image::where('id',$id)->get();
       foreach ($Images as $Image)
           { $name= $Image->carimages ;
            }
            $path="./images/$name";
        if($path) {
            unlink($path);
        }
        if($Images) {
            Image::destroy($id);
        }
        return redirect()->back();
    }
    }
    }
}
