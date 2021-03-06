@extends('layouts.master-tertiary')

@section('title', 'Why Join KC Airlines')

@section('content')
<link rel="stylesheet" href="{{ url('/css/flight-table.css') }}">
<style>
    @font-face {
    font-family: BakerSignetRegular;
    src: url("fonts/BakerSignetRegular.otf");
    }

    .area-title a{
        color:#000099;
    }
    .area-title a:hover{
        color:#d01126;
    }
    .navbar-default {
        background-color: #000099 !important;
    }
    .service-menu h4 {
        background: #0099ff none repeat scroll 0 0;
    }
    .faqs-list #accordion .panel-title i {
        background: #0099ff none repeat scroll 0 0;
    }
    .relate-link{
        margin-bottom:30px;
    }
    .relate-link a{
        color:#0099ff;
    }
    .responsive-table thead th {
        text-align: center !important;
    }

    .responsive-table thead th {
        background-color: #abd8db;
        border: 1px solid #abd8db;
        font-weight: bold;
        color: #3c4a62;
    }
    .responsive-table tbody td {
        border-bottom: 1px solid #abd8db;
    }

    .responsive-table thead th {
        text-align: left;
    }
    .area-title ul{
        margin-left: 20px;
    }
    ul{
        list-style: none inside;
    }
    li{
        margin-top: 10px;
    }
    .active{
        color:#d01126 ;
     }
     .table-one{
         width:60%;
     }
     .table-two{
         width:90%;
     }
    /*----------------------------------
        MOBILE LAYOUT: 320px
    -----------------------------------*/

    @media only screen and (max-width: 767px) {
        .area-title ul{
            margin-left: 0px;
        }
        .table-one{
            width:100%;
        }
        .table-two{
            width:100%;
        }
    }
</style>

    <div class="row">
        <img src="{{ url('/img/second-headers/cambodia-angkor-wat.jpg') }}" class="img-header"/>
    </div> 

    <!--ABOUT AREA-->
    <section class="about-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 pull-left">
                    <div class="relate-link"><a href="/">Home</a> >> <a href="/careers">Careers</a> >> Why Join KC Airlines</div>
                    <div class="area-title wow fadeIn">
                        <h3 align="center">Why Join KC Airlines</h3><br>
                        <p>KC International Airlines Co., Ltd (3Q) intended to use Phnom Penh International Airport as a base airport. 
                        We have reached an initial cooperation intention with Phnom Penh International Airport. KC Air plans to purchase 
                        more than 100 acres of land in the vicinity of the Phnom Penh International Airport, constructing headquarters, 
                        hangar, logistics and training base, material warehouse, special vehicle garage, staff quarters and a series of 
                        facilities. at the same time, we plan to establish simulators and cabin crew training base. providing the pilot 
                        simulation training and crew training service for the domestic and Southeast Asian countries. KC Air will be 
                        the first leading airline in Cambodia in term of technology as well as the high quality of service that 
                        we provide to passengers.</p>
                    </div>
                   

                    <div class="text-center">
                        <img src="{{ url('/img/contents/join-us.jpg') }}" style="border-radius:20px;" />
                    </div>
                </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right">
                <div class="service-menu">
                    <h4>Careers</h4>
                    <ul>
                        <li><a href="/careers/why-join-us" class="active">Why Join KC Airlines</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->
  
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('single-page');
    </script>
@endsection