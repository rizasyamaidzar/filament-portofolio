@extends('welcome')
@section('content')
    <!-- Hero Section Start -->
    <section class="pt-32  text-center container">
        <h1 class="font-bold text-2xl md:text-4xl">Hallo Selamat Datang!</h1>
        <h1 class="md:text-2xl text-xl my-5">i'm <span class="font-bold md:text-4xl text-2xl text-ungu "> RIZA AFIF SYAMAIDZAR
            </span></h1>
        <p class="text-sm md:px-28 px-5 md:text-xl">full-stack web developer skilled in creating seamless, engaging web
            applications. Combining front-end and back-end expertise, I transform ideas into functional, visually appealing
            digital solutions</p>
        <img src="img/project.png" class="mx-auto" alt="">
    </section>

    <!-- Hero Section End -->
    <!-- 2 ND section start -->
    <section style="background-color: #0C0A1F">
        <div class="grid grid-cols-4 md:grid-cols-4 py-10 md:py-20 container">
            <div class="transition ease-in-out delay-150hover:-translate-y-1 hover:scale-110 duration-300">
                <a href="/resume">
                    <img src="img/icon/resume.png" alt="" class="max-w-12 md:max-w-20 shadow-lg mx-auto">
                    <h2 class="mt-2 text-center md:text-2xl text-white font-bold mb-5  animate-pulse">Resume</h2>
                </a>
            </div>
            <div class="transition ease-in-out delay-150hover:-translate-y-1 hover:scale-110 duration-300">
                <a href="/experience">
                    <img src="img/icon/experience.png" alt="" class="max-w-12 md:max-w-20 shadow-lg mx-auto">
                    <h2 class="mt-2 text-center md:text-2xl text-white font-bold mb-5  animate-pulse">Experience</h2>
                </a>
            </div>
            <div class="transition ease-in-out delay-150hover:-translate-y-1 hover:scale-110 duration-300">
                <a href="/project">
                    <img src="img/icon/project.png" alt="" class="max-w-12 md:max-w-20 shadow-lg mx-auto">
                    <h2 class="mt-2 text-center md:text-2xl text-white font-bold mb-5  animate-pulse">Project</h2>
                </a>
            </div>
            <div class="transition ease-in-out delay-150hover:-translate-y-1 hover:scale-110 duration-300">
                <a href="/certificate">
                    <img src="img/icon/sertif.png" alt="" class="max-w-12 md:max-w-20 shadow-lg mx-auto">
                    <h2 class="mt-2 text-center md:text-2xl text-white font-bold animate-pulse">Certificate</h2>
                </a>
            </div>
        </div>

        <!-- start text -->
        <div class="mx-5 lg:mx-48 mb-10">
            <p class="bg-ungu p-5 lg:p-10 rounded-xl text-white font-bold text-sm lg:text-2xl text-center">Let's Collaborate
                I am always excited to take on new challenges and collaborate on innovative projects. If you have an idea or
                a project in mind, let's bring it to life together. Feel free to browse through my portfolio and reach out
                to me for any inquiries or collaborations.
            </p>
        </div>
        <!-- end text -->
        <h1 class="text-hitam">.</h1>
    </section>
    <!-- 2 ND section Ende -->
@endsection
