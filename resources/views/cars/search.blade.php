@extends('layouts.app')
@extends('layouts.navbar')
@extends('layouts.footer')

<div class="container p-2 front-page-slider">
    @foreach ($cars as $car) 
    <div class="container-fluid front-page-category shadow-sm mt-3 rounded p-0 " data-aos="fade-{{ $loop->index%2 ? 'left' : 'right' }}" data-aos-duration="1000">
      
      <div class="container left ">
        <img src="{{asset('images/'.$car->image)}}" class="card-img-top-slider user" alt="...">
      </div>
      <div class="container  right">
        <div class="container m-auto data">
        <h3 class="brand">{{($car->brand) }}</h3>
        <h5 class="type">{{($car->type) }} </h5>
        <h5 class="price">{{($car->price) }}</h5>
        <a href="{{ route('cars.edit',$car->id) }}">edit</a>
        <a href="{{ route('cars.show',$car->id) }}">show</a>
      </div>
    </div>
     
    </div>
    @endforeach

  </div>
@endsection