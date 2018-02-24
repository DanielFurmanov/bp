<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ $title }}</title>
    @include('common.head_assets')
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">
    @include('layouts.partials.header')

    <div id="main">
        @yield('content')
    </div>
</div>

@include('common.bottom_assets')
</body>
</html>
