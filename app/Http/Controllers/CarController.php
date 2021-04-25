<?php
  
namespace App\Http\Controllers;
use App\Traits\ImageTrait ;
use App\Traits\BrandTraits ;
use auth ;
use DB ;
use Route ;
use App\Image ;
use App\car;
use Illuminate\Http\Request;
  
class CarController extends Controller
{
    use ImageTrait ;
    use BrandTraits ;
    public function index($language)
    {
        $cars = car::latest()->paginate(10);
        $this->cars=$cars;
        return $this->indexOut($language);
    }
    public function indexwelcome($language)
    {
        $brands=car::select('brand')->distinct()->get();
        $models=car::distinct('model')->distinct()->get();
        return view('welcome',compact("language",'brands','models'))
        ->with('i', (request()->input('page', 1) - 1) * 10);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($language)
    {
        if(auth::check())
        {
        if(auth::user()->role == "admin")
        {
        return view('cars.create');
        }
        else{
            return redirect()->route('cars.index');
        }
    }
    else{
        return redirect()->route('cars.index');
    }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($language,Request $request)
    {
        if(auth::check())
        {
        if(auth::user()->role == "admin")
        {
      
        $this->ImageWork($request);
        
        $form_data=$this->form_data;
        // dd($form_data);
        car::create($form_data);
   
        return redirect()->route('cars.index',app()->getLocale())
                        ->with('success','Car created successfully.');
    } 
    }           
    }
   
 
    public function show($language,car $car)
    {
        $brands=car::select('brand')->distinct()->get();
        $models=car::distinct('model')->distinct()->get();
        // dd($brands,$models);
        return view('cars.show',compact('car','language','models','brands'));
    }
   
    
    public function edit($language,car $car)
    {
        if(auth::check())
        {
        if(auth::user()->role == "admin")
        {
            return view('cars.edit',compact('car','language'));
        }
        else{
            return redirect()->route('cars.index');
        }
    }
    else{
        return redirect()->route('cars.index');
    }
    }
  
    
    public function update($language,Request $request, car $car)
    {
        $this->ImageWork($request);
        
        $form_data=$this->form_data;
  
        $car->update($form_data);

        return redirect()->route('cars.index',app()->getLocale())
                        ->with('success','Car updated successfully');
    }
  
    
    public function destroy($language,car $car)
    {
        if(auth::user()->role == "admin")
        {
            $carImages=Image::where('car_id',$car->id)->get();
            foreach($carImages as $carImage)
            {
                $name=$carImage->carimages ;
            $path="./images/$name";
            if($path) {
                unlink($path);
            }
        }
            
            $name=$car->image ;
            $car->delete();
            $path="./images/$name";
            if($path) {
                unlink($path);
            }
            return redirect()->route('cars.index',app()->getLocale())
                            ->with('success','Car deleted successfully');
        }
        else{
            return redirect()->route('welcome');
        }
        
    }
}