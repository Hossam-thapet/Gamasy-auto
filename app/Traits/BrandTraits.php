<?php

namespace App\Traits;
use Illuminate\Http\Request;


use App\car ;


Trait BrandTraits 
{
    public function indexOut($language)
    {
       $cars= $this->cars ;
        $brands=car::select('brand')->distinct()->get();
        $models=car::select('brand','model')->distinct()->get();
        return view("cars.index",compact("cars","language","brands","models"))
        ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}