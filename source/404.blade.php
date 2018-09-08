---
permalink: 404.html
---

@extends('_layouts.master')

@section('body')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/assets/images/post-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>404</h1>
                        <span class="subheading">Page lost in space!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>Looks like you've followed a broken link or entered a URL that doesn't exist on this site.</p>
                <p><a href="/">&larr; Back to our site</a></p>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    @include('_partials/footer')
@endsection
