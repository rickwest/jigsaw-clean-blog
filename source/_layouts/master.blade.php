<!DOCTYPE html>
<html lang="en">
    <head>
        @if($page->production && $page->gaTrackingId)
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $page->gaTrackingId }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ $page->gaTrackingId }}');
        </script>
        @endif

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="icon" href="/favicon.ico">

        @section('meta')
        <!-- Search Engine -->
        <meta name="description" content="{{ $page->description ?? $page->excerpt ?? $page->siteDescription }}">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}">
        <meta itemprop="description" content="{{ $page->description ?? $page->excerpt ?? $page->siteDescription }}">
        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}">
        <meta name="twitter:description" content="{{ $page->description ?? $page->excerpt ?? $page->siteDescription }}">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}">
        <meta name="og:description" content="{{ $page->description ?? $page->excerpt ?? $page->siteDescription }}">
        <meta name="og:type" content="website">
        @show

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        @yield('body')
        <script src="{{ mix('js/main.js', 'assets/build') }}" type="text/javascript"></script>
    </body>
</html>
