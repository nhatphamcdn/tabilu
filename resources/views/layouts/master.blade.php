<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loading">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Tabilu') }} {{ __(' | ') }} @yield('metaTitle')</title>

		<!-- Styles -->
		{{-- @unless(isset($noBaseStyle))
			<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		@endunless --}}
	
		@stack('css')
	</head>
	<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
        <div class="body-content">
            @yield('body')
        </div>

		
		<script src="{{ asset('/js/app.js') }}"></script>
		@stack('scripts')
	</body>
</html>
