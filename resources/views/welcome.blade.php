<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Job4Free</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('homeAssets/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('homeAssets/css/style.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('homeAssets/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('homeAssets/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('homeAssets/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('homeAssets/css/owl.carousel.min.css"')}}">
    <link href="{{asset('homeAssets/css/owl.theme.default.min.css')}}" rel="stylesoeet">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
        }
        .material-symbols-sharp {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
        }

    </style>
</head>
<body>
<!-- header section start -->
<div class="headerr">
    <div class="header_section header_bg" >
        <!-- here-->
        <!-- here-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="{{route('welcome')}}" class="logo"><img src="{{asset('homeAssets/images/logo.png')}}" alt="logo" style="height:150px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse animate__animated animate__backInRight" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                    <form>
                        <div class="login_menu">
                            <!--  <ul class="navbar-nav mr-auto">-->
                            @if (Route::has('login'))
                                @auth
                                    @if(Auth::user()->role=="Freelancer")
                                        <li class="nav-item"> <a href="{{ url('freelancer/dashboard') }}" class="nav-link">Dashboard</a></li>
                                    @elseif(Auth::user()->role=="Client")
                                        <li class="nav-item"> <a href="{{ url('client/dashboard') }}" class="nav-link">Dashboard</a></li>
                                    @else
                                        <li class="nav-item"> <a href="{{ url('admin/dashboard') }}" class="nav-link">Dashboard</a></li>
                                    @endif
                        </div>
                    </form>
                    @else
                        <!-- <ul  class="navbar-nav mr-auto">-->
                        <li  class="nav-item"><a href="{{ route('login') }}" class="nav-link" >Login</a></li>
                        @if (Route::has('register'))
                            <li  class="nav-item"><a href="{{ route('register') }}" class="nav-link" >Sign In</a></li>
                        @endif
                    @endauth
                    @endif
                </ul>
            </div>
            <div id="main">
                <span style="font-size:36px;cursor:pointer; color: #fff" onclick="openNav()"><img src="{{asset('homeAssets/images/toggle-icon.png')}}" style="height: 30px;"></span>
            </div>
        </nav>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="best_text">Best</div>
                                    <div class="image_1"><img src="{{asset('homeAssets/images/imgg-1.png')}}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($user as $uses)
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="best_text">Best</div>
                                        <div class="image_1"><img src="{{asset('homeAssets/images/imgg-1.png')}}"></div>
                                    </div>
                                    <div class="col-md-5">
                                        <h1 class="banner_taital">{{$uses->nom}}</h1>
                                        <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                                        <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="best_text">Best</div>
                                    <div class="image_1"><img src="{{asset('homeAssets/images/imgg-1.png')}}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
        <!-- banner section end -->
    </div>
</div>
<!-- header section end -->
<!-- cycle section start -->
<div class="cycle_section layout_padding">
    <div class="container">
        <h1 class="cycle_taital">About Job4Free</h1>
        <p class="cycle_text">Your talents deserve to be noticed. Let us help you connect with the world.</p>
        <div class="cycle_section_2 layout_padding">
            <div class="row">
                <div class="col-md-6">
                    <div class="box_main">
                        <h6 class="number_text">01</h6>
                        <div class="image_2"><img src="{{asset('homeAssets/images/home11.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="cycles_text">Connect with Talented Freelancers and Grow Your Business</h1>
                    <p class="lorem_text">"Are you looking for a reliable and talented freelancers to help you with your project?
                        Look no further! With years of experience,they have the skills and knowledge to deliver high-quality work that meets your unique needs.
                        From graphic design to content creation, they committed to helping you achieve your goals and exceed your expectations.
                        Don't hesitate to reach out and start a conversation about how they can help you today!"</p>
                    <div class="btn_main">
                        <div class="buy_bt"><a href="#">Get Started</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cycle_section_3 layout_padding">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="cycles_text">Find Your Dream Clients and Projects with Job4Free</h1>
                    <p class="lorem_text">"Are you tired of endlessly scrolling through job boards and submitting countless applications with little to no success?
                        Look no further than our freelancing platform! We connect talented freelancers with top-notch clients from around the world, providing endless opportunities for growth and success.
                        Our user-friendly platform offers easy navigation, secure payments, and a supportive community to help you thrive. Join today and take your freelancing career to the next level!"</p>
                    <div class="btn_main">
                        <div class="buy_bt"><a href="#">Join Us</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box_main">
                        <h6 class="number_text">02</h6>
                        <div class="image_2"><img src="{{asset('homeAssets/images/home2.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="read_btn_main">
            <div class="read_bt"><a href="#">Read More</a></div>
        </div>
    </div>
</div>
<!-- cycle section end -->
<!-- about section start -->
<div class="about_section layout_padding">
    <div class="container">
        <h1 class="about_taital">About our Freelance Marketplace</h1>
        <p class="about_text">Our mission is to provide a seamless and reliable platform where businesses of all sizes can find and hire top-notch freelancers
            who can help them achieve their goals. We understand that finding the right freelancer for a project can be a daunting task, which is why we’ve made
            it our mission to simplify the process and make it as efficient as possible</p>
        <div class="about_main">
            <img src="{{asset('homeAssets/images/img-5.png')}}" class="image_5" alt="">
        </div>
        <div class="read_bt_1"><a href="#">Read More</a></div>
    </div>
</div>
<!-- about section end -->
<!-- client section start -->
<div class="client_section layout_padding">
    <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="client_main">
                        <h1 class="client_taital">Says Customers</h1>
                        <div class="client_section_2">
                            <div class="client_left">
                                <div><img src="{{asset('homeAssets/images/client-img.png')}}" class="client_img" alt=""></div>
                            </div>
                            <div class="client_right">
                                <div class="quote_icon"><img src="{{asset('homeAssets/images/quote-icon.png')}}" alt=""></div>
                                <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                <h3 class="client_name">Channery</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="client_main">
                        <h1 class="client_taital">Says Customers</h1>
                        <div class="client_section_2">
                            <div class="client_left">
                                <div><img src="{{asset('homeAssets/images/client-img.png')}}" class="client_img" alt=""></div>
                            </div>
                            <div class="client_right">
                                <div class="quote_icon"><img src="{{asset('homeAssets/images/quote-icon.png')}}" alt=""></div>
                                <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                <h3 class="client_name">Channery</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="client_main">
                        <h1 class="client_taital">Says Customers</h1>
                        <div class="client_section_2">
                            <div class="client_left">
                                <div><img src="{{asset('homeAssets/images/client-img.png')}}" class="client_img" alt=""></div>
                            </div>
                            <div class="client_right">
                                <div class="quote_icon"><img src="{{asset('homeAssets/images/quote-icon.png')}}" alt=""></div>
                                <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                <h3 class="client_name">Channery</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>
<!-- client section end -->
<!-- news section start -->
<div class="news_section layout_padding">
    <div class="container">
        <h1 class="news_taital">Project Historique</h1>
        <p class="news_text">historique in dashboard and slider in homepage </p>
        <div class="news_section_2 layout_padding">
            <div class="row">
                <div class="col-sm-4">
                    <div class="box_main_1">
                        <div class="zoomout frame"><img src=""></div>
                        <div class="padding_15">
                            <h2 class="speed_text">project 1 </h2>
                            <div class="post_text">Post by : Den <span style="float: right;">20-12-2019</span></div>
                            <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
                            <div class="row align-items-center px-2 mt-4 mb-2">
                                <div class="col-sm-6" >
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <span class="material-symbols-outlined">
                                            </span>
                                            <span class="text-sm me-3 ">number</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-symbols-outlined">
                                            </span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-symbols-sharp">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark my-3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box_main_1">
                        <div class="zoomout frame"><img src="" alt=""></div>
                        <div class="padding_15">
                            <h2 class="speed_text">project 2</h2>
                            <div class="post_text">Post by : Den <span style="float: right;">20-12-2019</span></div>
                            <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box_main_1">
                        <div class="zoomout frame"><img src=""></div>
                        <div class="padding_15">
                            <h2 class="speed_text">proj 3</h2>
                            <div class="post_text">Post by : Den <span style="float: right;">20-12-2019</span></div>
                            <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- news section end -->
<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container">
        <div class="contact_main">
            <h1 class="request_text">A Call Back</h1>
            <form >
                <div class="form-group">
                    <label>
                        <input type="text" class="email-bt" placeholder="Name" name="Name" style="width: 550px">
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="email" class="email-bt" placeholder="Email" name="Name" style="width: 550px">
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="number" class="email-bt" placeholder="Phone Numbar" name="Email" style="width: 550px">
                    </label>
                </div>
                <div class="form-group">
                    <label for="comment"></label><textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage" style="width: 550px" ></textarea>
                </div>
            </form>
            <div class="send_btn"><a href="#">SEND</a></div>
        </div>
    </div>
</div>
<!-- contact section end -->
<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-sm-12 padding_0">
                <div class="map_main">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="call_text"><a href="#"><img src="{{asset('homeAssets/images/map-icon.png')}}" alt=""><span class="padding_left_0">Page when looking at its layou</span></a></div>
                <div class="call_text"><a href="#"><img src="{{asset('homeAssets/images/call-icon.png')}}" alt=""><span class="padding_left_0">Call Now  +01 123467890</span></a></div>
                <div class="call_text"><a href="#"><img src="{{asset('homeAssets/images/mail-icon.png')}}" alt=""><span class="padding_left_0">demo@gmail.com</span></a></div>
                <div class="social_icon">
                    <ul>
                        <li><a href="#"><img src="{{asset('homeAssets/images/fb-icon1.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('homeAssets/images/twitter-icon.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('homeAssets/images/linkedin-icon.png')}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('homeAssets/images/instagram-icon.png')}}" alt=""></a></li>
                    </ul>
                </div>
                <input type="text" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
                <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</a></p>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="{{asset('homeAssets/js/jquery.min.js')}}"></script>
<script src="{{asset('homeAssets/js/popper.min.js')}}"></script>
<script src="{{asset('homeAssets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('homeAssets/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('homeAssets/js/plugin.js"')}}"></script>
<!-- sidebar -->
<script src="{{asset('homeAssets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('homeAssets/js/custom.js')}}"></script>
<!-- javascript -->
<script src="{{asset('homeAssets/js/owl.carousel.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "800px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";

    }

    $("#main").click(function(){
        $("#navbarSupportedContent").toggleClass("nav-normal")
    })
</script>
</body>
</html>
