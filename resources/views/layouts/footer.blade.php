
@section('footer')
<div class="container-fluid footer-container mt-5 w-100">
            
    <div class="row footer p-0">
        <div class="col-lg-6 send-formpart">
            <div class="container send-from w-75">
            <h2 class="send-from-title">Feel Free to tell us about your suggestions ....    <i class="fas fa-envelope"></i></h2>
            <form action="">
                <div class="input-group mb-3 ">
                    <input type="text" class="form-control" placeholder="Provide your E-mail" >
                  </div>
                <div class="input-group mb-3">
                    <textarea type="text" class="form-control" placeholder="input your suggestions" aria-label="Recipient's username" aria-describedby="basic-addon2"></textarea>
                    <button class="input-group-text btn-primary" type="submit" id="basic-addon2">send</button>
                  </div>
                  
            </form>
        </div>
        </div>
        <div class="col-lg-3 order-brand p-4 ">
            <h4>Brand Classification</h4>
            <form action="{{url(app()->getLocale(),'class')}}" method="get">
            <ul>
                <li ><button type="submit" value="toyota" name="footer" class="btn p-0" id="toy">TOYOTA</button></li>
                <li><button type="submit" value="bmw" name="footer" class="btn p-0">BMW</button></li>
                <li><button type="submit" value="kia" name="footer" class="btn p-0">KIA</button></li>
                <li><button type="submit" value="honada" name="footer" class="btn p-0">HONAD</button></li>
                <li><button type="submit" value="mazda" name="footer" class="btn p-0">MAZDA</button></li>
            </ul>
        </form>
        </div>
        <div class="col-lg-3 order-brand p-4 ">
            <h4>Orderd BY</h4>
            <ul>
                <li><a class="text-dark" href="{{url(app()->getLocale(),'recent')}}">Resent Cars</a></li>
                <li><a class="text-dark" href="{{url(app()->getLocale(),'higher')}}">Higher To lower Price</a></li>
                <li><a class="text-dark" href="{{url(app()->getLocale(),'lower')}}">Lower to higher Price</a></li>
            </ul>
        </div>
    </div>
    <div class="container media d-flex justify-content-center text-white" >
        <a href="https://www.facebook.com/elgamasycars" class="fab fa-facebook-square p-4 media-icon "></a>
        <a href="" class="fab fa-instagram p-4 media-icon "></a>
        <a href="" class="fab fa-whatsapp p-4 media-icon "></a>
        <a href="" class="fab fa-youtube p-4 media-icon "></a>
        <a href="" class="fab fa-google p-4 media-icon "></a>
        <a href="" class="fab fa-google-play p-4 media-icon "></a>
   </div>
   <div class="container copyrights text-center">
       <h5>Developed By <a href="" class="text-dark">hossamthapet95@gmail.com</a></h5>

       <span>CopyRights <i class="far fa-copyright"> 2021 all Rights Reserved</i></span>
   </div>
</div>
@endsection    