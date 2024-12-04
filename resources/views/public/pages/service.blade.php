@extends('public.index')
@section('content')
    <!-- START MENU DESIGN AREA -->
    <header class="main-header">
        <div class="header-upper">
            <div class="container">
                <div class="header-inner d-flex align-items-center">
                    <!-- START LOGO DESIGN AREA -->
                    <div class="logo-outer">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo.png" alt="Logo" title="Logo" /></a>
                        </div>
                    </div>
                    <!-- / END LOGO DESIGN AREA -->
                    <!-- START NAV DESIGN AREA -->
                    <div class="nav-outer clearfix mx-auto">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <div class="mobile-logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo.png" alt="Logo" title="Logo" />
                                    </a>
                                </div>
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                    data-bs-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="navigation onepage clearfix">
                                    <li><a class="nav-link-click" href="index.html">Home</a></li>
                                    <li><a class="nav-link-click" href="about.html">about</a></li>
                                    <li><a class="nav-link-click" href="service.html">services</a></li>
                                    <li><a class="nav-link-click" href="works.html">works</a></li>
                                    <li><a class="nav-link-click" href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- / END NAV DESIGN AREA -->
                    </div>
                    <div class="menu-btns">
                        <a href="contact.html" class="theme-btn">Hire Me<i class="ri-shake-hands-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END MENU DESIGN AREA -->
    <!-- START SERVICE DESIGN AREA -->
    <section id="services" class="services-area innerpage-single-area">
        <div class="container">
            <div class="container-inner">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title text-center wow fadeInUp delay-0-2s">
                            <p>Services</p>
                            <h2>Quality Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- START SINGLE SERVICE DESIGN AREA -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp delay-0-2s">
                            <i class="ri-global-fill"></i>
                            <h4>Brand Identity Design</h4>
                            <p>Bentos gives you the blocks & kits you need to create a true website within minutes.</p>
                        </div>
                    </div>
                    <!-- / END SINGLE SERVICE DESIGN AREA -->
                    <!-- START SINGLE SERVICE DESIGN AREA -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp delay-0-4s">
                            <i class="ri-quill-pen-line"></i>
                            <h4>Website Design</h4>
                            <p>Bentos gives you the blocks & kits you need to create a true website within minutes.</p>
                        </div>
                    </div>
                    <!-- / END SINGLE SERVICE DESIGN AREA -->
                    <!-- START SINGLE SERVICE DESIGN AREA -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp delay-0-6s">
                            <i class="ri-pantone-fill"></i>
                            <h4>Application Design</h4>
                            <p>Bentos gives you the blocks & kits you need to create a true website within minutes.</p>
                        </div>
                    </div>
                    <!-- / END SINGLE SERVICE DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END SERVICE DESIGN AREA -->
    <!-- START PRICING DESIGN AREA -->
    <section class="pricing-area">
        <div class="container">
            <div class="container-inner">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title text-center wow fadeInUp delay-0-2s">
                            <p>Pricing</p>
                            <h2>Flexible Pricing Plan</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- START SINGLE PRICING DESIGN AREA -->
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item wow fadeInUp delay-0-2s">
                            <div class="pricing-header">
                                <h4 class="title">Basic</h4>
                                <p class="save-percent">
                                    Have design ready to build? <br>
                                    or small budget
                                </p>
                                <span class="price">15</span>
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="ri-arrow-right-line"></i>Need your wireframe</li>
                                    <li><i class="ri-arrow-right-line"></i>Design with Figma, Framer</li>
                                    <li><i class="ri-arrow-right-line"></i>Product Design</li>
                                    <li class="unable"><i class="ri-arrow-right-line"></i>Digital Marketing</li>
                                    <li class="unable"><i class="ri-arrow-right-line"></i>Custom Support</li>
                                </ul>
                                <a href="#" class="theme-btn">Order Now <i class="ri-shopping-basket-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- / END SINGLE PRICING DESIGN AREA -->
                    <!-- START SINGLE PRICING DESIGN AREA -->
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item wow fadeInUp delay-0-4s">
                            <div class="pricing-header">
                                <h4 class="title">Standard</h4>
                                <p class="save-percent">
                                    Not have any design? <br>
                                    Leave its for me
                                </p>
                                <span class="price">59</span>
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="ri-arrow-right-line"></i>Website Design</li>
                                    <li><i class="ri-arrow-right-line"></i>Mobile Apps Design</li>
                                    <li><i class="ri-arrow-right-line"></i>Product Design</li>
                                    <li><i class="ri-arrow-right-line"></i>Digital Marketing</li>
                                    <li class="unable"><i class="ri-arrow-right-line"></i>Custom Support</li>
                                </ul>
                                <a href="#" class="theme-btn">Order Now <i class="ri-shopping-basket-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- / END SINGLE PRICING DESIGN AREA -->
                    <!-- START SINGLE PRICING DESIGN AREA -->
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item wow fadeInUp delay-0-4s">
                            <div class="pricing-header">
                                <h4 class="title">Standard</h4>
                                <p class="save-percent">
                                    Not have any design? <br>
                                    Leave its for me
                                </p>
                                <span class="price">59</span>
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="ri-arrow-right-line"></i>Website Design</li>
                                    <li><i class="ri-arrow-right-line"></i>Mobile Apps Design</li>
                                    <li><i class="ri-arrow-right-line"></i>Product Design</li>
                                    <li><i class="ri-arrow-right-line"></i>Digital Marketing</li>
                                    <li class="unable"><i class="ri-arrow-right-line"></i>Custom Support</li>
                                </ul>
                                <a href="#" class="theme-btn">Order Now <i class="ri-shopping-basket-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- / END SINGLE PRICING DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END PRICING DESIGN AREA -->
    <!-- START CALL TO ACTION DESIGN AREA -->
    <section class="call-to-action-area">
        <div class="container">
            <div class="row">
                <!-- START ABOUT TEXT DESIGN AREA -->
                <div class="col-lg-12">
                    <div class="about-content-part call-to-action-part wow fadeInUp delay-0-2s text-center">
                        <h2>Are You Ready to kickstart your project with a touch of magic?</h2>
                        <p>Reach out and let's make it happen ✨. I'm also available for full-time or Part-time opportunities
                            to push the boundaries of design and deliver exceptional work.</p>
                        <div class="hero-btns">
                            <a href="contact.html" class="theme-btn">Let's Talk <i class="ri-download-line"></i></a>
                        </div>
                    </div>
                </div>
                <!-- / END ABOUT TEXT DESIGN AREA -->
            </div>
        </div>
    </section>
    <!--  // END CALL TO ACTION DESIGN AREA -->
@endsection
