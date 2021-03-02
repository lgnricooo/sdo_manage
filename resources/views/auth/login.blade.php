<!doctype html>
<html lang="en">


    <head>
        <meta charset="utf-8" />
        <title>SDO | Event Manager</title>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/homeAssets/images/sdo.png')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    </head>
    <body class="authentication-bg">
            <div class="account-pages my-5 pt-sm-5">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card">
                            
                                <div class="card-body p-4"> 
                                    <div class="text-center mt-2">
                                      <a href="{{ url('/') }}" class="mb-5 d-block auth-logo">
                                          <img src="{{asset('/homeAssets/images/sdo.png')}}" alt="" height="100" class="logo logo-dark">
                                          <h4 class="pera-title text-light-muted">DEPARTMENT OF EDUCATION</h4>
                                          <h4 class="pera-title text-light-muted" style="margin-top:-10px">DIVISION OF TUGUEGARAO CITY</h4>
                                      </a>
                                        <h5 class="text-primary" style="margin:-20px">Welcome Back !</h5>
                                        <p class="text-muted" style="margin-top:20px">{{ __('Login') }}</p>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <form method="POST" action="{{ route('login') }}">
                                        @csrf
            
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" required autocomplete="email" focus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                    
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            
                                            <div class="mt-3 text-right">
                                                <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                
                                            <div class="mt-4 text-center">
                                                @if (Route::has('register'))
                                                    <p class="mb-0">Don't have an account ? <a href="{{ route('register') }}" class="font-weight-medium text-primary"> Signup now </a> </p>
                                                @endif
                                            </div>
                                        </form>
                                    </div>
                
                                </div>
                            </div>

                           

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>

            <!-- JAVASCRIPT -->
            <script src="{{asset('/assets/libs/jquery/jquery.min.js')}}"></script>
            <script src="{{asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('/assets/libs/metismenu/metisMenu.min.js')}}"></script>
            <script src="{{asset('/assets/libs/simplebar/simplebar.min.js')}}"></script>
            <script src="{{asset('/assets/libs/node-waves/waves.min.js')}}"></script>
            <script src="{{asset('/assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
            <script src="{{asset('/assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>

            <script src="{{asset('/assets/js/app.js')}}"></script>                                   
        </body>
 </html>
