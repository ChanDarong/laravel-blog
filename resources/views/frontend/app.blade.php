<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.layouts._head')

</head>
<body>
    <div id="app">
        @include('frontend.layouts._navbar')

        <main class="">
            @yield('content')
        </main>
    </div>

    @include('frontend.layouts._footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <script src="{{ asset('backend/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>

    <script>
        // $('.masonry-grid').masonry({
        //     // options
        //     itemSelector: '.masonry-column',
        //     columnWidth: 50
        // });
    </script>

    @stack('script')

</body>
</html>
