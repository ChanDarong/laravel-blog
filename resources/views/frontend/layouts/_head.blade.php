<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Nucleo Icons -->
<link href="{{ asset('backend/assets/css/nucleo-icons.cs') }}s" rel="stylesheet" />
<link href="{{ asset('backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="{{ asset('backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />

<!-- Scripts -->
{{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

{{-- bootstrap5 --}}
<link rel="stylesheet" href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}">
<script src="{{ asset('frontend/bootstrap/js/bootstrap.min.js') }}"></script>

{{-- custom --}}
<link rel="stylesheet" href="{{ asset('frontend/custom/css/app.css') }}">
<script src="{{ asset('frontend/custom/js/app.js') }}"></script>
