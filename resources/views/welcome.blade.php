<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/frontend/css/')}}/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('asset/frontend/css/')}}/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('asset/frontend/css/')}}/responsive.css" rel="stylesheet" />
</head>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            Seotech
                        </span>
                    </a>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="s-1"> </span>
                        <span class="s-2"> </span>
                        <span class="s-3"> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{('/')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{('/about')}}"> About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{('/service')}}"> Services </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contactLink">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="quote_btn-container ">
                            <a href="">
                                <img src="{{asset('asset/frontend/images/')}}/call.png" alt="">
                                <span>
                                    Call : + 01 1234567890
                                </span>
                            </a>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- slider section -->
        <section class=" slider_section ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail_box">
                                        <h1>
                                            The best marketing
                                        </h1>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable content of a page
                                            when looking
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Contact Us
                                            </a>
                                            <a href="" class="btn-2">
                                                Get A Quote
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{asset('asset/frontend/images/')}}/slider-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail_box">
                                        <h1>
                                            The best marketing
                                        </h1>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable content of a page
                                            when looking
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Contact Us
                                            </a>
                                            <a href="" class="btn-2">
                                                Get A Quote
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{asset('asset/frontend/images/')}}/slider-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail_box">
                                        <h1>
                                            The best marketing
                                        </h1>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable content of a page
                                            when looking
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Contact Us
                                            </a>
                                            <a href="" class="btn-2">
                                                Get A Quote
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{asset('asset/frontend/images/')}}/slider-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-container">
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>



        @yield('content')
   


    <!-- footer section -->
    <div class="footer_bg">

        <!-- contact section -->
        <section class="contact_section layout_padding" id="contactLink">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Get In touch
                    </h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputName4" placeholder="Name ">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email id">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" id="inputSubject4" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputMessage" placeholder="Message">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <!-- end contact section -->

        <!-- end Home section -->

        <!-- info section -->
        <section class="info_section layout_padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="info_logo">
                            <h3>
                                Seotech
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor indidunt ut labore et
                                dolore magna
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_links">
                            <h4>
                                BASIC LINKS
                            </h4>
                            <ul class="  ">
                                <li class=" active">
                                    <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="">
                                    <a class="" href="about.html"> About</a>
                                </li>
                                <li class="">
                                    <a class="" href="service.html"> Services </a>
                                </li>
                                <li class="">
                                    <a class="" href="#contactLink">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_contact">
                            <h4>
                                CONTACT DETAILS
                            </h4>
                            <a href="">
                                <div class="img-box">
                                    <img src="{{asset('asset/frontend/images/')}}/telephone-white.png" width="12px" alt="">
                                </div>
                                <p>
                                    +01 1234567890
                                </p>
                            </a>
                            <a href="">
                                <div class="img-box">
                                    <img src="{{asset('asset/frontend/images/')}}/envelope-white.png" width="18px" alt="">
                                </div>
                                <p>
                                    demo@gmail.com
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_form ">
                            <h4>
                                NEWSLETTER
                            </h4>
                            <form action="">
                                <input type="email" placeholder="Enter your email">
                                <button>
                                    Subscribe
                                </button>
                            </form>
                            <div class="social_box">
                                <a href="">
                                    <img src="{{asset('asset/frontend/images/')}}/info-fb.png" alt="">
                                </a>
                                <a href="">
                                    <img src="{{asset('asset/frontend/images/')}}/info-twitter.png" alt="">
                                </a>
                                <a href="">
                                    <img src="{{asset('asset/frontend/images/')}}/info-linkedin.png" alt="">
                                </a>
                                <a href="">
                                    <img src="{{asset('asset/frontend/images/')}}/info-youtube.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid footer_section">
            <div class="container">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a>
                </p>
            </div>
        </section>
        <!-- footer section -->

    </div>

    <script type="text/javascript" src="{{asset('asset/frontend/js/')}}/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="{{asset('asset/frontend/js/')}}/bootstrap.js"></script>
    <script type="text/javascript" src="{{asset('asset/frontend/js/')}}/custom.js"></script>

</body>

</html>