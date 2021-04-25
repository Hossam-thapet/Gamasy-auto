<?php

namespace App\Traits;
use App\Image;
use Illuminate\Http\Request;

use DB ;
use Auth ;


Trait ImageTrait 
{
    public function ImageWork(Request $request)
    {
        
        $request->validate([
            'brand' => 'required',
            'case' => 'required',
            'price' => 'required|numeric|min:0|max:10000000',
            'image' => 'required|image|max:2048',
            'version' => 'required|max:4',
            'type' => 'required',
            'description' => 'required',
            'model' => 'required'
        ]);
        // dd("here");
        $image_file = $request->image;
        $photo = rand() . '.' . $image_file->getClientOriginalExtension();
        
        $image_file->move(public_path('images'), $photo);
        
         $form_data = array(

            'brand' => $request->brand ,
            'case' => $request->case ,
            'price' => $request->price ,
            'image' => $photo,
            'type' => $request->type ,
            'version' => $request->version ,
            'description' => $request->description ,
            'Adescription' => $request->Adescription ,
            'model' => $request->model 
        );
        $this->form_data = $form_data;
        return $form_data ;
    }
}
