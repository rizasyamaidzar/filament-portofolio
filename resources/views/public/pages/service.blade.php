@extends('public.index')
@section('content')
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
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item wow fadeInUp delay-0-2s">
                                <i class="{{ $service['icon'] }}"></i>
                                <h4>{{ $service['nama'] }}</h4>
                                <p>{{ $service['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                    <!-- END SINGLE SERVICE DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END SERVICE DESIGN AREA -->
    <!-- START Testimoni DESIGN AREA -->
    <section class="testimonials-area">
        <div class="container">
            <div class="container-inner">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title text-center wow fadeInUp delay-0-2s">
                            <p>Testinomials</p>
                            <h2>What clients say!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonials-wrap">
                            <!-- START SINGLE TESTIMONIALS DESIGN AREA -->
                            @foreach ($testimonies as $testimoni)
                                <div class="testimonial-item wow fadeInUp delay-0-3s">
                                    <div class="author">
                                        <img src="assets/images/testimonials/author1.jpg" alt="Author" />
                                    </div>
                                    <div class="text">
                                        {{ $testimoni['desc'] }}
                                    </div>
                                    <div class="testi-des">
                                        <h5>{{ $testimoni['nama'] }}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="slider-arrows wow fadeInUp delay-0-6s text-center pt-40">
                            <button class="testimonial-prev">
                                <i class="ri-arrow-left-s-line"></i>
                            </button>
                            <button class="testimonial-next">
                                <i class="ri-arrow-right-s-line"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END Testimoni DESIGN AREA -->
    <!-- START PRICING DESIGN AREA -->
    {{-- <section class="pricing-area">
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
    </section> --}}
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
