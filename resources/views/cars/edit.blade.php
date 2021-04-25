@extends('layouts.app')
@extends('layouts.navbar')
@extends('layouts.loader')
@extends('layouts.footer')

@section('content')
<div class="row w-100">

</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <div class="container-fluid create-page-container" style="padding-top:185px;">
<form action={{ route('cars.update',[app()->getLocale(), $car->id]) }} method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  
     <div class="row create-form shadow-lg">
         <div class="col-md-12 create-title ">
             <h4 class="m-atuo fw-bold">Update card  </h4>
         </div>
        <div class=" col-md-6">
            <div class="form-group">
                <strong>Brand:</strong>
                <input type="text" name="brand" value="{{$car->brand}}" class="form-control" placeholder="Brand" autofocus required>
            </div>
        </div>
        <div class=" col-md-6">
            <div class="form-group">
                <strong>Model:</strong>
                <input type="text" name="model"  value="{{$car->model}}"class="form-control" placeholder="Model"  required>
            </div>
        </div>
        <div class=" col-md-6">
            <div class="form-group">
                <strong>Version:</strong>
                <input type="number" name="version" value="{{$car->version}}" class="form-control" placeholder="Version" required>
            </div>
        </div>
        
        <div class=" col-md-6">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" value="{{$car->image}}" class="form-control" placeholder="Name" required>
            </div>
           
        </div> 
        <div class="input-group mb-3 col-md-6">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Case</label>
            </div>
            
            <select class="custom-select" id="inputGroupSelect01" value="{{$car->case}}" name="case" required>
              <option value="new">New</option>
              <option value="used">Used</option>
            </select>
          </div>
          <div class="input-group mb-3 col-md-6">
            
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Type</label>
            </div>
            
            <select class="custom-select" id="inputGroupSelect01" value="{{$car->type}}" name="type" required> 
                <option value="sedan">Sedan</option>
              <option value="hatchback">Hatchback</option>
              <option value="SUV">SUV</option>
            </select>
          </div>
          
        <div class=" col-md-6">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" value="{{$car->price}}" class="form-control" placeholder="Price" required>
            </div>
        </div>
        <div class=" col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" class="form-control" style="height:150px" value="{{$car->description}}" name="description" placeholder="Description">
            </div>
        </div>
        <div class=" col-md-12">
            <div class="form-group">
                <strong>Arabic Description:</strong>
                <input type="text" class="form-control" value="{{$car->Adescription}}" style="height:150px" name="Adescription" placeholder="ArabicDescription">
            </div>
        </div>
        <div class=" col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
</div>  
@endsection