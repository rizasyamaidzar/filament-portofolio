@extends('welcome')
@section('content')
    <!-- Course Certificate -->
    <div class="container mx-auto pt-20 mb-10">
        @foreach ($categories as $category)
            <h2 class="text-ungu font-bold text-2xl text-center my-5 lg:text-4xl">{{ $category->nama }}</h2>
            <div class="grid gap-4">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach ($category->categories as $certificate)
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/' . $certificate->foto) }}"
                                alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <!-- END Course Certificate -->
@endsection
