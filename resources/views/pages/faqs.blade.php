@extends('layouts.master-secondary')

@section('header', 'Frequently Asked Questions')
@section('title', 'FAQs')

@section('content')
<style>
    .panel-body {
        margin-left: 6%;
    }
    .service-menu h4 {
        background: #0099ff none repeat scroll 0 0;
    }
    .faqs-list #accordion .panel-title i {
        background: #0099ff none repeat scroll 0 0;
    }
</style>
<!--FAQS AREA-->
<section class="faqs-area section-padding wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 pull-right">
                <div class="faqs-list">
                    <h3 id="baggage">Frequently Asked Questions</h3>
                    <div class="panel-group" id="accordion">
                        <div class="panel active">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_one">
                                        <i class="fa fa-minus"></i> How many Kg of free carry-on baggage allowance that 
                                        I can bring for my ticket?
                                    </a>
                                </h4>
                            </div>
                            <div id="faqs_one" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    It depends on your booking class in your tickets. Flex Economy class can bring free 10KG carry-on 
                                    baggage allowance while other classes than this can bring free 7KG carry-on baggage allowance.
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_two">
                                    <i class="fa fa-minus"></i> 
                                        How many Kg of free checked-in baggage allowance for my ticket?
                                    </a>
                                </h4>
                            </div>
                            <div id="faqs_two" class="panel-collapse collapse">
                                <div class="panel-body">
                                    It depends on your booking class in your tickets. Flex Economy classes can have free 30KG checked-in 
                                    baggage allowance, Standard Economy classes can have free 23KG checked-in baggage allowance and 
                                    Basic Economy classes do not have free check-in baggage allowance.
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_three">
                                    <i class="fa fa-minus"></i>Can infant has free carry-on baggage allowance?</a>
                                </h4>
                            </div>
                            <div id="faqs_three" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Infant does not have free carry-on baggage allowance.
                                </div>
                            </div>
                        </div>
                        <div id="extra-baggage" class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_four">
                                    <i class="fa fa-minus"></i> How many Kg of free checked-in baggage allowance for infant?</a>
                                </h4>
                            </div>
                            <div id="faqs_four" class="panel-collapse collapse">
                                <div class="panel-body">
                                    It depends on the booking classes. For Flex Economy and Standard Economy, 
                                    infant has a free 10KG checked-in baggage allowance. For Basic Economy, 
                                    infant does not have a free checked-in baggage allowance.
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_five">
                                    <i class="fa fa-minus"></i> How can I buy extra baggage allowance by online?</a>
                                </h4>
                            </div>
                            <div id="faqs_five" class="panel-collapse collapse">
                                <div class="panel-body">
                                    You can purchase the extra baggage online by visiting the link 
                                    <a href="https://www.kcairlines.com">https://www.kcairlines.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_six">
                                    <i class="fa fa-minus"></i> Can infant occupy a seat on the flight?</a>
                                </h4>
                            </div>
                            <div id="faqs_six" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Infant will not occupy the seat. Infant occupies the seat will not permitted at KC International Airlines.
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_seven">
                                    <i class="fa fa-minus"></i> How can I find the useful information of my booking?</a>
                                </h4>
                            </div>
                            <div id="faqs_seven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    You can simply visit our website ....... and click on .......
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_ten">
                                    <i class="fa fa-minus"></i> Where is the location of KC International Airlines?</a>
                                </h4>
                            </div>
                            <div id="faqs_ten" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <b>Head Office:</b> House #C02 Russian Blvd. Sangkat Kakab, Khan Por Senchey Phnom Penh, Kingdom of Cambodia.
                                </div>
                            </div>
                        </div>
                        <div id="flight-cancel" class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_eleven">
                                    <i class="fa fa-minus"></i> How can I book the tickets?</a>
                                </h4>
                            </div>
                            <div id="faqs_eleven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    You can book the tickets through: our website, call center or mobile app.
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_twelve">
                                    <i class="fa fa-minus"></i> If the flight had been cancelled by your airlines, what can I do with my tickets?</a>
                                </h4>
                            </div>
                            <div id="faqs_twelve" class="panel-collapse collapse">
                                <div class="panel-body">
                                    You can change your flight date for free or you can refund your tickets for free.
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_forteen">
                                    <i class="fa fa-minus"></i> Can I book a ticket that is the combination class of lowest class and highest class?</a>
                                </h4>
                            </div>
                            <div id="faqs_forteen" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Yes, you can.
                                </div>
                            </div>
                        </div>
                        <div id="destination-change" class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_sixteen">
                                    <i class="fa fa-minus"></i> Can I change the origin/destination of my flight?</a>
                                </h4>
                            </div>
                            <div id="faqs_sixteen" class="panel-collapse collapse">
                                <div class="panel-body">
                                    No, you cannot. All bookings are not permitted to reroute.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-left">
                <div class="service-menu">
                    <h4>Related Topics</h4>
                    <ul>
                        <li><a href="#baggage">Baggage Allowance<i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#extra-baggage">Extra Baggage <i class="fa fa-angle-right"></i></a></li>                                               
                        <li><a href="#flight-cancel">Flight Cancel <i class="fa fa-angle-right"></i></a></li>                        
                        <li><a href="#destination-change">Destination Change <i class="fa fa-angle-right"></i></a></li>                        
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!--FAQS AREA END-->

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    $('body').addClass('single-page');
</script>
@endsection