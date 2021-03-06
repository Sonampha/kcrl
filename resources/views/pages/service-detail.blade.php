@extends('layouts.master-secondary')

@section('header', 'Service-Detail')
@section('title', 'Service-Detail')

@section('content')

    <!--SERVICE AREA-->
    <section class="service-area-two section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 pull-right">
                    <div class="service-details-content">
                        <div class="service-image">
                            <img src="img/blog/blog_7.jpg" alt="">
                        </div>
                        <div class="service-details-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                            <blockquote>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</blockquote>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="faqs-left-img">
                                    <img src="img/about/about-details.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="faqs-list">
                                    <h3>why choose carries</h3>
                                    <div class="panel-group" id="accordion">
                                        <div class="panel active">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_one"><i class="fa fa-minus"></i> Lorem Ipsum is simply dummy text ?</a>
                                                </h4>
                                            </div>
                                            <div id="faqs_one" class="panel-collapse collapse">
                                                <div class="panel-body">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_two"><i class="fa fa-minus"></i> Lorem Ipsum is simply dummy text ?</a>
                                                </h4>
                                            </div>
                                            <div id="faqs_two" class="panel-collapse collapse">
                                                <div class="panel-body">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_three"><i class="fa fa-minus"></i> Lorem Ipsum is simply dummy text ?</a>
                                                </h4>
                                            </div>
                                            <div id="faqs_three" class="panel-collapse collapse">
                                                <div class="panel-body">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-left">
                    <div class="service-menu">
                        <h4>Service Details</h4>
                        <ul>
                            <li><a href="#">Road Freight <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Sea Freight <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Air Freight <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Plane Freight <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Rail Freight <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Warehouse Freight <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Consulting Service <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SERVICE AREA END-->

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('single-page');
    </script>
@endsection