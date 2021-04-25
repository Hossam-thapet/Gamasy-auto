<?php

namespace App\Http\Controllers;
use App\car ;
use App\Traits\BrandTraits ;
use Illuminate\Http\Request;

class Classfication extends Controller
{
    use BrandTraits ;
    public function class(Request $request,$language)
    {
        
        $brand= $request->get("footer");
        $cars = car::where("brand","like",$brand)->paginate(10);
        $this->cars=$cars;
        return $this->indexOut($language);
    }

    public function recent($language)
    {
        $cars = car::orderBy('created_At','desc')->paginate(10);
        $this->cars=$cars;
        return $this->indexOut($language);
    }
    public function lowerprice($language)
    {
        $cars = car::orderBy('price','asc')->paginate(10);
        $this->cars=$cars;
        return $this->indexOut($language);
    }
    public function higherprice($language)
    {
        $cars = car::orderBy('price','desc')->paginate(10);
        $this->cars=$cars;
        return $this->indexOut($language);
    }
}
