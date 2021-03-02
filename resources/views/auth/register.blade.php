<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/minible/layouts/vertical/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2021 16:55:31 GMT -->
<head>
        
<meta charset="utf-8" />
        <title>SDO | Event Manager</title>

        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon"  href="{{asset('/homeAssets/images/sdo.png')}}">

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
                                    <h5 class="text-primary">Register Account</h5>
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
        
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror  
                                        </div>
                
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror      
                                        </div>

                                        <div class="form-group">
                                            <label for="password-confirm">Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        
                                        <div class="mt-3 text-right">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Register</button>
                                        </div>
            
                                        <div class="mt-4 text-center">
                                            <p class="text-muted mb-0">Already have an account ? <a href="{{ route('login') }}" class="font-weight-medium text-primary"> Login</a></p>
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
        @include('sweetalert::alert')
    </body>

<!-- Mirrored from themesbrand.com/minible/layouts/vertical/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2021 16:55:31 GMT -->
</html>
