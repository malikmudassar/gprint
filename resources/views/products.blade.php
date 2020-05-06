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
<section class="cube-portfolio1 text-center no-transition" id="portfolio">
    <div class="container">
        <!--Row-->
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="heading-area mx-570 mb-lg-4 mb-3">
                    <span class="sub-title"></span>
                    <h2 class="title">Printed products for every need 
                        </h2>
                    

                </div>
            </div>
        </div> -->
        <!--Row-->
        <div class="row wow fadeIn">
            <div class="col-md-12">

                <!--Portfolio Filters-->
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
               
                <!--Portfolio Items-->
               
            </div>
        </div>
    </div>
    <!--Products start-->
    <div class="conatainer-fulid productscontent">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5 text-center">
                <h1>Printed products for every need</h1>
                <p class="para">
                    We offer a wide range from products from note pads to banners, packaging, marketing collateral and signage. If it can be printed, we can accommodate it!
                </p>
                <p class="para">
                    We craft a tailored approach to each client’s needs assuring focus on brand consistency and overall life cycle cost reductions.
                </p>
                <p class="para">
                    Most standard order turnaround is 1 to 3 days, delivering 1-2 days after
                </p> 
                <a class="btn btn-slider btn-rounded btn-blue btn-hvr-white ml-3" data-animation-duration="500" data-fancybox data-src="#animatedModal"
                   href="javascript:void(0);">Get A Quote
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
            <div class="col-md-6">
                <img src="{{asset('public/agency/img/9.jpg') }}" alt="">
    
            </div>
            
        </div>
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
        <!--Products End-->
</section>

@endsection