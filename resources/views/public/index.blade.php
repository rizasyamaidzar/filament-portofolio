<!DOCTYPE html>
<html lang="en">

<head>
    @include('public.partials.head')
</head>

<body>
    @include('public.partials.loader')
    <!-- START MENU DESIGN AREA -->
    @include('public.partials.navbar')
    <!-- / END MENU DESIGN AREA -->
    @yield('content')
    <!-- START FOOTER DESIGN AREA -->
    @include('public.partials.footer')
    <!-- / END FOOTER DESIGN AREA -->
    <!-- START SCROOL UP DESIGN AREA -->
    <div class="progress-wrap cursor-pointer">
        <i class="ri-arrow-up-double-line"></i>
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- / END SCROOL UP DESIGN AREA -->
    @include('public.partials.script')
</body>

</html>
