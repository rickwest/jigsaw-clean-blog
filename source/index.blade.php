---
pagination:
    collection: posts
---

@extends('_layouts.master')

@section('body')
    <!-- Navigation -->
    @include('_partials.navigation')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/assets/images/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Jigsaw Clean Blog</h1>
                        <span class="subheading">A Jigsaw implementation of a blog theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach ($pagination->items as $post)
                    <div class="post-preview">
                        <a href="{{ $post->getPath() }}">
                            <h2 class="post-title">
                                {{ $post->title }}
                            </h2>
                            <h3 class="post-subtitle">
                                {{ $post->subtitle }}
                            </h3>
                        </a>
                        <p class="post-meta">Posted on {{ $post->date }}</p>
                    </div>
                    <hr>
                @endforeach

                <!-- Pager -->
                <div class="clearfix">
                    @if ($previous = $pagination->previous)
                        <a class="btn btn-primary float-left" href="{{ $page->baseUrl }}{{ $previous }}">&larr; Newer Posts</a>
                    @endif
                    @if ($next = $pagination->next)
                        <a class="btn btn-primary float-right" href="{{ $page->baseUrl }}{{ $next }}">Older Posts &rarr;</a>
                    @endif
                </div>

            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    @include('_partials/footer')
@endsection
