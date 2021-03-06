@extends('layouts.master-prim2')

@section('title', 'Home Page 2')

@section('content')

    <!--BLOG AREA-->
    <section class="blog-area gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="img/blog/blog_1.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-ship"></i></a></div>
                            <h3><a href="single-blog.html">Ocean Freight</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout..</p>
                            <a href="single-blog.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <img src="img/blog/blog_2.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="single-blog.html">Air Freight</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout..</p>
                            <a href="single-blog.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="img/blog/blog_3.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-truck"></i></a></div>
                            <h3><a href="single-blog.html">Street Freight</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout..</p>
                            <a href="single-blog.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <!--ABOUT AREA-->
    <section class="about-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="quote-form-area wow fadeIn">
                        <h3>Get A Quote</h3>
                        <form class="quote-form" action="#">
                            <p class="width-full">
                                <input type="text" name="name" id="name" placeholder="Your Name">
                            </p>
                            <p class="width-half">
                                <input type="email" name="email" id="email" placeholder="Email">
                                <input class="pull-right" type="phone" name="phone" id="phone" placeholder="Phone">
                            </p>
                            <p class="width-half">
                                <input type="text" name="type" id="type" placeholder="Type">
                                <input class="pull-right" type="text" name="quantity" id="quantity" placeholder="Quantity">
                            </p>
                            <p class="width-full">
                                <input type="text" name="destination" id="destination" placeholder="Destination">
                            </p>
                            <p>
                                <textarea name="quote-message" id="quote-message" cols="30" rows="4" placeholder="Your Message..."></textarea>
                            </p>
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                    <div class="about-content-area wow fadeIn">
                        <div class="about-content">
                            <h2>We have 25 years experience in this passion</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,</p>
                            <a href="#">read more <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="about-count">
                            <div class="single-about-count">
                                <h4><i class="fa fa-suitcase"></i> 120</h4>
                                <p>Project Done</p>
                            </div>
                            <div class="single-about-count">
                                <h4><i class="fa fa-thumbs-o-up"></i> 100</h4>
                                <p>Project Done</p>
                            </div>
                            <div class="single-about-count">
                                <h4><i class="fa fa-users"></i> 30</h4>
                                <p>Project Done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--SERVICE AREA-->
    <section class="service-area-two section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Our Service</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="service-content wow fadeIn">
                        <h2>we offer quick & powerful logistics solution</h2>
                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you.</p>
                        <a href="service.html" class="read-more">Learn More</a>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="service-two-content wow fadeIn">
                        <div class="row no-margin">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                                <div class="single-service-two border">
                                    <div class="service-icon-two"><i class="fa fa-truck"></i></div>
                                    <h4>road freight</h4>
                                    <p>Lorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                                <div class="single-service-two border-top border-bottom border-right">
                                    <div class="service-icon-two"><i class="fa fa-plane"></i></div>
                                    <h4>air freight</h4>
                                    <p>Lorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                                <div class="single-service-two border-left border-right border-bottom">
                                    <div class="service-icon-two"><i class="fa fa-ship"></i></div>
                                    <h4>sea freight</h4>
                                    <p>Lorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                                <div class="single-service-two border-right border-bottom">
                                    <div class="service-icon-two"><i class="fa fa-dropbox"></i></div>
                                    <h4>ware house</h4>
                                    <p>Lorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                                <div class="single-service-two border-left border-right border-bottom">
                                    <div class="service-icon-two"><i class="fa fa-cog"></i></div>
                                    <h4>consulting</h4>
                                    <p>Lorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                                <div class="single-service-two border-right border-bottom">
                                    <div class="service-icon-two"><i class="fa fa-bicycle"></i></div>
                                    <h4>fast delevary</h4>
                                    <p>Lorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SERVICE AREA END-->

    <!--BLOG AREA-->
    <section class="blog-area blog-bottom gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Our Service</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="img/blog/blog_1.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-ship"></i></a></div>
                            <h3><a href="single-blog.html">Ocean Freight</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout..</p>
                            <a href="single-blog.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <img src="img/blog/blog_2.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="single-blog.html">Air Freight</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout..</p>
                            <a href="single-blog.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="img/blog/blog_3.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-truck"></i></a></div>
                            <h3><a href="single-blog.html">Street Freight</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout..</p>
                            <a href="single-blog.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <!--TESTMONIAL AREA -->
    <section class="testmonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>what client’s say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                    <div class="client-photo-list wow fadeIn">
                        <div class="client_photo">
                            <div class="item">
                                <img src="img/testmonial/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/testmonial/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/testmonial/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/testmonial/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/testmonial/2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="client_nav">
                        <span class="fa fa-angle-left testi_prev"></span>
                        <span class="fa fa-angle-right testi_next"></span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
                    <div class="client-details-content wow fadeIn">
                        <div class="client_details">
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TESTMONIAL AREA END -->

    <!--CLIENTS AREA-->
    <section class="clients-area section-padding gray-bg wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="client-list">
                        <div class="single-client">
                            <img src="img/client/1.jpg" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/2.jpg" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/3.jpg" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/4.jpg" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/5.jpg" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/1.jpg" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/2.jpg" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/3.jpg" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/4.jpg" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/5.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CLIENTS AREA END-->

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('home-two');
    </script>
@endsection