
@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light fixed-top m-0 p-0 mainnav">
        <div class="container-fluid for-nav  m-0 p-0">
            
            
            {{-- <div class="container-fluid  logo-of-project" style="width: 20%;">
                <img src="../img/mainlogo.png" class="logo-img">
            </div> --}}
            <a class="navbar-brand requierd pl-5" href="{{ url('/') }}">
                ELGamasy-auto
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" id="navbutton">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-link mainnav welcome" aria-current="page" href="{{ url('/') }}">{{ __('home') }}</a>
              <a class="nav-link mainnav browse" href="{{ route('cars.index',app()->getLocale()) }}">{{ __('browse') }}</a>
              @if(auth::check())
            @if(auth::user()->role == "admin")
              <a class="nav-link mainnav create" href="{{ route('cars.create',app()->getLocale()) }}">{{ __('create') }}</a>
              @endif
              @endif
              <a class="nav-link mainnav users" href="{{ url(app()->getLocale(),'users') }}">{{ __('explore') }}</a>
              
              {{-- <ul class="navbar-nav ml-auto "> --}}
                @guest
                
                
                <li class="nav-item">
                    <a class="nav-link mainnav" href="{{ route('login',app()->getLocale()) }}"><i class="fas fa-user-tie" style="font-size: 20px"></i></a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item ">
                        <a class="nav-link mainnav" href="{{ route('register',app()->getLocale()) }}">{{ __('register') }}</a>
                    </li>
                @endif
            @else
                    <li class="nav-item">
                        <a class="nav-link mainnav" href="{{ route('logout',app()->getLocale()) }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('logout') }}
                        </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                
            @endguest
            
            <div class="dropdown pr-3">
                <a class="btn  dropdown-toggle nav-link mainnav" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('اللغة') }}
                </a>
              
                <ul class="dropdown-menu pr-3" aria-labelledby="dropdownMenuLink">
                    <li class="dropdown-item p-0">
                        <a href="{{ url('en')}}" class="nav-link">EN</a>
                    </li>
                    <li class="dropdown-item p-0">
                        <a href="{{url('ar')}}" class="nav-link ">AR</a>
                    </li>
                </ul>
              </div>
        </div>
       
      </div>
    </div>
  </nav>
    
    
@endsection                <!-- Authentication Links -->
               