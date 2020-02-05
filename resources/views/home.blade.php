<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ config('app.name', 'Tabilu') }}</title>
		<link href="{{ asset('/css/client/app.css') }}" rel="stylesheet">
	</head>
	<body>
        <div id="app"></div>

        <script src="{{ asset('/js/client/app.js') }}"></script>
	</body>
</html>
