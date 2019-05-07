---
pagination:
    collection: posts
---

@extends('_layouts.page')

@section('content')
    @foreach ($pagination->items as $post)
        <div class="post-preview">
            <a href="{{ $post->getPath() }}">
                <h2 class="post-title">
                    {{ $post->title }}
                </h2>
                <h3 class="post-subtitle">
                    {{ $post->getExcerpt(125) }}
                </h3>
            </a>
            <p class="post-meta">Posted on {{ date('F jS, Y', $post->date) }}@if($post->showReadingTime) &bull; {{ $post->readingTime($post) }}@endif</p>
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
@endsection
