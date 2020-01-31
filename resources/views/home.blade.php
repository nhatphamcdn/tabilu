<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loading">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}" data-instant-track>
		<title>{{ config('app.name', 'Tabilu') }} {{ __(' | ') }} @yield('metaTitle')</title>
		<link href="{{ asset('/css/client/app.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">
	</head>
	<body class="vertical-layout vertical-menu menu-expanded fixed-navbar">
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <h1>
                        <strong>{{ __('TABILU') }}</strong>
                    </h1>
                    <span>{{__('LANDING IS COMMING SOON.')}}</span>
                </div>
            </div>
        </div> --}}

        <div id="app"></div>

        <script src="{{ asset('/js/client/app.js') }}"></script>
	</body>
</html>
