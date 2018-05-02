<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>{{ $title ?? 'TODO ADMIN TITLE' }}</title>
		<link rel="stylesheet" href="/css/main.css" />
	</head>

	<body>
		<!-- Wrapper -->
		<div id="wrapper">
			@include('layouts.admin.partials.header')

			<div id="main">
				@yield('content')
			</div>
		</div>
	</body>
</html>
