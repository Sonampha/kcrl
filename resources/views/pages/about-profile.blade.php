@extends('layouts.master-secondary')

@section('header', 'About Profile')
@section('title', 'Profile')

@section('content')

    <!--ABOUT DETAILS AREA-->
    <section class="about-details-area section-padding wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>about carries</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <ul class="about-details-menu">
                        <li class="active"><a data-toggle="tab" href="#company">Company Profile</a></li>
                        <li><a data-toggle="tab" href="#history">Our History</a></li>
                        <li><a data-toggle="tab" href="#report">Annual Report</a></li>
                        <li><a data-toggle="tab" href="#team">Team Member</a></li>
                        <li><a data-toggle="tab" href="#support">Client Support</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="tab-content about-details-content">
                        <div id="company" class="about-company tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <img src="img/about/about-cargo.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <h3>Our Mission</h3>
                                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="#" class="read-more">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <img src="img/about/about-details-bottom.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <h3>Our Vision</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <ul>
                                            <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet, consectetur.</li>
                                            <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet, consectetur.</li>
                                            <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet, consectetur.</li>
                                        </ul>
                                        <a href="#" class="read-more">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="history" class="company-history tab-pane fade">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <img src="img/about/about-cargo.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="about-history-content history-list">
                                        <div class="single-history">
                                            <div class="history-year">
                                                <p>2011</p>
                                            </div>
                                            <h4>we start our business</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                                        </div>
                                        <div class="single-history">
                                            <div class="history-year">
                                                <p>2012</p>
                                            </div>
                                            <h4>we co-opperate problem solution</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                                        </div>
                                        <div class="single-history">
                                            <div class="history-year">
                                                <p>2014</p>
                                            </div>
                                            <h4>we are expanding our network </h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                                        </div>
                                        <div class="single-history">
                                            <div class="history-year">
                                                <p>2016</p>
                                            </div>
                                            <h4>we are serve worldwide </h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="report" class="company-anual-reports tab-pane fade">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="annual-reports">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="annual-reports-image">
                                                    <img src="img/reports/2012.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="annual-reports-content">
                                                    <h4>2016 logistics transportation annual reprot</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                    <ul>
                                                        <li><i class="fa fa-check"></i> Sed quia consequuntur magni dolores eos.</li>
                                                        <li><i class="fa fa-check"></i> Sed quia consequuntur magni dolores eos.</li>
                                                        <li><i class="fa fa-check"></i> Sed quia consequuntur magni dolores eos.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 pull-right">
                                                <div class="annual-reports-image">
                                                    <img src="img/reports/2015.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="annual-reports-content">
                                                    <h4>2016 logistics transportation annual reprot</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                    <ul>
                                                        <li><i class="fa fa-check"></i> Sed quia consequuntur magni dolores eos.</li>
                                                        <li><i class="fa fa-check"></i> Sed quia consequuntur magni dolores eos.</li>
                                                        <li><i class="fa fa-check"></i> Sed quia consequuntur magni dolores eos.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="annual-reports-image">
                                                    <img src="img/reports/2016.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="annual-reports-content">
                                                    <h4>2016 logistics transportation annual reprot</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                    <ul>
                                                        <li><i class="fa fa-check"></i> Sed quia consequuntur magni dolores eos.</li>
                                                        <li><i class="fa fa-check"></i> Sed quia consequuntur magni dolores eos.</li>
                                                        <li><i class="fa fa-check"></i> Sed quia consequuntur magni dolores eos.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 pull-right">
                                                <div class="annual-reports-image">
                                                    <img src="img/reports/2017.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                <div class="annual-reports-content">
                                                    <h4>2016 logistics transportation annual reprot</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                    <ul>
                                                        <li><i class="fa fa-check"></i> Sed quia consequuntur magni dolores eos.</li>
                                                        <li><i class="fa fa-check"></i> Sed quia consequuntur magni dolores eos.</li>
                                                        <li><i class="fa fa-check"></i> Sed quia consequuntur magni dolores eos.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="team" class="team-list tab-pane fade">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="single-team">
                                        <div class="member-image">
                                            <img src="img/team/member-1.jpg" alt="">
                                        </div>
                                        <div class="member-details">
                                            <h3>John Bruig</h3>
                                            <p>Founder 'G'</p>
                                            <div class="member-social-bookmark">
                                                <ul class="social-bookmark">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="single-team">
                                        <div class="member-image">
                                            <img src="img/team/member-2.jpg" alt="">
                                        </div>
                                        <div class="member-details">
                                            <h3>Lara Dotto</h3>
                                            <p>Founder 'G'</p>
                                            <div class="member-social-bookmark">
                                                <ul class="social-bookmark">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="single-team">
                                        <div class="member-image">
                                            <img src="img/team/member-3.jpg" alt="">
                                        </div>
                                        <div class="member-details">
                                            <h3>Labong Mitro</h3>
                                            <p>Founder 'G'</p>
                                            <div class="member-social-bookmark">
                                                <ul class="social-bookmark">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="single-team">
                                        <div class="member-image">
                                            <img src="img/team/member-4.jpg" alt="">
                                        </div>
                                        <div class="member-details">
                                            <h3>John Part</h3>
                                            <p>Founder 'G'</p>
                                            <div class="member-social-bookmark">
                                                <ul class="social-bookmark">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="single-team">
                                        <div class="member-image">
                                            <img src="img/team/member-5.jpg" alt="">
                                        </div>
                                        <div class="member-details">
                                            <h3>Jora Pata</h3>
                                            <p>Founder 'G'</p>
                                            <div class="member-social-bookmark">
                                                <ul class="social-bookmark">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="single-team">
                                        <div class="member-image">
                                            <img src="img/team/member-6.jpg" alt="">
                                        </div>
                                        <div class="member-details">
                                            <h3>Dimra Ajax</h3>
                                            <p>Founder 'G'</p>
                                            <div class="member-social-bookmark">
                                                <ul class="social-bookmark">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="support" class="support-content tab-pane fade">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="single-promo">
                                        <div class="promo-icon"><i class="fa fa-anchor"></i></div>
                                        <div class="promo-details">
                                            <h3>Our Location</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="single-promo">
                                        <div class="promo-icon"><i class="fa fa-newspaper-o"></i></div>
                                        <div class="promo-details">
                                            <h3>Latest News</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="single-promo">
                                        <div class="promo-icon"><i class="fa fa-umbrella"></i></div>
                                        <div class="promo-details">
                                            <h3>24/7 Support</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="single-promo">
                                        <div class="promo-icon"><i class="fa fa-bicycle"></i></div>
                                        <div class="promo-details">
                                            <h3>Fast Delevery</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <div class="promo-img">
                                        <img src="img/promo/promo_troli.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT DETAILS AREA END-->

    <!--PROMO AREA-->
    <section class="promo-area">
        <div class="promo-bottom-area section-padding">
            <div class="promo-botton-area-bg" data-stellar-background-ratio="0.6"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12 text-center">
                        <div class="promo-bottom-content wow fadeIn">
                            <h2>we provide international freight &amp; logistics service worldwidw</h2>
                            <a href="#" class="read-more">Get a quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PROMO AREA END-->

    <!--TESTMONIAL AREA -->
    <section class="testmonial-area section-padding gray-bg">
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
    <section class="clients-area section-padding wow fadeIn">
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
        $('body').addClass('single-page');
    </script>
@endsection