@extends('public.index')
@section('content')
    <!-- START ABOUT DESIGN AREA -->
    <section id="about" class="about-area">
        <div class="container">
            <div class="row">
                <!-- START ABOUT IMAGE DESIGN AREA -->
                <div class="col-lg-4">
                    <div class="about-image-part wow fadeInUp delay-0-3s">
                        <img src="assets/images/profil.png" alt="About Me" />
                        <h2>{{ $nama }}</h2>
                        <p>{{ $role }}</p>
                        <div class="about-social text-center">
                            <ul>
                                <li><a href="https://github.com/rizasyamaidzar" target="_blank"><i
                                            class="ri-github-line"></i></a>
                                <li><a href="https://www.linkedin.com/in/rizaafifsyamaidzar/" target="_blank"><i
                                            class="ri-linkedin-fill"></i></a></li>
                                <li><a href="https://www.instagram.com/rizaafifs_/" target="_blank"><i
                                            class="ri-instagram-fill"></i></a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- / END ABOUT IMAGE DESIGN AREA -->
                <!-- START ABOUT TEXT DESIGN AREA -->
                <div class="col-lg-8">
                    <div class="about-content-part wow fadeInUp delay-0-2s">
                        <p>Hello There!</p>
                        <h2>
                            {{ $nama }}, {{ $role }}
                        </h2>
                        <div class="adress-field">
                            <ul>
                                <li><i class="ri-circle-fill"></i>Available for Work</li>
                            </ul>
                        </div>
                        <div class="hero-btns">
                            <a href="contact.html" class="theme-btn">Download CV <i class="ri-download-line"></i></a>
                        </div>
                    </div>
                    <div class="about-content-part-bottom wow fadeInUp delay-0-2s">
                        <h2>Tools</h2>
                        <div class="company-list">
                            <div class="scroller" data-direction="left" data-speed="slow">
                                <div class="scroller__inner">
                                    @foreach ($tools as $tool)
                                        <img src="{{ $tool }}" alt="" />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / END ABOUT TEXT DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END ABOUT DESIGN AREA -->
    <!-- START CALL TO ACTION DESIGN AREA -->
    <section class="call-to-action-area">
        <div class="container">
            <div class="row">
                <!-- START ABOUT TEXT DESIGN AREA -->
                <div class="col-lg-12">
                    <div class="call-to-action-part wow fadeInUp delay-0-2s text-center">
                        <h2>i'm RIZA AFIF SYAMAIDZAR</h2>
                        <p>full-stack web developer skilled in creating seamless, engaging web applications. Combining
                            front-end and back-end expertise, I transform ideas into functional, visually appealing digital
                            solutions</p>
                    </div>
                </div>
                <!-- / END ABOUT TEXT DESIGN AREA -->
            </div>
        </div>
    </section>
    <!--  // END CALL TO ACTION DESIGN AREA -->
    <!-- START PORTFOLIO DESIGN AREA -->
    <section id="portfolio" class="projects-area">
        <div class="container">
            <div class="container-inner">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title text-center wow fadeInUp delay-0-2s">
                            <h2>Works & Projects</h2>
                        </div>
                    </div>
                </div>
                <ul class="project-filter filter-btns-one justify-content-left pb-15 wow fadeInUp delay-0-2s">
                    <li data-filter="*" class="current">Show All</li>
                    <li data-filter=".design">Design</li>
                    <li data-filter=".branding">Branding</li>
                    <li data-filter=".marketing">Marketing</li>
                    <li data-filter=".game">Game</li>
                </ul>
                <div class="row project-masonry-active">
                    <!-- START SINGLE PORTFOLIO DESIGN AREA -->
                    <div class="col-lg-4 col-md-6 item branding game">
                        <div class="project-item style-two wow fadeInUp delay-0-3s">
                            <div class="project-image">
                                <img src="assets/images/projects/work1.jpg" alt="Project">
                                <a href="single-project.html" class="details-btn"><i class="ri-arrow-right-up-line"></i></a>
                            </div>
                            <div class="project-content">
                                <span class="sub-title">Branding</span>
                                <h3>Mobile Application Design</h3>
                            </div>
                        </div>
                    </div>
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
                    <div class="call-to-action-part wow fadeInUp delay-0-2s text-center">
                        <h2>Welcome to my Project Showcase! Here you'll find a selection of my work</h2>
                        <p>demonstrating my skills and passion. Each project is crafted with attention to detail, innovative
                            solutions, and a commitment to delivering exceptional user experiences. Dive in and explore how
                            I bring ideas to life through code.</p>
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
