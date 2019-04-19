<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>{{ $title ?? 'TODO ADMIN TITLE' }}</title>
		<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
		<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	</head>

	<body>
		@include('layouts.admin.partials.header')

		<div id="wrapper" class="container rounded border border-light mt-2 pt-3 pb-3">
			@yield('content')
		</div>
	</body>
</html>
