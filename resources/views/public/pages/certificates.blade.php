@extends('public.index')
@section('content')
    <!-- START PORTFOLIO DESIGN AREA -->
    <section id="portfolio" class="projects-area innerpage-single-area">
        <div class="container">
            <div class="container-inner">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title text-center wow fadeInUp delay-0-2s">
                            <h2>Certifacates</h2>
                            <p>Check out some of my design projects, meticulously crafted with love and dedication,
                                each one reflecting the passion and soul I poured into every detail.</p>
                        </div>
                    </div>
                </div>
                <ul class="project-filter filter-btns-one justify-content-left pb-15 wow fadeInUp delay-0-2s">
                    <li data-filter="*" class="current">Show All</li>
                    @foreach ($categories as $category)
                        <li data-filter=".{{ $category->id }}">{{ $category->nama }}</li>
                        {{-- <li data-filter=".design">Design</li>
                    <li data-filter=".branding">Branding</li>
                    <li data-filter=".marketing">Marketing</li>
                    <li data-filter=".game">Game</li> --}}
                    @endforeach
                </ul>
                <div class="row project-masonry-active">
                    <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                    @foreach ($categories as $category)
                        @foreach ($category->categories as $certificate)
                            <div class="col-lg-4 col-md-6 item {{ $category->id }}">
                                <div class="project-item style-two wow fadeInUp delay-0-3s">
                                    <div class="project-image">
                                        <img src="{{ asset($certificate->foto) }}" alt="{{ $category->nama }}">
                                        <a href="single-project.html" class="details-btn"><i
                                                class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                    <div class="project-content">
                                        <span class="sub-title">Branding</span>
                                        <h3>Mobile Application Design</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                    <!-- START PORTFOLIO DESIGN AREA -->
                    <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                    <div class="col-lg-4 col-md-6 item design marketing graphics">
                        <div class="project-item style-two wow fadeInUp delay-0-4s">
                            <div class="project-image">
                                <img src="assets/images/projects/work2.jpg" alt="Project">
                                <a href="https://www.youtube.com/watch?v=qZEPs3vmYB4" class="details-btn popup-youtube"><i
                                        class="ri-arrow-right-up-line"></i></a>
                            </div>
                            <div class="project-content">
                                <span class="sub-title">Design</span>
                                <h3>Website Makeup Design</h3>
                            </div>
                        </div>
                    </div>
                    <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
                    <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                    <div class="col-lg-4 col-md-6 item game graphics">
                        <div class="project-item style-two wow fadeInUp delay-0-5s">
                            <div class="project-image">
                                <img src="assets/images/projects/work3.jpg" alt="Project">
                                <a href="assets/images/projects/work3.jpg" class="details-btn work-popup"><i
                                        class="ri-arrow-right-up-line"></i></a>
                            </div>
                            <div class="project-content">
                                <span class="sub-title">Graphics</span>
                                <h3>Brand Identity and Motion Design</h3>
                            </div>
                        </div>
                    </div>
                    <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
                    <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                    <div class="col-lg-4 col-md-6 item design game">
                        <div class="project-item style-two wow fadeInUp delay-0-6s">
                            <div class="project-image">
                                <img src="assets/images/projects/work4.jpg" alt="Project">
                                <a href="assets/images/projects/work4.jpg" class="details-btn work-popup"><i
                                        class="ri-arrow-right-up-line"></i></a>
                            </div>
                            <div class="project-content">
                                <span class="sub-title">Game</span>
                                <h3>Mobile Application Design</h3>
                            </div>
                        </div>
                    </div>
                    <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
                    <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                    <div class="col-lg-4 col-md-6 item branding game">
                        <div class="project-item style-two wow fadeInUp delay-0-7s">
                            <div class="project-image">
                                <img src="assets/images/projects/work5.jpg" alt="Project">
                                <a href="assets/images/projects/work5.jpg" class="details-btn work-popup"><i
                                        class="ri-arrow-right-up-line"></i></a>
                            </div>
                            <div class="project-content">
                                <span class="sub-title">Branding</span>
                                <h3>Application Design</h3>
                            </div>
                        </div>
                    </div>
                    <!-- START PORTFOLIO DESIGN AREA -->
                    <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                    <div class="col-lg-4 col-md-6 item design marketing graphics">
                        <div class="project-item style-two wow fadeInUp delay-0-8s">
                            <div class="project-image">
                                <img src="assets/images/projects/work6.jpg" alt="Project">
                                <a href="https://www.youtube.com/watch?v=qZEPs3vmYB4" class="details-btn popup-youtube"><i
                                        class="ri-arrow-right-up-line"></i></a>
                            </div>
                            <div class="project-content">
                                <span class="sub-title">Design</span>
                                <h3>Website Development</h3>
                            </div>
                        </div>
                    </div>
                    <!-- / END SINGLE PORTFOLIO DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- // END PORTFOLIO DESIGN AREA -->
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
