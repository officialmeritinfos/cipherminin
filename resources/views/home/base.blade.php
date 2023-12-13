
<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/owl.theme.default.min.css')}}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/owl.carousel.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/animate.min.css')}}">
    <!-- Boxicons Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/boxicons.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('home/css/flaticon.css')}}">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/meanmenu.min.css')}}">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/nice-select.min.css')}}">
    <!-- Odometer Min CSS-->
    <link rel="stylesheet" href="{{asset('home/css/odometer.min.css')}}">
    <!-- Magnific Min CSS-->
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('home/css/responsive.css')}}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('home/images/'.$web->logo)}}">
    <meta name="description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs.">
    <meta name="keywords" content="finance, invest, goal, values, income, earnings, gold, forex, equity">
    <meta name="url" content="/">

    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
</head>

<body>
@inject('injected','App\Defaults\Custom')
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Arduix Navbar Area -->
<div id="header" class="arduix-nav-style">
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="{{url('/')}}" class="logo">
                <img src="{{asset('home/images/'.$web->logo)}}" alt="Logo" style="width:50px;">
            </a>
        </div>
        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('home/images/'.$web->logo)}}" alt="Logo" style="width:100px;">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{url('/')}}" class="nav-link dropdown-toggle active">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('about')}}" class="nav-link dropdown-toggle">
                                    About
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Service
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach($injected->getServices() as $servi)
                                        <li class="nav-item">
                                            <a href="{{route('service.details',['id'=>$servi->id])}}" class="nav-link">{{$servi->title}}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Pages
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{url('plans')}}" class="nav-link">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('faqs')}}" class="nav-link">Faqs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('terms')}}" class="nav-link">Terms & Conditions</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Account
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('login')}}" class="nav-link">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('register')}}" class="nav-link">Register</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('contact')}}" class="nav-link dropdown-toggle">
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <!-- Start Other Option -->
                        <div class="others-option">
                            <a class="default-btn" href="{{route('login')}}">
                                Log In
                                <i class="bx bx-log-in-circle"></i>
                            </a>
                        </div>
                        <!-- End Other Option -->
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Arduix Navbar Area -->

@yield('content')


<!-- Start Footer Top Area -->
<footer class="footer-top-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <a href="{{url('/')}}">
                        <img src="{{asset('home/images/'.$web->logo)}}" alt="Image">
                    </a>
                    <p>
                        {{$siteName}} remains your steadfast companion, offering not just investment opportunities but a holistic
                        approach to financial well-being. With a global vision and a local impact, we continue to shape
                        the future of finance, one successful investment at a time.
                    </p>
                    <ul class="social-icon">
                        <li>
                            <a href="#">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-pinterest-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3>Services</h3>
                    <ul>
                        @inject('injected','App\Defaults\Custom')
                        @foreach($injected->getServices() as $serv)
                            <li>
                                <a href="{{route('service.details',['id'=>$serv->id])}}">
                                    <i class="right-icon bx bx-chevrons-right"></i>
                                    {{$serv->title}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3>Important Links</h3>
                    <ul>
                        <li>
                            <a href="{{url('about')}}">
                                <i class="right-icon bx bx-chevrons-right"></i>
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{url('faq')}}">
                                <i class="right-icon bx bx-chevrons-right"></i>
                                FAQs
                            </a>
                        </li>
                        <li>
                            <a href="{{url('contact')}}">
                                <i class="right-icon bx bx-chevrons-right"></i>
                                Contact
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3>Information</h3>
                    <ul class="information">
                        @if(!empty($web->phone))
                            <li class="address">
                                <i class="flaticon-call"></i>
                                <span>Phone</span>
                                <a href="tel:{{$web->phone}}">
                                    {{$web->phone}}
                                </a>
                            </li>
                        @endif
                        <li class="address">
                            <i class="flaticon-envelope"></i>
                            <span>Email</span>
                            <a href="mailto:{{$web->email}}">
                                {{$web->email}}
                            </a>
                        </li>
                        <li class="address">
                            <i class="flaticon-maps-and-flags"></i>
                            <span>Address</span>
                            {{$web->address}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-shape">
        <img src="{{asset('home/img/shape/footer-shape-one.png')}}" alt="Image">
        <img src="{{asset('home/img/shape/footer-shape-two.png')}}" alt="Image">
    </div>
</footer>
<!-- End Footer Top Area -->

<!-- Start Footer Bottom Area -->
<footer class="footer-bottom-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="copy-right">
                    <p>
                       &copy; {{$siteName}}
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="privacy">
                    <ul>
                        <li>
                            <a href="{{url('terms')}}">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="{{url('privacy')}}">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="designed">
                    <p>&copy; {{date('Y')}} {{$siteName}}. All right reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Bottom Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="bx bx-chevrons-up"></i>
    <i class="bx bx-chevrons-up bx-fade-up"></i>
</div>
<!-- End Go Top Area -->


<!-- Jquery Min JS -->
<script src="{{asset('home/js/jquery.min.js')}}"></script>
<!-- Bootstrap Bundle Min JS -->
<script src="{{asset('home/js/bootstrap.bundle.min.js')}}"></script>
<!-- Meanmenu Min JS -->
<script src="{{asset('home/js/meanmenu.min.js')}}"></script>
<!-- Wow Min JS -->
<script src="{{asset('home/js/wow.min.js')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{asset('home/js/owl.carousel.min.js')}}"></script>
<!-- Nice Select Min JS -->
<script src="{{asset('home/js/nice-select.min.js')}}"></script>
<!-- Appear Min JS -->
<script src="{{asset('home/js/appear.min.js')}}"></script>
<!-- Odometer Min JS -->
<script src="{{asset('home/js/odometer.min.js')}}"></script>
<!-- Magnific Min JS -->
<script src="{{asset('home/js/magnific-popup.min.js')}}"></script>
<!-- Ajaxchimp Min JS -->
<script src="{{asset('home/js/ajaxchimp.min.js')}}"></script>
<!-- Form Validator Min JS -->
<script src="{{asset('home/js/form-validator.min.js')}}"></script>
<!-- Contact JS -->
<script src="{{asset('home/js/contact-form-script.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('home/js/custom.js')}}"></script>
</body></html>
