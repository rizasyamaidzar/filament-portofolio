@extends('public.index')
@section('content')
    <!-- START ABOUT DESIGN AREA -->
    <section id="about" class="about-single-area innerpage-single-area">
        <div class="container">
            <div class="row">
                <!-- START ABOUT IMAGE DESIGN AREA -->
                <div class="col-lg-4">
                    <div class="about-image-part wow fadeInUp delay-0-3s">
                        <img src="assets/images/profil.png" alt="About Me" />
                    </div>
                </div>
                <!-- / END ABOUT IMAGE DESIGN AREA -->
                <!-- START ABOUT TEXT DESIGN AREA -->
                <div class="col-lg-8">
                    <div class="about-content-part wow fadeInUp delay-0-2s">
                        <h2>
                            I’m Riza Afif Syamaidzar
                        </h2>
                        <p>Someone who has the ability and experience in the field of Full Stack Web Developer & Backend
                            Engineer proven by freelance, internships and several completed projects. Interest in the field
                            makes me active in various organizations, collaborations. Being active there makes me have high
                            initiative, able to adapt quickly to technological developments and the ability to analyze
                            complex problems and find effective and efficient solutions. During college I was also active in
                            various organizations, committees, and volunteers.
                        </p>
                        <div class="hero-btns">
                            <a href="/contact" class="theme-btn">Get In touch<i class="ri-mail-send-line"></i></a>
                        </div>
                    </div>
                </div>
                <!-- / END ABOUT TEXT DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END ABOUT DESIGN AREA -->
    <!-- START RESUME EXPERIENCE DESIGN AREA -->
    <section id="resume" class="resume-area">
        <div class="container">
            <div class="resume-items">
                <div class="row">
                    <!-- START EXPERIENCE RESUME DESIGN AREA -->
                    <div class="col-xl-6 col-md-6">
                        <div class="single-resume">
                            <h2>Experience</h2>
                            <div class="experience-list">
                                <!-- START SINGLE RESUME DESIGN AREA -->
                                @foreach ($experiences as $experience)
                                    <div class="resume-item wow fadeInUp delay-0-3s">
                                        <div class="icon">
                                            <i class="ri-book-line"></i>
                                        </div>
                                        <div class="content">
                                            <span class="years">{{ $experience['tahun'] }}</span>
                                            <h4>{{ $experience['nama'] }}</h4>
                                            <span class="company"> {{ $experience['role'] }} </span>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- / END SINGLE RESUME DESIGN AREA -->
                            </div>
                        </div>
                    </div>
                    <!-- // END EXPERIENCE RESUME DESIGN AREA -->
                    <!-- START EDUCATION RESUME DESIGN AREA -->
                    <div class="col-xl-6 col-md-6">
                        <div class="experience-list">
                            <div class="single-resume">
                                <h2>Education</h2>
                                <!-- START SINGLE RESUME DESIGN AREA -->
                                @foreach ($educations as $education)
                                    <div class="resume-item wow fadeInUp delay-0-3s">
                                        <div class="icon">
                                            <i class="ri-book-line"></i>
                                        </div>
                                        <div class="content">
                                            <span class="years">{{ $education['tahun'] }}</span>
                                            <h4>{{ $education['nama'] }}</h4>
                                            <span class="company">{{ $education['jurusan'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- / END SINGLE RESUME DESIGN AREA -->
                            </div>
                        </div>
                    </div>
                    <!-- // END EDUCATION RESUME DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END RESUME EXPERIENCE DESIGN AREA -->
    <!-- START TESTIMONIALS DESIGN AREA -->
    {{-- <section class="testimonials-area">
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
                            <div class="testimonial-item wow fadeInUp delay-0-3s">
                                <div class="author">
                                    <img src="assets/images/testimonials/author1.jpg" alt="Author" />
                                </div>
                                <div class="text">
                                    Financial planners help people to knowledge in about how to
                                    invest and in save their moneye the most efficient way eve plan
                                    ners help people tioniio know ledige in about how.
                                </div>
                                <div class="testi-des">
                                    <h5>Zonathon Doe</h5>
                                    <span>CEO & Founder X</span>
                                </div>
                            </div>
                            <!-- / END SINGLE TESTIMONIALS DESIGN AREA -->
                            <!-- START SINGLE TESTIMONIALS DESIGN AREA -->
                            <div class="testimonial-item wow fadeInUp delay-0-4s">
                                <div class="author">
                                    <img src="assets/images/testimonials/author2.jpg" alt="Author" />
                                </div>
                                <div class="text">
                                    Financial planners help people to knowledge in about how to
                                    invest and in save their moneye the most efficient way eve plan
                                    ners help people tioniio know ledige in about how.
                                </div>
                                <div class="testi-des">
                                    <h5>Liana Marie</h5>
                                    <span>Lead Designer Meta</span>
                                </div>
                            </div>
                            <!-- / END SINGLE TESTIMONIALS DESIGN AREA -->
                            <!-- START SINGLE TESTIMONIALS DESIGN AREA -->
                            <div class="testimonial-item wow fadeInUp delay-0-2s">
                                <div class="author">
                                    <img src="assets/images/testimonials/author1.jpg" alt="Author" />
                                </div>
                                <div class="text">
                                    Financial planners help people to knowledge in about how to
                                    invest and in save their moneye the most efficient way eve plan
                                    ners help people tioniio know ledige in about how.
                                </div>
                                <div class="testi-des">
                                    <h5>Zonathon Doe</h5>
                                    <span>CEO & Founder X</span>
                                </div>
                            </div>
                            <!-- / END SINGLE TESTIMONIALS DESIGN AREA -->
                            <!-- START SINGLE TESTIMONIALS DESIGN AREA -->
                            <div class="testimonial-item wow fadeInUp delay-0-4s">
                                <div class="author">
                                    <img src="assets/images/testimonials/author2.jpg" alt="Author" />
                                </div>
                                <div class="text">
                                    Financial planners help people to knowledge in about how to
                                    invest and in save their moneye the most efficient way eve plan
                                    ners help people tioniio know ledige in about how.
                                </div>
                                <div class="testi-des">
                                    <h5>Liana Marie</h5>
                                    <span>Lead Designer Meta</span>
                                </div>
                            </div>
                            <!-- / END SINGLE TESTIMONIALS DESIGN AREA -->
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
    </section> --}}
    <!-- / END TESTIMONIALS DESIGN AREA -->
    <!-- START CALL TO ACTION DESIGN AREA -->
    @include('public.partials.caption')
    <!--  // END CALL TO ACTION DESIGN AREA -->
@endsection
