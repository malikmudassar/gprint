@extends('layouts.master')

@section('content')

<!-- Preloader -->
<div class="preloader">
    <div class="box"></div>
</div>

<!-- Ink Transition -->
<div class="cd-transition-layer visible opening">
    <div class="bg-layer"></div>
</div>
<!--/Preloader -->

@include('layouts.header')
@include('layouts.slider')
<!--About Us-->
<section class="pb-0" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="heading-area">
                    <span class="sub-title"> About Us</span>
                    <h2 class="title">Cloud driven <span class="alt-color js-rotating"> printing</span> </h2>
                    <p class="para">Global Print Co. was founded 15 years ago to provide a locally driven, on-demand approach to printing and delivery worldwide.</p>
                    <p class="para">Our printing network currently spans 65 countries, including providers in ten US states.</p>
                    <p class="para">Our objective is to provide a consistent platform for achieving cost reduction by minimizing shipping costs, customs fees, and the administrative burden of managing multiple suppliers worldwide.</p></br>
						<p>Looking to solve a challenge? We have a solution!</p>
                    <a class="btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" href="javascript:void(0);">Learn
                        More
                        <div class="btn-hvr-setting">
                            <ul class="btn-hvr-setting-inner">
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="vector" src="{{asset('public/agency/img/vector-art-2.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Us End-->

@endsection