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
                            <p>Explore my collection of certifications, each one representing milestones in my journey of
                                growth, learning, and achievement. Every certificate tells a story of dedication and
                                commitment.</p>
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
                    {{-- @foreach ($categories as $category)
                        @foreach ($category->categories as $certificate)
                            <div class="col-lg-4 col-md-6 item {{ $category->id }}">
                                <div class="project-item style-two wow fadeInUp delay-0-3s">
                                    <div class="project-image">
                                        <img src="{{ asset($certificate->foto) }}" alt="{{ $category->nama }}">
                                        <a href="{{ asset($certificate->foto) }}" class="details-btn work-popup"><i
                                                class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                    <div class="project-content">
                                        <span class="sub-title">Certificate by : </span>
                                        <h3>{{ $category->nama }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach --}}
                    <!-- END SINGLE PORTFOLIO DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- // END PORTFOLIO DESIGN AREA -->
    @include('public.partials.caption')
@endsection
