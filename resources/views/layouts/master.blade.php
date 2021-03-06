<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loading">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}" data-instant-track>
		<meta name="keywords" content="111">

		<title>{{ config('app.name', 'Tabilu') }} {{ __(' | ') }} @yield('metaTitle')</title>

		<link href="{{ asset('css/preloader.css') }}" rel="stylesheet">
		<link href="#" id="yield-link" rel="stylesheet">
		@stack('css')
	</head>
	<body id="d-none" class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar">
		<input type="hidden" value=@yield('css_link') id="yield_css" />
		{{-- Include Preloader --}}
		@include('layouts._partials.preloader')
		{{-- End Include Preloader --}}

		<div class="body-content" style="opacity: 0">
			@yield('body')
		</div>

		{{-- Import Javascript --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/instantclick/3.1.0/instantclick.min.js" data-no-instant></script>
		<script data-no-instant>InstantClick.init();</script>
		<script src="{{ asset('/js/app.js') }}" data-instant-track></script>
		{{-- End Import Javascript --}}
		
		{{-- Push Script In Layout --}}
		@stack('scripts')
		{{-- End Push Script In Layout --}}
	</body>
</html>
