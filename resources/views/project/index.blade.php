@extends('welcome')
@section('content')
    <!-- section image start -->
    <div class="container pt-32">
        <img src="img/home.png" alt="" class="mx-auto">
    </div>
    <!-- section image End -->

    <!-- start Content -->
    <section style="background-color: #0C0A1F">
        <div class="text-center py-10">
            <h1 class="text-white font-bold text-xl md:text-4xl">Welcome to my Project Showcase!</h1>
            <h1 class="text-ungu font-bold text-xl my-1 md:text-4xl">Here you'll find a selection of my work</h1>
            <p class="text-white text-sm mx-10 md:text-xl md:mx-32">demonstrating my skills and passion. Each project is
                crafted with attention to detail, innovative solutions, and a commitment to delivering exceptional user
                experiences. Dive in and explore how I bring ideas to life through code.</p>
        </div>
        <!-- Start Isi Project -->
        <div class="grid grid-cols-4 md:grid-cols-4 pb-10 md:py-b0 container px-7 lg:px-36">
            @foreach ($projects as $project)
                <div class="transition ease-in-out delay-150hover:-translate-y-1 hover:scale-110 duration-300">
                    <a href="/project/{{ $project->id }}">
                        <img src=" {{ asset($project->foto) }}" alt=""
                            class="max-w-12 md:max-w-20 shadow-lg mx-auto">
                        <h2 class="mt-2 text-center md:text-2xl text-white font-bold mb-5  animate-pulse">
                            {{ $project->nama }}</h2>
                    </a>
                </div>
            @endforeach

        </div>
        <!-- End Isi Project -->
    </section>

    <!-- End Content -->
@endsection
