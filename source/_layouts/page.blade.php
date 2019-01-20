@extends('_layouts.master')

@section('body')
    <!-- Navigation -->
    @include('_partials.navigation')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ $page->image ? $page->image : '/assets/images/home-bg.jpg' }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>{{ $page->title ? $page->title : $page->siteName }}</h1>
                        <span class="subheading">{{ $page->subtitle ? $page->subtitle : $page->siteDescription }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('_partials/footer')
@endsection