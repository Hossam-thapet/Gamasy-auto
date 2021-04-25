<?php

namespace App\Http\Controllers;
use App\Traits\BrandTraits ;
use App\car;
use Illuminate\Http\Request;

class SrearchController extends Controller
{
    use BrandTraits ;
    public function index(Request $request,$language)
    {
        $brand=$request->get('searchbrand');
        $model=$request->get('searchmodel');
            $cars=car::where('brand','like','%'.$brand.'%')
            ->where(function ($query)use($model)
            {
                $query->where('model','like','%'.$model.'%');
            })->paginate(20);
            $this->cars=$cars;
        return $this->indexOut($language);
    }

    public function indexBrowse($language,Request $request)
    {
        $brand=$request->get('searchbrand');
        $model=$request->get('searchmodel');
        $type=$request->get('searchtype');
        $from=$request->get('pricefrom');
        $to=$request->get('priceto');
        $cars=car::where('brand', 'like', '%'.$brand.'%')
            ->where(function ($query)use($model)
            {
                $query->where('model','like','%'.$model.'%');
            })
            ->where(function ($query2)use($type)
            {
                $query2->where('type','like','%'.$type.'%');
            })
            
            ->paginate(10);
            $this->cars=$cars;
        return $this->indexOut($language);
    }
    public function Pricerange(Request $request)
    {
        
        $from=$request->get('pricefrom');
        $to=$request->get('priceto');
        $cars=car::whereBetween('price',[$from,$to])->paginate(10);
            return view('cars.index', compact('cars'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
            
    }
    }


    // $brand=$request->get('searchbrand');
    //     $model=$request->get('searchmodel');
    //     $type=$request->get('searchtype');
    //     $from=$request->get('pricefrom');
    //     $to=$request->get('priceto');
    //     $cars=car::where('brand', 'like', '%'.$brand.'%')
    //     ->where('model','like','%'.$model.'%')
    //     ->where('type','like','%'.$type.'%')
    //     ->whereBetween('price',[$from,$to])
    //     ->get();
        
    //         // dd($brand);
    //         $success = 'Results Car';
    //         return view('cars.index', compact('cars', 'success'));
    // }



    // whereBetween('price',[$from,$to])
    //     ->where(function ($query3)use($brand)
    //     {
    //         $query3->where('brand', 'like', '%'.$brand.'%');
    //     })
    //     ->where(function ($query)use($model)
    //     {
    //         $query->where('model','like','%'.$model.'%');
    //     })
    //     ->where(function ($query2)use($type)
    //     {
    //         $query2->where('type','like','%'.$type.'%');
    //     })