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
                    <p class="para">Global Print Co. was founded 15 years ago to provide a locally driven, on-demand approach to printing and delivery worldwide.
Our printing network currently spans 65 countries, including providers in ten US states.
Our objective is to provide a consistent platform for achieving cost reduction by minimizing shipping costs, customs fees, and the administrative burden of managing multiple suppliers worldwide.

                        .</p></br>
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

<!--Services Start-->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="process-wrapp">
                    <span class="pro-step blue"><i aria-hidden="true" class="fas fa-folder-open"></i></span>
                    <h4 class="service-heading">Virtual Events</h4>
                </div>
            </div>
            <div class="col-md-2">
                <div class="process-wrapp">
                    <span class="pro-step midnight"><i aria-hidden="true" class="fas fa-code"></i></span>
                    <h4 class="service-heading">Global Sales Organizations</h4>
                </div>
            </div>
            <div class="col-md-2">
                <div class="process-wrapp">
                    <span class="pro-step purple"><i aria-hidden="true" class="fas fa-cog"></i></span>
                    <h4 class="service-heading">Business Cards</h4>
                </div>
            </div>
            <div class="col-md-2">
                <div class="process-wrapp">
                    <span class="pro-step purple"><i aria-hidden="true" class="fas fa-cog"></i></span>
                    <h4 class="service-heading">Distributors</h4>
                </div>
            </div>
            <div class="col-md-2">
                <div class="process-wrapp">
                    <span class="pro-step purple"><i aria-hidden="true" class="fas fa-cog"></i></span>
                    <h4 class="service-heading">Rebranding</h4>
                </div>
            </div>
            <div class="col-md-2">
                <div class="process-wrapp">
                    <span class="pro-step pink"><i aria-hidden="true" class="fas fa-edit"></i></span>
                    <h4 class="service-heading">Employer branding</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services End-->

<!--Counters Start-->
<section class="gradient-bg2" id="counters">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pl-lg-4 order-lg-2 wow fadeInRight">
                <div class="heading-area">
                    <span class="sub-title text-white">We are the One!</span>
                    <h2 class="title text-white">One-to-One Marketing <span class="js-rotating">stuff, idea</span>.
                    </h2>
                    <p class="para text-white">Direct mail marketing allows for a physical, tangible asset to be placed in the hands of your customers and team.
                        Our solution emphasized a regionally driven approach to production and delivery.
                        We utilize the local in-country mail system to maximize delivery and ROI.
                        From boxes, packaging, 3-D and 4-D lenticular printing let us generate innovative concepts and execute with precision!
                        </p>
                </div>
               <!-- <ul class="counter-list list-unstyled">
                    <li class="counter-item">
                        <i aria-hidden="true" class="fas fa-users text-white"></i>
                        <h6 class="counter-number text-white"><span class="count">500</span>+</h6>
                        <p class="sub-title text-white">Happy Clients</p>
                    </li>
                    <li class="counter-item">
                        <i aria-hidden="true" class="fas fa-list-alt text-white"></i>
                        <h6 class="counter-number text-white"><span class="count">1074</span>+</h6>
                        <p class="sub-title text-white">Lines Of Code</p>
                    </li>
                    <li class="counter-item">
                        <i aria-hidden="true" class="fas fa-award text-white"></i>
                        <h6 class="counter-number text-white"><span class="count">600</span>+</h6>
                        <p class="sub-title text-white">Project Completed</p>
                    </li>
                </ul> -->
            </div>
            <div class="col-lg-6 wow fadeInLeft">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="vector" src="{{ asset('public/agency/img/vector-art-3.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counters End-->



<!--Parallax Start-->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="heading-area">
                    <span class="sub-title">We are Global Printing Co.</span>
                    <h2 class="title"><span class="main-color js-rotating">Cloud Printing Network</span> and
                        Printing Solutions Solutions</h2>
                    <p class="para">Cloud online ordering portal for brand and control and asset management.
Distribution through major and local couriers ensuring reliability.
Full tracking and proof of delivery on each order.
</p><p>Hybrid-Print on Demand and Offset printing model to ensure the most cost-effective mode of production.</p><p>Centralized Global Ordering Control reduces the administrative hassles and cost of managing multiple printers in each market.</p><p>Easy to use website allows for immediate ordering and distribution across 65 Countries</p>
                    <a class="btn btn-large btn-rounded btn-blue btn-hvr-pink mt-3" href="javascript:void(0);">Learn
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
                    <img alt="image" src="{{ asset('public/agency/img/vector-art-4.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Parallax End-->

<!--Portfolio Start
<section class="cube-portfolio1 text-center no-transition" id="portfolio">
    <div class="container">
        <!--Row
        <div class="row">
            <div class="col-md-12">
                <div class="heading-area mx-570 mb-lg-4 mb-3">
                    <span class="sub-title"></span>
                    <h2 class="title">Printed products for every need 
                        </h2>
                    <p class="para">We handle a wide range of formats. Here are a few examples, let us know if you have any other needs.</p>
                </div>
            </div>
        </div>
        <!--Row
        <div class="row wow fadeIn">
            <div class="col-md-12">

                <!--Portfolio Filters
                <div class="cbp-l-filters-button" id="js-filters-mosaic-flat">

                    <div class="cbp-filter-item-active cbp-filter-item" data-filter="*">All</div>
                    <span class="text-blue">/</span>
                    <div class="cbp-filter-item" data-filter=".graphic">Brochures, booklets and magazines</div>
                    <span class="text-blue"> / </span>
                    <div class="cbp-filter-item" data-filter=".web-design">Flyers & leaflets
                    </div>
                    <span class="text-blue"> / </span>
                    <div class="cbp-filter-item" data-filter=".graphic">Business cards</div>
                    <span class="text-blue"> / </span>
                    <div class="cbp-filter-item" data-filter=".marketing">Posters</div>
                    <span class="text-blue"> / </span>
                    <div class="cbp-filter-item" data-filter=".graphic">Invitations & Cards</div>
                    <span class="text-blue"> / </span>
                    <div class="cbp-filter-item" data-filter=".graphic">Retractable Banner</div>
                    <span class="text-blue"> / </span>
                    <div class="cbp-filter-item" data-filter=".graphic"> Foamcore Sings</div>
                    <span class="text-blue"> / </span>
                    <div class="cbp-filter-item" data-filter=".graphic">Custom Vinyl Banners</div>
                </div>
               
                <!--Portfolio Items
               
            </div>
        </div>
    </div>
    <!--Products start
    <div class="conatainer-fulid productscontent">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('public/agency/img/1.jpg') }}" alt="">
    
            </div>
            <div class="col-md-1 "></div>
            <div class="col-md-5">
                <h1 >Brochures, booklets and magazines</h1>
                <p>Create product catalogues, magazines, annual reports, or company handbooks in A4
                    or Letter size. Choose between three different binding options. Naturally, you can also
                    create smaller booklets such as A5 booklets with 24 pages or less. Minimum order: 10.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5 text-center">
                <h1>Flyers & leaflets</h1>
                <p >A great way to promote an product, event or provide info about your company. Our flyers range vary from most common sizes: A6, A5, A4, Letter, 5×5 inches, 8×8 inches, 210×210 mm to your custom size.
                     Need something specific like flyer on cardstock with business card slits – just give us a call.</p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('public/agency/img/2.jpg') }}" alt="">
    
            </div>
            
        </div>
        <div class="row ">
            <div class="col-md-6">
                <img src="{{asset('public/agency/img/3.jpg') }}" alt="">
    
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 pmargin">
                <h1>Business cards</h1> 
                
                <p>Business cards commonly goes with 4 standard sizes depending on country: 3.5×2 inches, 55x85mm, 50x90mm, 55×90 mm. Any type of lamination can be applied. Round corners are available.
    
                </p>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5 pmargin">
                <h1> Posters
                </h1>
                <p>We do any size of poster you need from A4 to A0 or from letter to ledger size.</p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('public/agency/img/4.jpg') }}" alt="">
    
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('public/agency/img/5.jpg') }}" alt="">
    
            </div>
            <div class="col-md-1 "></div>
            <div class="col-md-5 pmargin ">
                <h1>Invitations & Cards</h1>
                <p>Sizes from:
                    Open size: A4 or letter Folded: 100×297 mm or 3.66×11 inches
                    To
                    Open size: 630x297mm or 25.5×11 inches Folded: 210x297mm or 8.5×11 inches
                    Custom sizes available</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5 pmargin">
                <h1> Retractable Banner</h1>
                        <p>Sizes: 24×80, 33×80, 48×80, 72×80 inches and 80×200, 85×200, 100×200, 200×200 cm</p >                        
            </div>
            <div class="col-md-6">
                <img src="{{asset('public/agency/img/6.jpg') }}" alt="">
    
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('public/agency/img/7.jpg') }}" alt="">
    
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 pmargin">
                <h1>Foamcore Sings</h1>
                <p>Any kind of signature is available with any size you need. Also, we can provide a hardware for standing as well.</p>
    
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5 pmargin">
                <h1> Custom Vinyl Banners</h1>
                        <p>Any size of custom vinyl banner from 2×2 feet to 40×40 feet.</p >                        
            </div>
            <div class="col-md-6">
                <img src="{{asset('public/agency/img/8.jpg') }}" alt="">
    
            </div>
            
        </div>
        </div>
        <!--Products End
</section>
<!--Portfolio End-->

<!--Testimonial Start-->
<section class="gradient-bg1 text-center" id="clients">
    <div class="container">

        <!--Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="heading-area mx-570 mb-5">
                    <h2 class="title text-white m-0">Some <span class="js-rotating">great, ideal</span> words from
                        our clients</h2>
                </div>
            </div>
        </div>

        <!--Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel wow zoomIn" id="testimonial-slider">
                    <div class="item">
                        <p class="para"> “Global Print Co.’s obsessive attention to detail and customer service is what sets them apart from other printers I have used over the years. I would highly recommend them.”</p>
                        <h5 class="name gradient-text1">Bradley Anderson- </h5>
                        <span class="designation">Director of Global Events</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">“If you're looking for a company that accomplishes quick, same day turnarounds while still maintaining a high quality product, there’s no better choice.” </p>
                        <h5 class="name gradient-text1">David Matterson- </h5>
                        <span class="designation">Global Creative Director</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">“We needed poster production with distribution to 30 countries. Through utilizing Global Print Co. we avoided the customs fees and international shipping costs of prior years’ jobs.”</p>
                        <h5 class="name gradient-text1">Sarah Anderson</h5>
                        <span class="designation">Marketing Manager</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>

        <!--Testimonial Thumbs-->
        <div class="owl-dots" id="testimonials-avatar">
            <!--data-position[top,right,bottom,left]-->
            <button class="owl-dot active" data-position="22%,auto,auto,5%">
                <img alt="image" src="{{asset('public/agency/img/avatar-1.png')}}"></button>
            <button class="owl-dot active" data-position="30%,auto,auto,16%">
                <img alt="image" src="{{asset('public/agency/img/avatar-2.png')}}"></button>
            <button class="owl-dot active" data-position="auto,auto,38%,7%">
                <img alt="image" src="{{asset('public/agency/img/avatar-3.png')}}"></button>
            <button class="owl-dot active" data-position="auto,auto,23%,18%">
                <img alt="image" src="{{asset('public/agency/img/avatar-7.png')}}"></button>
            <!--data-position[top,right,bottom,left]-->
            <button class="owl-dot active" data-position="20%,19%,auto,auto">
                <img alt="image" src="{{asset('public/agency/img/avatar-5.png')}}"></button>
            <button class="owl-dot active" data-position="28%,6%,auto,auto">
                <img alt="image" src="{{asset('public/agency/img/avatar-6.png')}}"></button>
            <button class="owl-dot active" data-position="40%,15%,auto,auto">
                <img alt="image" src="{{asset('public/agency/img/avatar-4.png')}}"></button>
            <button class="owl-dot active" data-position="auto,21%,22%,auto">
                <img alt="image" src="{{asset('public/agency/img/avatar-2.png')}}"></button>
        </div>
    </div>
</section>
<HR WIDTH="75%" SIZE="6" >
<!--Testimonial End-->
<!--Blog Start
<section class="bg-light" id="blog">
    <div class="container">
        <!--Row--
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mx-570 pb-lg-5 mb-5">
                    <span class="sub-title">We are megaone company</span>
                    <h2 class="title mb-0">Our <span class="alt-color js-rotating">latest blogs,recent news</span> will
                        keep
                        everyone updated</h2>
                </div>
            </div>
        </div>
        <!--Row--
        <div class="row wow fadeInUp">
            <!--News Item--
            <div class="col-lg-4">
                <div class="news-item">
                    <img alt="image" class="news-img" src="{{asset('public/agency/img/blog-news-1.jpg') }}">
                    <div class="news-text-box">
                        <span class="date main-color">October 29, 2020</span>
                        <a href="agency/blog-list.html"><h4 class="news-title">Web design is fun</h4></a>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                        <a class="author d-flex align-items-center" href="javascript:void(0);">
                            <img alt="image" class="author-img bg-blue" src="{{asset('public/agency/img/avatar-1.png')}}">
                            <h5 class="author-name">Hena Sword</h5>
                        </a>
                    </div>
                </div>
            </div>
            <!--News Item--
            <div class="col-lg-4">
                <div class="news-item">
                    <img alt="image" class="news-img" src="{{asset('public/agency/img/blog-news-2.jpg') }}">
                    <div class="news-text-box">
                        <span class="date main-color">October 29, 2020</span>
                        <a href="agency/blog-list.html"><h4 class="news-title">Future of websites</h4></a>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                        <a class="author d-flex align-items-center" href="javascript:void(0);">
                            <img alt="image" class="author-img bg-purple" src="{{asset('public/agency/img/avatar-2.png')}}">
                            <h5 class="author-name">David Villas</h5>
                        </a>
                    </div>
                </div>
            </div>
            <!--News Item--
            <div class="col-lg-4">
                <div class="news-item">
                    <img alt="image" class="news-img" src="{{asset('public/agency/img/blog-news-3.jpg') }}">
                    <div class="news-text-box">
                        <span class="date main-color">October 29, 2020</span>
                        <a href="javascript:void(0);"><h4 class="news-title">Digital marketing</h4></a>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                        <a class="author d-flex align-items-center" href="javascript:void(0);">
                            <img alt="image" class="author-img bg-pink" src="{{asset('public/agency/img/avatar-5.png')}}">
                            <h5 class="author-name">Jhon Walker</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog End-->
<!--Client Map--
<section class="gradient-bg2" id="client">
    <h2 class="d-none">hidden</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--Client Slider--
                <div class="owl-carousel partners-slider">
                    <!--Item--
                    <div class="logo-item"><img alt="client-logo" src="{{asset('public/agency/img/client-1.png')}}"></div>
                    <!--Item--
                    <div class="logo-item"><img alt="client-logo" src="{{asset('public/agency/img/client-2.png')}}"></div>
                    <!--Item--
                    <div class="logo-item"><img alt="client-logo" src="{{asset('public/agency/img/client-3.png')}}"></div>
                    <!--Item--
                    <div class="logo-item"><img alt="client-logo" src="{{asset('public/agency/img/client-4.png')}}"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Client End->

<!--Map Start--
<div class="p-0 gradient-bg2 map-area">
    <div class="container">
        <!--Map Initialize--
        <div class="full-map" id="map"></div>
    </div>
</div>
<!--Map End-->

<!--Frequently Ask Questions Start-->
<section class="faqbg">
<div class="container ">
    <div class="row fagmain">
        <div class="col-md-8 mb-3">
            <div class="section-title text-center wow zoomIn">
                <h1>Frequently Asked Questions</h1>
                <span></span>
                <p>Our Frequently Asked Questions here.</p>
            </div>
        </div>
    </div>
    <div class="row">				
        <div class="col-md-8">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is the average production turnaround time?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p>Most orders are produced within 1-2 days,delivering 1-2 days after.
                                Same day printing is absolutely possible if required. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is the order process?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body ">
                            <p>Online ordering portal which access can be requested by email our sales team at
                               <b> <a href="#">sales@globalprintco.com </a></b><br> Through our quote request or by emailing <b> <a href="#">sales@globalprintco.com</a></b> </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Is there a cost associated with utilizing your services?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>There are no set up fees or subscription costs.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Do you offer promotional items-giveaways?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            <p>Absolutely,Please email sales@globalprintco.com for a full catalog.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Do you offer warehousing capabilities?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                            <p>We do on a limited basis as we encourage printing on demand to reduce the cost of inventorying large quantities of printed materials in addition to shipping costs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingSixr">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                What shipping provides do you utilize?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                            <p>UPS, Fedex, DHL, USPS and local regional courier services in each market.
                                We find local couriers to be more cost effective and reliable globally. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingSeven">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Can you produce customs projects?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                        <div class="panel-body">
                            <p>Yes, We offer a full array of custom production capabilities.
                                From packaging to labels,translations,signage we strive to offer services fully encompassing the spectrum of communications requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingEight">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                How do you maintain consistent quality across the globe?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                        <div class="panel-body">
                            <p>We use HP Indigo and Xerox machines to provide continuity of color globally.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingNine">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Can you match our brand colors?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                        <div class="panel-body">
                            <p>Yes, We can certainly match you brand colors within 4 color process.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTen">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                Do you offer an online portal-digital storefront for ordering?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                        <div class="panel-body">
                            <p>Our online portal allows for users to place orders worldwide.
                                Clients can brand their storefronts, restrict users permission, allocate budgets and upload content. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingEleven">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                Do you have size limitations for Graphics-Wide Format printing?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                        <div class="panel-body">
                            <p>We can accommodate up to 40ft x 40ft on a variety of substrates.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTweleve">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTweleve" aria-expanded="false" aria-controls="collapseTweleve">
                                Do you offer Pre-Press, Graphic Design and Translation capabilities?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTweleve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTweleve">
                        <div class="panel-body">
                            <p>We certainly do at very economical rates.</p>
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThirteen">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                Can I pay for an order in my local currency?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                        <div class="panel-body">
                            <p>Yes, we support 25 different currencies and can provide invoice to local entities in local currency if needed. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
</div>
</section>
  <!--Frequently Ask Questions End-->
<!--Contact Start-->
<section class="contact-us" id="contact">

    <div class="container">

        <div class="row align-items-top">

            <div class="col-lg-5 order-lg-2 wow fadeInRight">
                <div class="contact-detail">
                    <div class="contact-dots" data-dots=""></div>
                    <!--Heading-->
                    <div class="heading-area pb-5">
                        <h2 class="title mt-0 pb-1">Our Location</h2>
                        <p class="para"></p>
                    </div>

                    <!--Address-->
                    <ul class="address list-unstyled">
                        <li>
                            <span class="address-icon gradient-text2"><i aria-hidden="true"
                                                                         class="fas fa-map-marker-alt"></i></span>
                            <span class="address-text">85 Broad Street New York, NY 10004</span>
                        </li>
                        <li>
                            <span class="address-icon gradient-text2"><i aria-hidden="true"
                                                                         class="fas fa-phone-volume"></i></span>
                            <span class="address-text"><a class="mr-3" href="javascript:void(0)">+1  845-402-6069</a><a
                                    href="javascript:void(0)"></a></span>
                        </li>
                        <li>
                            <span class="address-icon gradient-text2"><i aria-hidden="true"
                                                                         class="fas fa-paper-plane"></i></span>
                            <span class="address-text"><a class="mr-3 alt-color" href="javascript:void(0)">sales@globalprintco.com</a><a
                                    class="mr-3 alt-color" href="javascript:void(0)"></a></span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 mt-4 pt-3 mt-lg-0 pt-lg-0 wow fadeInLeft">
                <!--Heading-->
                <div class="heading-area pb-2">
                    <h2 class="title mt-0">Get In Touch</h2>
                </div>
                <!--Contact Form-->
                <form class="contact-form" action="{{route('contact')}}" method="post">
                    <div class="row">
                        <!--Result-->
                        <div class="col-12" id="result"></div>

                        <!--Left Column-->
                        <div class="col-md-5">
                            <div class="form-group">
                                <input class="form-control" id="your_name" name="name" placeholder="Name" required=""
                                       type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="your_email" name="email" placeholder="Email" required=""
                                       type="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="subject" name="subject" placeholder="Subject" required=""
                                       type="text">
                            </div>
                        </div>

                        <!--Right Column-->
                        <div class="col-md-7">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message"
                                          placeholder="Message"></textarea>
                            </div>
                            
                        </div>
                        @csrf
                        <!--Button-->
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-large btn-rounded btn-purple btn-hvr-blue d-block mt-4" 
                               id="submit_btn">Send Message</button>
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
                </form>
            </div>

        </div>

    </div>

</section>
<!--Contact End-->

@endsection