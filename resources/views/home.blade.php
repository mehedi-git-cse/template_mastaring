@extends('welcome')
@yield('title,Home')
@section('content')
<section class="about_section ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{asset('asset/frontend/images/')}}/about-img2.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section -->
    <section class="service_section layout_padding">
        <div class="container-fluid">
            <div class="heading_container">
                <h2>
                    Our Services
                </h2>
                <p>
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <div class="service_container">
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('asset/frontend/images/')}}/s-1.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Brand Promotion
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('asset/frontend/images/')}}/s-2.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Video Marketing

                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('asset/frontend/images/')}}/s-3.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Site Analysis
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('asset/frontend/images/')}}/s-4.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Social Media Marketing
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('asset/frontend/images/')}}/s-5.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            SEO Optimization
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        </p>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    Read More
                </a>
            </div>
        </div>
    </section>
    <!-- end service section -->

    <!-- work section -->

    <section class="work_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    How We Work!
                </h2>
                <p>
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="detail_container">
                        <div class="box b-1">
                            <div class="top-box">
                                <div class="icon-box">
                                    <img src="{{asset('asset/frontend/images/')}}/work-i1.png" alt="">
                                </div>
                                <h5>
                                    We Generate A Good Idea First
                                </h5>
                            </div>
                            <div class="bottom-box">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam
                                </p>
                            </div>
                        </div>
                        <div class="box b-1">
                            <div class="top-box">
                                <div class="icon-box">
                                    <img src="{{asset('asset/frontend/images/')}}/work-i2.png" alt="">
                                </div>
                                <h5>
                                    Then We Start Applying Ideas
                                </h5>
                            </div>
                            <div class="bottom-box">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{asset('asset/frontend/images/')}}/work-img.png" alt="">
                    </div>
                </div>
            </div>

            <div class="btn-box">
                <a href="">
                    Read More
                </a>
            </div>
        </div>
    </section>
    <!-- end work section -->

    <!-- team section -->

    <section class="team_section layout_padding2-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Meet The Team
                </h2>
                <p>
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="team_container">
            <div class="box b-1">
                <div class="img-box">
                    <img src="{{asset('asset/frontend/images/')}}/t-1.png" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Yokit Den
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                    </p>
                    <div class="social_box">
                        <a href="">
                            <img src="{{asset('asset/frontend/images/')}}/fb.png" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('asset/frontend/images/')}}/twitter.png" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('asset/frontend/images/')}}/linkedin.png" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('asset/frontend/images/')}}/insta.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="box b-2">
                <div class="img-box">
                    <img src="{{asset('asset/frontend/images/')}}/t-2.png" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Morde Den
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                    </p>
                    <div class="social_box">
                        <a href="">
                            <img src="{{asset('asset/frontend/images/')}}/fb.png" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('asset/frontend/images/')}}/twitter.png" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('asset/frontend/images/')}}/linkedin.png" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('asset/frontend/images/')}}/insta.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="box b-3">
                <div class="img-box">
                    <img src="{{asset('asset/frontend/images/')}}/t-3.png" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Marry Doki
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                    </p>
                    <div class="social_box">
                        <a href="">
                            <img src="{{asset('asset/frontend/images/')}}/fb.png" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('asset/frontend/images/')}}/twitter.png" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('asset/frontend/images/')}}/linkedin.png" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('asset/frontend/images/')}}/insta.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end team section -->

    <!-- client section -->

    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Testimonial
                </h2>
                <p>
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{asset('asset/frontend/images/')}}/client.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    Normal distribution
                                </h6>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content of a page when
                                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                    distribution of
                                    letters, as opposed to using 'Content here, content here', making it look
                                </p>
                                <img src="{{asset('asset/frontend/images/')}}/quote.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{asset('asset/frontend/images/')}}/client.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    Normal distribution
                                </h6>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content of a page when
                                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                    distribution of
                                    letters, as opposed to using 'Content here, content here', making it look
                                </p>
                                <img src="{{asset('asset/frontend/images/')}}/quote.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{asset('asset/frontend/images/')}}/client.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    Normal distribution
                                </h6>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content of a page when
                                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                    distribution of
                                    letters, as opposed to using 'Content here, content here', making it look
                                </p>
                                <img src="{{asset('asset/frontend/images/')}}/quote.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_btn-container">
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </section>
    @endsection
   