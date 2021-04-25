@extends('layouts.app')
@extends('layouts.navbar')
@extends('layouts.loader')
@extends('layouts.footer')
@section('content')
<div class="container mt-5">
    <div class="row datashow-car">
        <div class="col-lg-8">
            <img src="{{asset('images/'.$car->image)}}" class="show-car-img" alt="...">
        </div>
        <div class="col-lg-4">
          <div class="row details m-auto shadow-sm p-4">

            <div class="col-sm-6">
              <h3 class="brand">{{$car->brand}}</h3>
            </div>
            <div class="col-sm-6">
              <h3 class="model">{{$car->model}}</h3>
            </div>
            <div class="col-sm-6">
              <h5>Model:</h5>
            </div>
            <div class="col-sm-6">
              <h5>{{$car->version}}</h5>
            </div>
            <div class="col-sm-6">
              <h5>Style:</h5>
            </div>
            <div class="col-sm-6">
              <h5 class="type">{{$car->type}}</h5>
            </div>
            <div class="col-sm-6">
              <h5>Price:</h5>
            </div>
            <div class="col-sm-6">
              <h5 class="price">{{$car->price}}  L.E</h5>
            </div>
            <div class="col-sm-12">
              <h5 >Description:</h5>
            </div>
            <div class="col-sm-12">
              
              @if(App::getLocale()== "en")
              <h6 class="description">{{$car->description}}</h6>
      @else
      <h6 class="description" dir="rtl">{{($car->Adescription) }}</h6>
      @endif
            </div>
            
          </div>
        </div>
</div>
{{-- /////////////// category///////////////// --}}
@if ($errors->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
 
     @foreach ($errors->all() as $error)
         <h6 class="text-danger fw-bold">*.{{$error}}</h6><br>
     @endforeach

</div>
@endif
<nav class=" mt-5">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    @if (Auth::check()) 
      @if(auth::user()->role == "admin") 
    <button class="nav-link " id="addsub" data-bs-toggle="tab"  type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-plus"></i></button>
    @endif
    @endif
    @foreach ($car->subcategory as $item)
    <button class="nav-link text-capitalize {{ $loop->first ? 'active' : '' }}" id="{{$item->id}}" data-bs-toggle="tab" data-bs-target="#nav-{{$item->id}}" type="button" role="tab" aria-controls="nav-{{$item->id}}" aria-selected="true">{{$item->sub_name}}</button>
    @endforeach
  </div>
</nav >
{{-- category --}}
<div class=" w-75 tab-content " id="nav-tabContent">
  @foreach ($car->subcategory as $item)
  <div class="tab-pane fade show pl-5 {{ $loop->first ? 'active' : '' }}" id="nav-{{$item->id}}" role="tabpanel" aria-labelledby="{{$item->id}}">
    <div class="row mt-2 ">
      <div class="col-sm-6"><h5 >{{ __('Price') }}</h5></div>
      <div class="col-sm-6"><h5 class="price">{{$item->catprice}} L.E</h5></div>
    </div>
    <div class="row mt-2 ">
      <div class="col-sm-6"><h5>{{ __('Hourse power') }}</h5></div>
      <div class="col-sm-6"><h5>{{$item->hourse_power}}</h5></div>
    </div>
    <div class="row mt-2 ">
      <div class="col-sm-6"><h5>{{ __('Cylinder') }}</h5></div>
      <div class="col-sm-6"><h5>{{$item->cylinder}}</h5></div>
    </div>
    <div class="row mt-2 ">
      <div class="col-sm-6"><h5>{{ __('Moment') }}</h5></div>
      <div class="col-sm-6"><h5>{{$item->moment}}</h5></div>
    </div>
    <div class="row mt-2 ">
      <div class="col-sm-6"><h5>{{ __('Recommeneded Fuel') }}</h5></div>
      <div class="col-sm-6"><h5>{{$item->recommeneded_fuel}}</h5></div>
    </div>
    <div class="row mt-2">
      <div class="col-sm-6"><h5>{{ __('ABS') }}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->abs==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2">
      <div class="col-sm-6"><h5>{{ __('Cruise control') }}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->cruise_control==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2">
      <div class="col-sm-6"><h5>{{ __('Rear sensors') }}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->rear_sensors==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2">
      <div class="col-sm-6"><h5>{{ __('Front sensors') }}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->front_sensors==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2">
      <div class="col-sm-6"><h5>{{ __('Multifunction steering wheel') }}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->multifunction_steering_wheel==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2">
      <div class="col-sm-6"><h5>{{ __('Start Button') }}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->start_button==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2">
      <div class="col-sm-6"><h5>{{ __('Digital Dashboard') }}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->digita_dashboard==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2">
      <div class="col-sm-6"><h5>{{ __('Navigation') }}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->navigation==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2">
      <div class="col-sm-6"><h5>{{ __('USB') }}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->usb==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2">
      <div class="col-sm-6"><h5>{{ __('AUX port') }}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->aux==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2">
      <div class="col-sm-6"><h5>{{ __('ESP') }}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->esp==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2">
      <div class="col-sm-6"><h5>{{ __('EBD') }}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->ebd==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2 ">
      <div class="col-sm-6"><h5>{{ __('Airbags') }}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->airbags==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2">
      <div class="col-sm-6"><h5>{{__('Air Conditioning')}}</h5></div>
      <div class="col-sm-6"><h5><i class="fas fa-{{($item->air_conditionning==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2 ">
      <div class="col-sm-6"><h5>{{__('Sun Roof')}}</h5></div>
      <div class="col-sm-6"><h5> <i class="fas fa-{{($item->sun_roof==0 ) ? 'times text-danger' : 'check text-success'}}"></i></h5></div>
    </div>
    <div class="row mt-2 ">
     
      <a href="/pdf/{{$car->id}}/cat/{{$item->id}}" class="btn text-primary fw-bold">Get PDF</a>
     
    </div>
    <div>
      @if (Auth::check()) 
      @if(auth::user()->role == "admin")
      <form action="{{ url('sub_category/delete',$item->id) }}" method="Post">
        @csrf
        @method('DELETE')
        
      <button type="submit" class="btn text-danger">remove category</button>
    </form>
    @endif
    @endif
    </div>
  </div>
  @endforeach
</div>
{{-- /////////////// end category///////////////// --}}
{{-- /////////////// slideshow///////////////// --}}

<div class="container  mt-5">

  
  @foreach ($car->images as $image)
  <div class=" container mySlides w-75 ">
    @if (Auth::check()) 
      @if(auth::user()->role == "admin")
    <form action="{{ url('upload_image/delete',$image->id) }}" class="delete-form" method="Post">
      @csrf
      @method('DELETE')
      
    <button type="submit" class="btn text-danger p-0"><i class="fas fa-times "></i></button>
  </form>
  @endif
  @endif
      <img src="{{asset('images/'.$image->carimages)}}" class="myslides-image" style="width:100%">
  </div>
  @endforeach

  <div class="row w-50 pl-4 m-auto">
    @foreach ($car->images as $image)
    <div class="col p-1" style="max-width: 150px;">
      <img class="demo cursor" src="{{asset('images/'.$image->carimages)}}"  onclick="currentSlide({{$loop->index+1}})" alt="{{$image->brand}}">
    </div>
    @endforeach
  </div>
</div>
{{-- ///////////////end slideshow///////////////// --}}
@if (Auth::check()) 
  @if(auth::user()->role == "admin")
  <div class="container input-single-car">
    <div class="container inputimage">
      <form action="{{url('upload_image',$car->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Input images</label>
          <input class="form-control" type="file" id="formFileMultiple" name="carimages">
          <button type="submit">submit</button>
        </div>
      </form>
    </div>
    <div class="contianer inputsubcategory ">
      <form action="{{ url('sub_category',$car->id) }}" method="post">
        @csrf
      <div class="row subcategoty shadow-lg rounded" id="show-subcategory">
        <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="sub_name" class="form-control" placeholder="Name"  required>
            </div>
            <div class="form-group">
              <strong>price:</strong>
              <input type="number" name="catprice" class="form-control" placeholder="price"  required>
          </div>
          <div class="form-group">
            <strong>cylinder:</strong>
            <input type="number" name="cylinder" class="form-control" placeholder="cylinder" >
        </div>
        <div class="form-group">
          <strong>recommeneded_fuel:</strong>
          <input type="number" name="recommeneded_fuel" class="form-control" placeholder="recommeneded_fuel"  required>
      </div>
      <div class="form-group">
        <strong>hourse_power:</strong>
        <input type="text" name="hourse_power" class="form-control" placeholder="hourse_power"  required>
    </div>
          <div class="form-group">
            <strong>moment:</strong>
            <input type="text" name="moment" class="form-control" placeholder="Name"  required>
        </div>
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="airbags" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> Airbags</h5>
            </label>
          </div>
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="air_conditionning" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> Air Conditioning</h5>
            </label>
          </div>
          <div class=" form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="sun_roof" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> Sun roof</h5>
            </label>
          </div>
          <div class=" form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="abs" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> abs</h5>
            </label>
          </div>
          <div class=" form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="cruise_control" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> cruise_control</h5>
            </label>
          </div>
          <div class=" form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="rear_sensors" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> rear_sensors</h5>
            </label>
          </div>
          <div class=" form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="front_sensors" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> front_sensors</h5>
            </label>
          </div>
          <div class=" form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="multifunction_steering_wheel" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> multifunction_steering_wheel</h5>
            </label>
          </div>
          <div class=" form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="start_button" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> start_button</h5>
            </label>
          </div>
          <div class=" form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="digita_dashboard" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> digita_dashboard</h5>
            </label>
          </div>
          <div class=" form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="usb" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> usb</h5>
            </label>
          </div>
          <div class=" form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="aux" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> aux</h5>
            </label>
          </div>
          <div class=" form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="esp" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> esp</h5>
            </label>
          </div>
          <div class=" form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="ebd" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> ebd</h5>
            </label>
          </div>
          <div class=" form-check mt-2">
            <input class="form-check-input" type="checkbox" value="1" name="navigation" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <h5> navigation</h5>
            </label>
          </div>
          

          <div class=" form-check mt-2">
            <button type="submit" class="btn" style="font-size: 20px; background-color:transparent;">submit</button>
          </div>
        </div>
       </form>
      </div>
    </div>
    @endif
    @endif  
  </div>
{{-- Compare Part --}}
  <div id="accordion">
    <div class="card w-50 m-auto">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            {{__('Compare with other car')}}
          </button>
        </h5>
      </div>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          <div class="card ">
            <form action="{{ url(app()->getLocale(),'compare'.$car->id) }}" method="get">
              <div class="row search-row shadow-sm p-4">
                <div class=" col-md-4 m-auto">
                  <div class="form-group">
                      <strong>{{ __('Brand') }}:</strong>
                      <input type="text" name="combrand" list="brandsearch" class="form-control form-select dinamic" placeholder="Brand" id="brand"  required autocomplete>
                      <datalist id="brandsearch">
                        @foreach ($brands as $brand)
                        <option class="options" id  value="{{strtoupper($brand->brand)}}"></option>
                        @endforeach  
                      </datalist>
                    </div>
              </div>
              <div class=" col-md-4 m-auto">
                  <div class="form-group">
                      <strong>{{ __('Model') }}:</strong>
                      <input type="text" name="commodel" class="form-control form-select" placeholder="Model" list="modelsearch" id="model"  required autocomplete>
                      <datalist id="modelsearch" style="background-color: blue">
                        @foreach ($models as $model)
                        <option class="modeloption" style="color: white" last="{{$loop->last}}" number="{{$loop->index}}" brand="{{strtoupper($model->brand)}}" value="{{strtoupper($model->model)}}"></option>
                        @endforeach  
                        </datalist>
                    </div> 
              </div>
              <div class=" col-md-4 m-auto">
                <div class="form-group">
                    <strong>{{ __('Year') }}:</strong>
                    <input type="number" name="comyear" class="form-control" placeholder="Year">
                </div> 
            </div>
              <div class=" col-md-12 text-right">
                <button type="submit" class="btn submit-form-bymodel btn-primary">Submit</button>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
 
@endsection