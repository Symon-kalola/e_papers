<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
      <script src="{{ asset('aos-master/dist/aos.js') }}" ></script>
       <link href="{{ asset('aos-master/dist/aos.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">


     {{-- here i go --}}
     <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" ></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body >
   
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light bg-body-secondary white shadow-sm" >
            <div class="container-fluid " >
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/mubas-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Mubas-E-Papers
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                         <li class="nav-item">
                                    <a class="nav-link active" href="/">Home</a>
                         </li>
                         <li class="nav-item">
                                    <a class="nav-link" href="/papers">Papers</a>
                         </li>
                          <li class="nav-item">
                                    <a class="nav-link" href="/requests">Requests</a>
                         </li>
                       

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        @guest
            
        @endguest

        <main class="">
            @yield('content')
        </main>
        @guest
            @else
            <footer class="container-fluid bg-dark mt-5 text-white">
                 
                 <div class="footer-row row  g-4 py-1" style="color:#abafb1;">
                    <div class="col-md align-items-center">
                      <div>
                        <div class=" h4 m-0 text-blue fw-bold">MUBAS PAST PAPERS REPSITORY</div>

                        <p class="mt-2">Want to know more about us? Contact us on the following</p>
                      </div>
                      <div class="small">
                             <div class="d-flex align-items-center ">
                                <button class="btn btn-floating bg-primary btn-sm  me-3 text-white" style="font-size:12px"><i class="fa fa-map-marker"></i></button>
                                <div style="color:#abafb1;" class="p-0">Our offices are located in Chitawila, Blantyre.</div>
                             </div>
                             <div class="d-flex mt-2 align-items-center " id="contact">
                                <button class="btn btn-floating bg-primary btn-sm me-3 text-white" style="font-size:12px"><i class="fa fa-phone"></i></button>
                                <div class="div">
                                <div class="m-0">+265(0) 991 394 987</div>
                                <div class="m-0">+265(0) 882 2751360</div>
                                </div>
                             </div>
                             <div class="d-flex mt-2 align-items-center ">
                                <button class="btn btn-floating bg-primary btn-sm me-3 text-white" style="font-size:12px"><i class="fa fa-envelope"></i></button>
                                <div class="m-0"><a>info@mubas.ac.mw</a></div>
                             </div>
                               
                      </div>
                      
                    </div>
                   
                     
                   <div class="col-md small ">
                       <div class="h4 text-white border-1 border-primary border-2 pb-2">Request Past Paper</div>
                        
                          
                               
             <form method="POST" action="{{ route('storeRequest') }}" class="mt-2 px-4">
                        @csrf

                        <div class="row mb-3">
                            <label for="module" class="col-md-2 col-form-label  ">{{ __('module Name') }}</label>

                            <div class="col-md-10">
                                <input id="module" type="text" class="form-control @error('module') is-invalid @enderror" name="module" value="{{ old('module') }}" required autocomplete="module" autofocus>

                                @error('module')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                     
                       
                          <div class="row mb-3">
                            <label for="class" class="col-md-2 col-form-label  ">{{ __('class') }}</label>

                            <div class="col-md-10">
                              
                                <select id="class" type="class" class="form-control form-select" @error('class') is-invalid @enderror name="class" value="{{ old('class') }}" required autocomplete="class" autofocus>
                                 <option selected>BIS</option>
                                    <option value="commerce">BIT</option>
                                    <option value="engenearing">BAJ2</option>
                                    <option value="media studies">BAJ1</option>
                                </select>    

                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for='semester' class="col-md-2 col-form-label  ">{{ __('Semester') }}</label>

                            <div class="col-md-10">
                              
                                <select id='semester' type='semester' class="form-control form-select" @error('semester') is-invalid @enderror name='semester' value="{{ old('semester') }}" required autocomplete='semester' autofocus>
                                 <option selected value="1">1</option>
                                    <option value="commerce">2</option>
                                </select>    

                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for='year' class="col-md-2 col-form-label  ">{{ __('Year') }}</label>

                            <div class="col-md-10">
                              
                                <select id='year' type='year' class="form-control form-select" @error('year') is-invalid @enderror name='year' value="{{ old('year') }}" required autocomplete='year' autofocus>
                                 <option selected value="1">1</option>
                                    <option value="commerce">2</option>
                                    <option value="commerce">3</option>
                                    <option value="commerce">4</option>
                                    <option value="commerce">5</option>
                                </select>    

                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-0">
                            <div class="col-md-10 offset-md-4">
                                <button type="submit" onclick='succes()' class="btn btn-primary">
                                    {{ __('Send Request') }}
                                </button>

                            </div>
                        </div>
              </form>
                          
                   </div>
                 </div>
                 
                 <div class="mt-4 small border-2 border-top text-center border-white ">
                    &copy;2023 MUBAS
                 </div>

                 
</footer>

            
            
        @endguest

        
        
    </div>
</body>
<script>
    function succes()
    {
        window.alert('Request Submitted')
    }
</script>
</html>
