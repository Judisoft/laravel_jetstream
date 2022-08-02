<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="demo/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">

        <!-- All CSS Links -->
        <link rel="stylesheet" href="{{ asset('assets/dist/output.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('demo/demo.css') }}">

        <title>Medxam Home</title>
    </head>
    <style>
      .logo-img{
        height: 40px;
        width: 40px; 
        background-color: #fff;
        padding: 3px;
        border-radius: 10px;
        
      }
    </style>
    <body>
        <!-- Preloader -->
        <div class="preloader-area demo-banner-bg text-center left-0 right-0 top-0 bottom-0  fixed z-9999">
            <div class="preloader absolute -mt-20 left-0 right-0 top-1/2 m-auto -translate-y-2/4">
                <div class="waviy font-bold text-25px">
                    {{-- <img src="assets/img/logo1.png" alt="logo" class="mt-5" style="position: absolute;left:40%;top:70%;"> --}}
                    <span class="text-white inline-block relative">M</span>
                    <span class="text-white inline-block relative">E</span>
                    <span class="text-white inline-block relative">D</span>
                    <span class="text-white inline-block relative">X</span>
                    <span class="text-white inline-block relative">A</span>
                    <span class="text-white inline-block relative">M</span>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Header section-->
        <header>
            <nav class="navbar anfra-nav-demo">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="anfra-nav">
                      <a class="logo" href="{{ route('home') }}">
                        <img src="{{ asset('images/blue-icon.png') }}" class="logo-img"/>
                      </a>
                      @auth
                        <a href="{{ Auth::logout() }}" class="nav-button text-uppercase">Logout</a>
                      @else
                        <a href="{{ route('login') }}" class="nav-button text-uppercase">Login</a>
                      @endauth
                    </div>
                  </div>
                </div>
              </div>
            </nav>
        </header>
        <!-- End of Header section -->
        <div class="demo-banner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-wrap">
                            <div class="banner-content">
                                <h1 style="font-weight:700">Prepare Better with MedXam</h1>
                                <p class="pt-5">We understand how much it means to you becoming a Medical Doctor. For this reason, we've built Medxam to help you realize this dream.</p>
                                <div class="register">
                                    @auth
                                    <a href="{{ route('dashboard') }}" class="button">Go to my Dashboard</a>
                                    @else
                                    <a href="{{ route('register') }}" class="button">Get Started for FREE</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 30px">
                            <p class="text-center text-dark pt-5">&copy; 2022, <a href="https://studentportal-cm.com">StudentPortal-CM</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- All JS Links -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/meanmenu.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="demo/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="demo/bootstrap.min.js"></script>
        <script src="demo/isotope.pkgd.min.js"></script>
        <script src="demo/imagesloaded.pkgd.min.js"></script>
        <script src="demo/demo.js"></script>
    </body>

<!-- Mirrored from templates.envytheme.com/togy/default/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 16:57:18 GMT -->
</html>