@extends('layouts.frontend')
@section('content')


<!-- Our Story -->
    <section class="py-5" style="background-color: forestgreen;">
        <div class="container">
            <div class="row align-items-center">
             @foreach ($contents as $content )
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h2 class="section-title">{{ $content->content_title }}</h2>
                        <p>{{ $content->content_description }}</p>
                    </div>
                    <div class="col-lg-6">
                        @if ($content->content_image)
                        <img src="{{ asset('backend/content/' . $content->content_image) }}" alt="Content Image" style="width: 300px; height: 310px;">
                        @else
                        <img src="{{ asset('backend/content/Image.jpeg') }}" alt="Default Image">
                        @endif
                    </div>
                </div>
             @endforeach
        </div>
    </section>
    <!-- End Of Our Story-->

    <!-- Our Mission-->
    <section class="py-5" style="background-color: forestgreen;">
        <div class="container">
            <div class="row align-items-center">
             @foreach ($missions as $mission )
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h2 class="section-title">{{ $mission->mission_title }}</h2>
                        <p>{{ $mission->mission_description }}</p>
                    </div>
                    <div class="col-lg-6">
                        @if ($mission->mission_image)
                        <img src="{{ asset('backend/content/' . $mission->mission_image) }}" alt="Mission Image" style="width: 300px; height: 310px;">
                        @else
                        <img src="{{ asset('backend/content/Image.jpeg') }}" alt="Default Image">
                        @endif
                    </div>
                </div>
             @endforeach
        </div>
    </section>
<!-- End Of Our Mission-->

@endsection