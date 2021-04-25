<!DOCTYPE html>
<html>
<head>
	<title>ElGumasy Auto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <style>
        .pdf.text-center
        {
            text-align: center;
        }
        .row-pdf
        {
            display:inline;
        }
        .image-container{
            width:80%;
            
        }
        img{
           width: 100%; 
        }
        p{
            font-size: 22px;
            padding-top: 30px;
        }
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  width: 50%;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
</head>
<body>
	<h1 class="pdf text-center"> Welcome to ElGumasy Auto</h1>
	@foreach ($cars as $car)
    <div class="row w-75">
        <div class="pl-5">
            <h3>Model:</h3>
        </div>
        <div class="float-right">
            <h3 >{{$car->model}}</h3>
        </div>
    </div>
        <div class="row w-75">
        <div class="pl-5">
            <h3>Brand:</h3>
        </div>
        <div class="float-right">
            <h3 >{{$car->brand}}</h3>
        </div>
    </div>
        <div class="row w-75">
            <div class="pl-5" >
                <h3>Version:</h3>
            </div>
            <div class=" float-right">
                <h3 >{{$car->version}}</h3>
            </div>

    </div>
    <div class="container image-container mt-5">
        <img src="{{ public_path('images/'.$car->image) }}" >
        </div>
        
        
        <p >{{$car->description}}</p>
    @endforeach
    @foreach ($subs as $sub)
    <table>
    <tr>
        <th><h4>Category</h4></th>
        <th><h4>{{$sub->sub_name}}</h4></th>
    </tr>
    <tr><td>Price</td><td>{{$sub->catprice}}</td></tr>
    <tr><td>Hourse power</td><td>{{$sub->hourse_power}}</td></tr>
    <tr><td>Cylinder</td><td>{{$sub->cylinder}}</td></tr>
    <tr><td>Moment</td><td>{{$sub->moment}}</td></tr>
    <tr><td>Recommeneded fuel</td><td>{{$sub->recommeneded_fuel}}</td></tr>
    <tr><td>ABS</td><td>{{($sub->abs==0 ) ? "no" : "yes"}}</td></tr>
    <tr><td>Cruise control</td><td>{{($sub->cruise_control==0 ) ? "no" : "yes"}}</td></tr>
    <tr><td>Rear sensors</td><td>{{($sub->rear_sensors==0 ) ? "no" : "yes"}}</td></tr>
    <tr><td>Front sensors</td><td>{{($sub->front_sensors==0 ) ? "no" : "yes"}}</td></tr>
    <tr><td>Multifunction steering wheel</td><td>{{($sub->multifunction_steering_wheel==0 ) ? "no" : "yes"}}</td></tr>
    <tr><td>Start button</td><td>{{($sub->start_button==0 ) ? "no" : "yes"}}</td></tr>
    <tr><td>Digita dashboard</td><td>{{($sub->digita_dashboard==0 ) ? "no" : "yes"}}</td></tr>
    <tr><td>Navigation</td><td>{{($sub->navigation==0 ) ? "no" : "yes"}}</td></tr>
    <tr><td>USB</td><td>{{($sub->usb==0 ) ? "no" : "yes"}}</td></tr>
    <tr><td>AUX</td><td>{{($sub->aux==0 ) ? "no" : "yes"}}</td></tr>  
    <tr><td>ESB</td><td>{{($sub->esp==0 ) ? "no" : "yes"}}</td></tr>
    <tr><td>EBD</td><td>{{($sub->ebd==0 ) ? "no" : "yes"}}</td></tr>
    <tr><td>Airbags</td><td>{{($sub->airbags==0 ) ? "no" : "yes"}}</td></tr>   
    <tr><td>Air conditionning</td><td>{{($sub->air_conditionning==0 ) ? "no" : "yes"}}</td></tr>
    <tr><td>Sun Roof</td><td>{{($sub->sun_roof==0 ) ? "no" : "yes"}}</td></tr>
   
</table>
    @endforeach
   
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> --}}
</body>
</html>