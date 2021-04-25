@extends('layouts.app')
@extends('layouts.navbar')
@extends('layouts.loader')
@extends('layouts.footer')
@section('content')

<div class="flex-center position-ref full-height first-part w-100 ">
 
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="700" >
        <img src="../img/newback.png" class="d-block w-100 mainslider" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" >
        <img src="../img/background1.jpg" class="d-block w-100 mainslider" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" >
        <img src="../img/background.jpg" class="d-block w-100 mainslider" alt="..." >
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
{{-- <Second Part> --}}
<div class="container get-my-car-bymodel p-3 shadow-md mt-5">
  <div class="title form-bymodel">
    <h2 class="form-title-content">{{ __('find your car..') }}</h2>
  </div>
    <div class="card m-auto w-50" id="by-model" data-aos="flip-up" data-aos-duration="400">
      <form action="{{ url(app()->getLocale(),'search') }}" method="get">
        <div class="row search-row shadow-sm p-4">
          <div class=" col-md-6 m-auto">
            <div class="form-group">
                <strong>{{ __('Brand') }}:</strong>
                <input type="text" name="searchbrand" class="form-control dinamic" placeholder="Brand" list="brandsearch">
                <datalist id="brandsearch">
                  @foreach ($brands as $brand)
                  <option class="options" id  value="{{strtoupper($brand->brand)}}"></option>
                  @endforeach  
                </datalist>
            </div>
        </div>
        <div class=" col-md-6 m-auto">
            <div class="form-group">
                <strong>{{ __('Model') }}:</strong>
                <input type="text" name="searchmodel" class="form-control" placeholder="Model"  list="modelsearch">
                <datalist id="modelsearch">
                  @foreach ($models as $model)
                  <option class="modeloption" style="color: white" last="{{$loop->last}}" number="{{$loop->index}}" brand="{{strtoupper($model->brand)}}" value="{{strtoupper($model->model)}}"></option>
                  @endforeach  
                  </datalist>
              </div>
        </div>
        <div class=" col-md-12 text-right">
          <button type="submit" class="btn submit-form-bymodel btn-primary">Submit</button>
        </div>
        </div>
      </form>
    </div>
</div>

<!-- about-part -->
{{-- <hr id="about"> --}}
<div class="container about" style="padding-top:100px;">
  <div class="row about">
    <h2>{{ __('about us') }}</h2>
    <div class="col-lg-6 about-text pt-4">
      @if(App::getLocale()== "en")
      <p class="about-paragraph" lang="en">
        For more than 40 years . We have continuously expanded our reach in <strong>Al-Beheira Governorate</strong> by opening four branches so far to become pioneers in the field of car trade,
         as we gained the confidence of many.  <br>
         Since 1978, El-Gamasy Auto began trading cars of all Brands . <br>
         Where we deal with more than 20 brands of all types of cars ranging from passenger cars to transport cars and trucks.
        From the beginning of our launch until now, we have worked to develop our services that we provide to our customers.<br>
        
        <strong>such as :</strong><br>
        Installment systems to suit various financial capabilities through cooperation
         with all banks and installment companies that provide the best service to our customers. 
      </p>
      @else
      <p class="about-paragraph" lang="ar" dir="rtl">
        لأكثر من 40 عامًا ، قمنا باستمرار بتوسيع نطاق وصولنا فى محافظة البحيرة بإفتتاح اربعة فروع حتى الان لنصبح رواد فى مجال تجارة السيارات حيث اكتسبنا ثقة الكثيرين. <br>
فمنذ عام 1978 بدأت شركه الجمسى للسيارات فى مجال تجارة السيارات بكل أنواعها 
حيث نتعامل مع أكثر من 20 علامة تجارية لجميع أنواع السيارات بدءاً من سيارات الركاب إلى سيارات النقل والشاحنات. <br>
فمن بداية انطلاقنا حتى الآن عملنا على تطوير خدماتنا التى نقدمها لعملائنا كأنظمة التقسيط  بما يناسب مع مختلف الامكانيات المادية من خلال التعاون مع كل البنوك و شركات التقسيط التى توفر افضل خدمة لعملائنا.
      </p>
      @endif
    </div>
    <div class="col-lg-6 about-text">
      <img src="../img/carstore.jpg"  alt="..." >
    </div>
  </div>
</div>
{{-- <Thierd Part> --}}
  <div class="container gamasy " style="padding-top:100px;">
    <h2>Why GAMASY-AUTO...?</h2>
    <div class="row traveller mt-4">
      <div class="col-lg-4">
        <div class="traveller-why text-center">
          <i class="fas fa-tasks"></i>
          <h4>{{ __('mission') }}</h4>
          @if(App::getLocale()== "en")
          <p class="why">
            We seek to spread in Al-Buhaira Governorate by opening the largest number of branches
             throughout the governorate and ensuring that we provide the best services,
             facilities and products to our customers to support their confidence in us. 
          </p>
          @else
          <p class="why" dir="rtl">
            نحن نسعى إلى الانتشار فى محافظة البحيرة بافتتاح اكبر عدد من الفروع فى جميع أنحاء المحافظة والحرص على تقديم أفضل الخدمات و التسهيلات والمنتجات لعملائنا لدعم ثقتهم بنا.
          </p>
          @endif
        </div>
      </div>
      <div class="col-lg-4">
        <div class="traveller-why text-center">
          <i class="far fa-eye"></i>
          <h4>{{ __('vision') }} </h4>
          @if(App::getLocale()== "en")
          <p class="why">We strive to provide everything the customer needs to be the first choice for customers.</p>
          @else
          <p class="why" dir="rtl"> نسعى لتوفير كل ما يحتاجه العميل لنكون الخيار رقم واحد للعملاء.</p>
          @endif
        </div>
      </div>
      <div class="col-lg-4">
        <div class="traveller-why text-center ">
          <i class="fas fa-bullseye"></i>
          <h4>{{ __('goal') }}</h4>
          @if(App::getLocale()== "en")
          <p class="why" >Winning our customers' satisfaction. 
            <br>Excellence in the services we provide. <br>
            Helping the customer to reach his suitable choice. 
          </p>
          @else
          <p class="why" >
             كسب رضا عملاءنا <br>
التميز فى الخدمات التى نقدمها <br>
مساعدة العميل ليصل لاختياره المناسب <br>
          </p>
          @endif
        </div>
      </div>
    </div>
  </div>
{{--our Team--}}
<div class="container pt-5">
  <h1 >Our Guides</h1>
  <div class="row pt-4">
    <div class="col-md-3 p-2">
      <div class="contain-guide w-75 m-auto first">
         <img src="img/guide1.jpg" class="guides" >
         <h3 class="text-center">Our Guides</h3>
      </div>
    </div>
    <div class="col-md-3 p-2">
      <div class="contain-guide w-75 m-auto">
         <img src="img/guide1.jpg" class="guides" >
         <h3 class="text-center">Our Guides</h3>
      </div>
    </div>
    <div class="col-md-3 p-2">
      <div class="contain-guide w-75 m-auto">
         <img src="img/guide1.jpg" class="guides" >
         <h3 class="text-center">Our Guides</h3>
      </div>
    </div>
    <div class="col-md-3 p-2">
      <div class="contain-guide  w-75 m-auto">
         <img src="img/guide1.jpg" class="guides" >
         <h3 class="text-center">Our Guides</h3>
      </div>
    </div>
  </div>
</div>
{{-- map --}}
<div class="container mt-5">
  <div class="row for-mab">
    <h1>Where to find us</h1>
    
    <div class="col-lg-7 main-mab">
      <div id="map" style="width:100%;height:300px;"></div>
<script>
function myMap() {
var location= {lat:-25.464,lng:131.044};
var map = new google.maps.Map(document.getElementById("map"),{
  zoom:4,
  center:location
});
var marker=new google.maps.Marker({
  position:location,
  map:map
})
} 
</script>
{{-- <script src="https://maps.googleapis.com/maps/api/js"></script> --}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQLeU6d3WMKgVRLTZi3gFr7gIqOwAZMoo&callback=myMap"></script>
    </div>  
    @if(App::getLocale()== "en")
    <div class="col-lg-5 mab-text">
      <div  class="container-fluid adress mt-3">
        <i class="fas fa-map-marker-alt mt-1 text-primary pr-2"></i><h5 >Damanhour: Abd El-Salam El-Shazly St.</h5>
      </div>
      <div class="container-fluid adress mt-3">
        <i class="fas fa-map-marker-alt mt-1 text-primary pr-2"></i><h5 >Abu Hummus:K 47 Alexandria Cairo Agricultural Road (B)</h5>
      </div>
      <div class="container-fluid adress mt-3">
        <i class="fas fa-map-marker-alt mt-1 text-primary pr-2"></i><h5 > Shubrakhit:K 2 Shoubrakhit Damanhour Road </h5>
      </div>
      <div class="container-fluid adress mt-3">
        <i class="fas fa-map-marker-alt mt-1 text-primary pr-2"></i><h5 > Ad Dilinjat:El Bawaba Tower entrance of Ad Dilinjat City </h5>
      </div>
    </div>
    @else
    <div class="col-lg-5 mab-text p-0" dir="rtl">
      <div  class="container-fluid adress mt-3">
        <i class="fas fa-map-marker-alt mt-1 text-primary pl-2"></i><h5 >دمنهور : شــارع عبــد الســلام الشاذلى</h5>
      </div>
      <div  class="container-fluid adress mt-3">
        <i class="fas fa-map-marker-alt mt-1 text-primary pl-2"></i><h5 >ابو حمص : ك ٤٧ طـريـــق الأسكنــدرية الـقاهرة الزراعي ب</h5>
      </div>
      <div class="container-fluid adress mt-3">
        <i class="fas fa-map-marker-alt mt-1 text-primary pl-2"></i><h5 >  شبراخيت:  ك ٢ طريق شبراخيت دمنهور </h5>
      </div>
      <div class="container-fluid adress mt-3">
        <i class="fas fa-map-marker-alt mt-1 text-primary pl-2"></i><h5 >الدلنجات: برج البوابة مدخل مدينة الدلنجات</h5>
      </div>
    </div>
    @endif
    
  </div>
</div>
{{-- @yield('footer') --}}
@endsection
{{-- <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-slide-number="{{ $loop->index }}"> --}}
