<!--Header Start-->
<header class="cursor-light">

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-gradient nav-icon alt-font "   style="height:100px;">
        <div class="container">
            <a class="logo link scroll" href="javascript:void(0)" title="Logo">
                <!--Logo Default-->
                <img alt="logo" class="logo-dark default " src="{{asset('public/agency/img/logo-white.png')}}" >
            </a>


            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="agency">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link  " href="{{route('home')}}">Home</a>
                    <a class="nav-link " href="{{route('about')}}">About Us</a>
                    <a class="nav-link" href="{{route('products')}}">Our Products</a>
                    <a class="nav-link link scroll" href="#clients">Clients</a>
                    <a class="nav-link link scroll" href="#blog">Our Blog</a>
                    <a class="nav-link link scroll" href="#contact">Contact Us</a>
                    <span class="menu-line"><i aria-hidden="true" class="fa fa-angle-down"></i></span>
                </div>
                <a class="btn btn-medium btn-rounded btn-transparent-white btn-hvr-white ml-3" data-animation-duration="500" data-fancybox data-src="#animatedModal"
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

            <!--Menu Button-->
            <button class="fullnav-toggler link" id="full-menu-1" type="button">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

            <!--Slider Social-->
            <div class="slider-social">
                <ul class="list-unstyled">
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                            aria-hidden="true" class="fab fa-facebook-f"></i></a></li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                            aria-hidden="true" class="fab fa-instagram"></i></a></li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                            aria-hidden="true" class="fab fa-twitter"></i></a></li>
                </ul>
            </div>

        </div>
    </nav>

    <!--Full menu-->
    <div class="nav-holder main style-2 alt-font">

        <!--Menu Button-->
        <button class="fullnav-close link" type="button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>

        <div class="container">
            <div class="shape-left">
                <nav class="navbar full-menu-navigation left">
                    <ul class="list-unstyled">
                        <li><a class="link scroll" href="{{route('home')}}">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Home</span>
                        </a></li>
                        <li><a class="link scroll" href="{{route('about')}}">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">About</span>
                        </a></li>
                        <li><a class="link scroll" href="{{route('products')}}">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Products</span>
                        </a></li>
                        <li><a class="link scroll" href="#portfolio">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Work</span>
                        </a></li>
                        <li><a class="link scroll" href="#clients">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Clients</span>
                        </a></li>
                        <li><a class="link scroll" href="#blog">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Blog</span>
                        </a></li>
                        <li><a class="link scroll" href="#contact">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Contact</span>
                        </a></li>
                    </ul>
                    <span class="full-menu-dot" style="transform: scale(0);"></span>
                </nav>
                <img alt="shape" src="{{asset('public/agency/img/shape-8.png')}}">
            </div>
            <div class="shape-right">
                <div class="full-menu-detail hide-cursor">
                    <h6 class="title">Press Contact</h6>
                    <p><i class="fas fa-user-alt"></i>85 Broad Street New York, NY 10004</p>
                    <p><i class="fas fa-mobile-alt"></i>+1 845-402-6069</p>
                    <p><i class="fas fa-envelope"></i>sales@globalprintco.com</p>
                </div>
                <img alt="shape" src="{{asset('public/agency/img/shape-7.png')}}">
            </div>
        </div>
    </div>

    <!--Get Quote Model Popup-->
    <div class="animated-modal hidden quote-content" id="animatedModal">
        <!--Heading-->
        <div class="heading-area pb-2 mx-570">
            <span class="sub-title"></span>
            <h2 class="title mt-2">  <span class="alt-color js-rotating">think Global, Work  local</span></h2>
        </div>
        <!--Contact Form-->
        <form class="contact-form" action="{{route('quote')}}" method="post">
            <div class="row">
                <!--Result-->
                <div class="col-12" id="quote_result"></div>

                <!--Left Column-->
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="quote_name" name="name" placeholder="Name" required=""
                               type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_contact" name="contact" placeholder="Contact #" required=""
                               type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_type" name="type" placeholder="Project type" required=""
                               type="text">
                    </div>
                </div>

                <!--Right Column-->
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="quote_email" name="email" placeholder="Email" required=""
                               type="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_address" name="address" placeholder="City / Country"
                               required="" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_budget" name="budget" placeholder="Budget" required=""
                               type="text">
                    </div>
                </div>

                <!--Full Column-->
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" id="quote_message"
                                  name="message" placeholder="Please explain your project in detail."></textarea>
                    </div>
                </div>

                <!--Button-->
                <div class="col-md-12">

                    <div class="form-check">
                        <label class="checkbox-lable">Contact by phone ins preffered
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-large btn-rounded btn-blue btn-hvr-pink" 
                       id="quote_submit_btn">Send Message
                        <div class="btn-hvr-setting">
                            <ul class="btn-hvr-setting-inner">
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                            </ul>
                        </div>
                    </button>
                </div>

            </div>
        </form>
    </div>

</header>
<!--Header End-->