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

        <title>{{ $page->siteName }}</title>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        @yield('body')
        <script src="{{ mix('js/main.js', 'assets/build') }}" type="text/javascript"></script>
    </body>
</html>
