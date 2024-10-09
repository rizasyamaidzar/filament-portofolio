<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Riza Afif Syamaidzar</title>
</head>

<body>
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')


    @yield('script')
    @include('layouts.script')

</body>

</html>
