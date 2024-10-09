@extends('welcome')

@section('content')
    <!-- Start Hero Section -->
    <section id="home" style="background-image: url(./img/bg/pengalaman.png)"
        class="mt-[55px] bg-cover bg-no-repea bg-blend-multiply">
        <div class="container">
            <div class="flex flex-wrap lg:ml-16">
                <!-- hellp -->
                <div class="w-full self-center px-4 lg:w-1/2 ">
                    <h2 class="text-black font-semibold mt-10 text-2xl">My Experience</h2>
                    <h1 class="text-ungu font-bold text-4xl my-2">Welcome to my experience page! </h1>
                    <p class="text-black text-lg mb-6">Explore how my diverse experiences have shaped my ability to create
                        exceptional experiences.</p>

                    <!-- end sosial media  -->
                </div>
                <!-- end hello -->
                <!-- start image -->
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="mt-10">
                        <img src="img/profile/pengalaman.png" alt="" class="max-w-full mx-auto" width="400px">

                    </div>
                </div>
                <!-- end image -->
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    {{-- Start Section Pengalaman  --}}
    @foreach ($experiences as $experience)
        <section class="container mt-10">
            <div class="grid grid-rows-1 grid-flow-col mx-10 lg:mx-28 my-5">
                <div class="row-span-1 lg:mx-10 ">
                    <img src="img/profile/freelance.png" alt="">
                </div>
                <div class="col-span-2 mx-10">
                    <h2 class="font-bold lg:text-2xl text-xl">{{ $experience->nama }}</h2>
                    <h2 class="lg:text-xl font-medium my-1 text-ungu">{{ $experience->role }}</h2>
                    <h2 class="lg:text-xl font-medium my-1 text-gray-700">{{ $experience->periode }}</h2>
                    <p class="lg:text-lg my-1">{{ $experience->deskripsi }}</p>
                    <ul class="list-disc mx-5 lg:mx-10">
                        @foreach ($experience->jobdesk as $jobdesk)
                            <li>{{ $jobdesk->keterangan }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- start dokumentasi -->
            <div class="relative">
                <div class="carousel max-w-2xl flex mx-auto">
                    <!-- Carousel items -->
                    @foreach ($experience->dokumentasi as $dokumentasi)
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $dokumentasi->foto) }}" alt="Carousel Image 1"
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

        </section>
    @endforeach
    {{-- End Section Pengalaman  --}}
@endsection
@section('script')
    <script>
        const carousel = document.querySelector('.carousel');
        const prevButton = document.querySelector('.carousel-control-prev');
        const nextButton = document.querySelector('.carousel-control-next');

        prevButton.addEventListener('click', () => {
            carousel.scrollBy({
                left: -carousel.offsetWidth,
                behavior: 'smooth'
            });
        });

        nextButton.addEventListener('click', () => {
            carousel.scrollBy({
                left: carousel.offsetWidth,
                behavior: 'smooth'
            });
        });
    </script>
@endsection
