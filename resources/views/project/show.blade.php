@extends('welcome')
@section('content')
    <!-- start hero -->
    <div style="background-image: url(../img/bg/project.png)" class="mt-[55px] bg-cover bg-no-repeat bg-blend-multiply">
        <img src="{{ asset($project->foto) }}" alt="" class="mx-auto pt-40 max-w-64 md:max-w-full">
        <div
            class="bg-white rounded-xl p-10 font-bold shadow-black md:text-4xl text-2xl text-center mx-20 shadow-xl  md:mx-60 mb-10">
            <h1>{{ $project->nama }}</h1>
        </div>
        <p class="pt-10 text-center mx-5 md:px-52 md:text-lg font-serif py-20">
            {!! $project->keterangan !!}
        </p>
        <h2 class="text-center text-ungu font-bold text-4xl pb-10">ROLE</h2>
    </div>
    <!-- END hero -->
    <!-- isi content -->
    <!-- task -->
    <div class="container px-14 md:px-60">
        @foreach ($project->roles as $role)
            <h3 class="text-black font-bold text-2xl">{{ $role->nama }}</h3>
            <ol class="px-5 py-2 md:text-xl">
                <li> {!! nl2br(e($role->deskripsi)) !!}</li>
            </ol>
        @endforeach
    </div>
    <!-- END task -->
    <!-- tools -->
    <div class="container px-14 md:px-60">
        <h2 class="text-center text-ungu font-bold text-4xl pt-5">TOOLS</h2>

        <div class="flex gap-2 flex-wrap justify-center max-w-3xl p-4 md:p-12">
            @foreach ($project->tools as $tool)
                <button type="button"
                    class="shadow-md text-ungu bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-cente me-2 mb-2">
                    <img src="{{ asset($tool->foto) }}" alt="" class="w-10 h-10">
                    <a href="{{ $tool->link }}" class="mx-2 text-xl">
                        {{ $tool->nama }}
                    </a>
                </button>
            @endforeach



        </div>
        <!-- END tools -->
        <!-- fitur -->
        <div class="container px-14 md:px-20">
            <h2 class="text-center text-ungu font-bold text-4xl pt-5">FEATURS</h2>
            <div class="grid sm:grid-cols-4 gap-16 sm:gap-8 mt-16 sm:mt-24">
                @foreach ($project->featurs as $featur)
                    <div class="text-center">
                        <div class="relative w-10 h-10 mx-auto left-2">
                            <div
                                class="z-10 relative w-full h-full bg-white rounded-full border border-gray-300 shadow flex items-center justify-center">

                            </div>
                            <div class="absolute inset-0 -translate-x-2 -translate-y-2 bg-ungu rounded-full"></div>
                        </div>
                        <h3 class="font-headline text-xl sm:text-2xl mt-6 sm:mt-10">{{ $featur->nama }}</h3>
                        <p class="leading-relaxed mt-4">{{ $featur->keterangan }}</p>
                    </div>
                @endforeach
            </div>

        </div>
        <!-- start dokumentasi -->
        <div class="container mt-5 px-14 md:px-20">
            <h2 class="text-center text-ungu font-bold text-4xl pt-5">Dokumentasi</h2>
            <div class="relative my-10">
                <div class="carousel max-w-2xl flex mx-auto">
                    <!-- Carousel items -->
                    @foreach ($project->dokumentasi as $dokumentasi)
                        <div class="carousel-item">
                            <img src="{{ asset($dokumentasi->foto) }}" alt="Carousel Image 1"
                                class="w-full h-[400px] object-cover">
                        </div>
                    @endforeach
                </div>
                <!-- Carousel controls -->
                <div class="absolute inset-y-0 left-0 flex items-center justify-start pl-4">
                    <button
                        class="carousel-control-prev bg-gray-800 hover:bg-gray-700 text-white rounded-full p-2 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center justify-end pr-4">
                    <button
                        class="carousel-control-next bg-gray-800 hover:bg-gray-700 text-white rounded-full p-2 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>


        <!-- view on github -->
        <iframe class="mx-auto my-5 max-w-80 max-h-52 md:max-w-full md:max-h-full" width="560" height="315"
            src="{{ $project->link_yt }}" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

        <h2
            class="my-10 text-center text-white bg-ungu rounded-xl shadow-xl shadow-black font-semibold md:text-2xl py-5 md:mx-40">
            <a href="https://github.com/rizasyamaidzar" target="_blank">View On Github</a>
        </h2>

    </div>
@endsection
