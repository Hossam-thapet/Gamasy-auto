@extends('layouts.app')
@extends('layouts.navbar')
@extends('layouts.loader')
@extends('layouts.footer')
@section('content')
<div class="container compare" style="background: #d9d9d9; margin-top:150px; padding-top:40px; border-radius:4px;" >
<div class="row compare-page w-100">
    
<div class="col-lg-6 p-3" style="border-right:2px solid white ">
    @foreach ($firstCar as $car)
    <div class="row m-auto">
        <div class="col-sm-4">
            <h3 class="model">{{$car->model}}</h3>
        </div>
        <div class="col-sm-4">
            <h3 class="brand">{{$car->brand}}</h3>
        </div>
        <div class="col-sm-4">
            <h5>{{$car->version}}</h5>
        </div>
    </div>
    <div class="col-lg-12 pt-4">
        <img src="{{asset('images/'.$car->image)}}" class="card-img-index user" alt="...">
      </div>
      <div class="col-lg-12 pt-3">
        <h5 class="price">{{$car->price}} L.E</h5>
    </div>
      <div class="col-lg-12 pt-3">
        @if(App::getLocale()== "en")
        <h5 class="description">{{$car->description}}</h5>
        @else
        <h5 class="description">{{$car->Adescription}}</h5>
        @endif
    </div>
    <nav class="  mt-5">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          @foreach ($car->subcategory as $item)
          <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{$item->id}}" data-bs-toggle="tab" data-bs-target="#nav-{{$item->id}}" type="button" role="tab" aria-controls="nav-{{$item->id}}" aria-selected="true">{{$item->sub_name}}</button>
          @endforeach
        </div>
      </nav >
      {{-- category --}}
      <div class=" w-75 tab-content " id="nav-tabContent">
        @foreach ($car->subcategory as $item)
        <div class="tab-pane fade show pl-5 {{ $loop->first ? 'active' : '' }}" id="nav-{{$item->id}}" role="tabpanel" aria-labelledby="{{$item->id}}">
          <div class="row mt-2 ">
            <div class="col-sm-6"><h5>{{ __('Price') }}</h5></div>
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
          </div>
        </div>
        @endforeach
      </div>
      
    @endforeach
</div>
<div class="col-lg-6 p-3">
  @if (count($secondCar)>0)
    @foreach ($secondCar as $car)
    <div class="row m-auto">
        <div class="col-sm-4">
            <h3 class="model">{{$car->model}}</h3>
        </div>
        <div class="col-sm-4">
            <h3 class="brand">{{$car->brand}}</h3>
        </div>
        <div class="col-sm-4">
            <h5>{{$car->version}}</h5>
        </div>
    </div>
    <div class="col-lg-12 pt-4">
        <img src="{{asset('images/'.$car->image)}}" class="card-img-index user" alt="...">
      </div>
      <div class="col-lg-12 pt-3">
        <h5 class="price">{{$car->price}} L.E</h5>
    </div>
    <div class="col-lg-12 pt-3">
        @if(App::getLocale()== "en")
        <h5 class="description">{{$car->description}}</h5>
        @else
        <h5 class="description">{{$car->Adescription}}</h5>
        @endif
    </div>
    <nav class=" mt-5">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          @foreach ($car->subcategory as $item)
          <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{$item->id}}" data-bs-toggle="tab" data-bs-target="#nav-{{$item->id}}" type="button" role="tab" aria-controls="nav-{{$item->id}}" aria-selected="true">{{$item->sub_name}}</button>
          @endforeach
        </div>
      </nav >
      {{-- category --}}
      <div class=" w-75 tab-content " id="nav-tabContent">
        @foreach ($car->subcategory as $item)
        <div class="tab-pane fade show pl-5 {{ $loop->first ? 'active' : '' }}" id="nav-{{$item->id}}" role="tabpanel" aria-labelledby="{{$item->id}}">
          <div class="row mt-2 ">
            <div class="col-sm-6"><h5>{{ __('Price') }}</h5></div>
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
          </div>
        </div>
        @endforeach
      </div>
      
    @endforeach
    @else
  <div class="container alert alert-danger w-50 m-auto text-center">
    <p>no Match</p>
</div>
 
  @endif
</div>
</div>

</div>


@endsection