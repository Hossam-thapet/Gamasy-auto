@extends('layouts.app')
@extends('layouts.navbar')
@extends('layouts.loader')
@extends('layouts.footer')

@section('content')
  <div class="container-fluid index-page p-0">
    <div class="row search-form-total w-75 m-auto ">
    <div class="col-md-4 p-2 m-0">
      <form action="{{url(app()->getLocale(),'pricerange')}}" method="GET">
      <div class="input-group w-100 ">
        <span class="input-group-text" id="inputGroup-sizing-sm">Price From</span>
        <input type="number" name="pricefrom" class="form-control" aria-label="Sizing example input" aria-label="inputGroup-sizing-sm" required>
      </div>
      <div class="input-group w-100 mt-4">
        <span class="input-group-text"  id="inputGroup-sizing-sm">Up TO</span>
        <input type="number" name="priceto" class="form-control" aria-label="Sizing example input" aria-label="inputGroup-sizing-sm" aria-describedby="button-addon2" required>
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
      </div>
    </form>
    </div>
    <div class="col-md-8 p-2 m-0">
    <form action="{{url(app()->getLocale(),'find')}}" method= "get">
      
    <div class="row search-byname">
      <div class="col-sm-12">
        <div class="input-group w-100 m-auto">
          <input type="text" class="form-control dinamic" name="searchbrand" list="brandsearch" id="brand" placeholder="Search By Brand Of The Car" aria-label="Recipient's username" data-dependent="model" aria-describedby="button-addon2">
          <datalist id="brandsearch">
            @foreach ($brands as $brand)
            <option class="options" id  value="{{strtoupper($brand->brand)}}"></option>
            @endforeach  
          </datalist>
          @csrf
          <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>  
    <div class="row classification-form pt-4 mb-5">
      <div class="input-group col-sm-6 ">
        <div class="input-group ">
        <span class="input-group-text" id="inputGroup-sizing-sm">Model</span>
        <input type="text" name="searchmodel" class="form-control" id="model" aria-label="Sizing example input" list="modelsearch" aria-describedby="inputGroup-sizing-sm">
        {{-- <datalist id="modelsearch"> --}}
          <datalist id="modelsearch">
          @foreach ($models as $model)
          <option class="modeloption" style="color: white" last="{{$loop->last}}" number="{{$loop->index}}" brand="{{strtoupper($model->brand)}}" value="{{strtoupper($model->model)}}"></option>
          @endforeach  
          </datalist>
        {{-- </datalist> --}}
      </div>
    </div>
      <div class="input-group col-sm-6">
        <div class="input-group-prepend">
          
          <label class="input-group-text" for="inputGroupSelect01">Type</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="searchtype" > 
          <option value=""></option>
          <option value="sedan">Sedan</option>
          <option value="hatchback">Hatchback</option>
          <option value="SUV">SUV</option>
        </select>
      </div> 
   
  </form>
</div>
  </div>
</div>
<hr style="width: 80%; margin:auto;"> 
  @if (count($cars)>0)
  
  <div class="container alert alert-success w-50 m-auto text-center">
    <p>Result</p>
</div>
  @else
  <div class="container alert alert-danger w-50 m-auto text-center">
    <p>no Match</p>
</div>
 
  @endif
  {{-- ///////////////////////////////////////////////////////////////////////// --}}
  <div class="container pt-2">
    <div class="container p-2 front-page-slider">
  @foreach ($cars as $car) 
  <div class="row front-page-category bg-light mt-5 shadow-lg rounded" data-aos="fade-{{ $loop->index%2 ? 'left' : 'right' }}" data-aos-duration="200">
    
    <div class="col-lg-7 left  p-0">
      <img src="{{asset('images/'.$car->image)}}" class="card-img-index user" alt="...">
    </div>
 
    <div class="col-lg-5  right">
      <div class="container m-auto data">
      <h3 class="brand">{{($car->model) }}</h3>
      @if(App::getLocale()== "en")
      <h5 class="description index">{{($car->description) }}</h5>
      @else
      <h5 class="description index" dir="rtl">{{($car->Adescription) }}</h5>
      @endif
      <h5 class="price">{{($car->price) }}  L.E</h5>
      <div class="row links  mt-4 pb-1">
        
        <div class="col-sm-4">
          <a href="{{ route('cars.show',[app()->getLocale(), $car->id]) }}" class="show">{{ __('more details') }}</a>
        </div>
        @if (Auth::check()) 
        @if(auth::user()->role == "admin")
        <div class="col-sm-4">
          <a href="{{ route('cars.edit',[app()->getLocale(), $car->id]) }}">{{ __('edit') }}</a>
        </div>
        <div class="col-sm-4">
          <form action="{{ route('cars.destroy',[app()->getLocale(), $car->id]) }}" method="POST">
            @csrf
          @method('DELETE')
          <button type="submit" class="btn text-danger p-0">{{ __('remove') }}</button>
          </form>
        </div>
        @endif
        @endif
      </div>
    </div>
  </div>
   
  </div>
  @endforeach

</div>
  </div>
  
    {!! $cars->links() !!}
      
@endsection

