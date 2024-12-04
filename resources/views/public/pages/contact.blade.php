@extends('public.index')
@section('content')
    <!-- START CONTACT DESIGN AREA -->
    <section id="contact" class="contact-area innerpage-single-area">
        <div class="container">
            <div class="container-inner">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title text-center wow fadeInUp delay-0-2s">
                            <p>contact</p>
                            <h2>Get in Touch with Me!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-content-part  wow fadeInUp delay-0-2s">
                            <!-- START CONTACT SINGLEDESIGN AREA -->
                            <div class="single-contact wow fadeInUp" data-wow-delay=".2s">
                                <div class="contact-icon">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <h2>our office:</h2>
                                <p>Jurain,Dhaka Bangladesh</p>
                            </div>
                            <!-- / END CONTACT SINGLEDESIGN AREA -->
                            <!-- START CONTACT SINGLEDESIGN AREA -->
                            <div class="single-contact wow fadeInUp" data-wow-delay=".4s">
                                <div class="contact-icon">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <h2>contact number:</h2>
                                <p>+1234321321</p>
                            </div>
                            <!-- / END CONTACT SINGLEDESIGN AREA -->
                            <!-- START CONTACT SINGLEDESIGN AREA -->
                            <div class="single-contact wow fadeInUp" data-wow-delay=".6s">
                                <div class="contact-icon">
                                    <i class="ri-mail-line"></i>
                                </div>
                                <h2>Email us:</h2>
                                <p>websitename@mail.com</p>
                            </div>
                            <!-- / END CONTACT SINGLEDESIGN AREA -->
                        </div>
                    </div>
                    <!-- START CONTACT FORM DESIGN AREA -->
                    <div class="col-lg-8">
                        <div class="contact-form contact-form-area wow fadeInUp delay-0-4s">
                            <form id="contactForm" class="contactForm" name="contactForm"
                                action="assets/php/form-process.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                value="" placeholder="Steve Milner" required=""
                                                data-error="Please enter your Name" />
                                            <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                value="" placeholder="hello@websitename.com" required=""
                                                data-error="Please enter your Email" />
                                            <label for="email" class="for-icon"><i class="far fa-envelope"></i></label>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Your Message</label>
                                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Your message"
                                                required="" data-error="Please Write your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn">
                                                Send Me Message <i class="ri-mail-line"></i>
                                            </button>
                                            <div id="msgSubmit" class="hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- / END CONTACT FORM DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END CONTACT DESIGN AREA -->
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
@endsection
