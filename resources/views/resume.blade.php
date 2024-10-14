@extends('welcome')
@section('content')
    <!-- Start Hero Section -->
    @foreach ($resumes as $resume)
        <section id="home" style="background-image: url(./img/bg/resume.png)"
            class="mt-[55px] bg-cover bg-no-repea bg-blend-multiply">
            <div class="container">
                <div class="flex flex-wrap lg:ml-16">
                    <!-- hellp -->
                    <div class="w-full self-center px-4 lg:w-1/2 ">
                        <h2 class="text-ungu font-semibold text-4xl mt-10">SUMMARY</h2>
                        <p class="text-hitam text-lg mb-6">{{ $resume->summary }}</p>

                        <div class="flex items-center">
                            <a href="#pesan" class="bg-ungu mr-5 p-3 text-white rounded-lg hover:opacity-80 ">Send
                                Message</a>
                            <!-- Sosial media  -->
                            @foreach ($resume->sosmed as $sosmed)
                                <a href="{{ $sosmed->link }}" target="_blank">
                                    <button class="bg-hitam p-3 rounded-lg text-ungu mx-2  "><!-- Instagram -->
                                        <!-- Linkedin -->
                                        <img src="{{ asset( $sosmed->logo) }}" alt="" class="h-5 w-5">
                                    </button>
                                </a>
                            @endforeach
                        </div>
                        <!-- end sosial media  -->
                    </div>
                    <!-- end hello -->
                    <!-- start image -->
                    <div class="w-full self-end px-4 lg:w-1/2">
                        <div class="mt-10">
                            <img src="img/profile/PROFILE.png" alt="" class="max-w-full mx-auto" width="400px">

                        </div>
                    </div>
                    <!-- end image -->
                </div>
            </div>
        </section>
        <!-- End Hero Section -->

        <!-- EDUCATION START -->
        <h2 class="text-ungu font-bold md:text-4xl text-2xl lg:mx-24 mx-10 my-5">EDUCATION</h2>
        <!-- POLINEMA -->
        @foreach ($resume->educations as $education)
            <div class="grid grid-rows-1 gap-3 grid-flow-col mx-10 lg:mx-28">
                <div class="row-span-1 lg:mx-10 ">
                    <img src="{{ asset($education->logo) }}" alt="" class="max-w-sm">
                </div>
                <div class="col-span-2 mx-10">
                    <h2 class="font-bold lg:text-2xl text-xl">{{ $education->nama }}</h2>
                    <h2 class="lg:text-xl font-medium my-1">{{ $education->jurusan }}</h2>
                    <ul class="list-disc mx-5 lg:mx-10">
                        @foreach ($education->keterangans as $keterangan)
                            <li>{{ $keterangan->keterangan }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
        {{-- END Education  --}}
        <!-- Start Kunjungi -->
        <section class="container">
            <h2 class="text-ungu text-2xl lg:text-4xl font-bold text-center py-5">Jangan Lupa Kunjungi</h2>
            <div class="grid grid-cols-3 md:grid-cols-3 py-10 md:py-20 container">
                <div class="transition ease-in-out delay-150hover:-translate-y-1 hover:scale-110 duration-300">
                    <a href="/experience">
                        <img src="img/icon/baru/arcticons_adobe-experience-manager.png" alt=""
                            class="max-w-12 md:max-w-20 shadow-lg mx-auto">
                        <h2 class="mt-2 text-center md:text-2xl text-hitam font-bold mb-5  animate-pulse">Experience</h2>
                    </a>
                </div>
                <div class="transition ease-in-out delay-150hover:-translate-y-1 hover:scale-110 duration-300">
                    <a href="/project">
                        <img src="img/icon/baru/Vector.png" alt="" class="max-w-12 md:max-w-20 shadow-lg mx-auto">
                        <h2 class="mt-2 text-center md:text-2xl text-hitam font-bold mb-5  animate-pulse">Project</h2>
                    </a>
                </div>
                <div class="transition ease-in-out delay-150hover:-translate-y-1 hover:scale-110 duration-300">
                    <a href="/certificate">
                        <img src="img/icon/baru/Group.png" alt="" class="max-w-12 md:max-w-20 shadow-lg mx-auto">
                        <h2 class="mt-2 text-center md:text-2xl text-hitam font-bold animate-pulse">Certificate</h2>
                    </a>
                </div>
            </div>

        </section>

        <!-- End Kunjungi -->

        {{-- SKILL  --}}

        <section class="container">
            <h2 class="text-ungu text-2xl lg:text-4xl font-bold text-center py-5">Skill & Tools</h2>
            <div class="grid grid-cols-4 md:grid-cols-6 py-10 md:py-20 container">
                @foreach ($resume->skills as $skill)
                    <div class="transition ease-in-out delay-150hover:-translate-y-1 hover:scale-110 duration-300">
                        <img src="{{ asset($skill->logo) }}" alt=""
                            class="max-w-10 md:max-w-14 shadow-lg mx-auto">
                        <h2 class="mt-2 text-center md:text-2xl text-hitam font-bold mb-5  animate-pulse">
                            <a href="{{ $skill->link }}" target="_blank"> {{ $skill->nama }}
                        </h2> </a>
                    </div>
                @endforeach
            </div>
        </section>
        {{-- End SKill  --}}
    @endforeach
@endsection
