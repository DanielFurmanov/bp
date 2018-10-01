<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ $title }}</title>
    @include('common.head_assets')

    {{--<link href="https://fonts.googleapis.com/css?family=Alegreya|Oswald|PT+Sans+Caption|Philosopher|Playfair+Display+SC|Ubuntu|Ubuntu+Condensed|Vollkorn&amp;subset=cyrillic" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <style>
        * {
            font-family: Ubuntu, sans-serif !important;
        }

        @if(isset($fullpage))

        body {
            background: no-repeat url("/img/background.jpeg") center center fixed;
            background-size: cover;
        }
        @endif

    </style>
</head>
<body>
@if(isset($jumbo))
<style>
    .jumbotron {
        background: url("/img/background.jpeg");
        background-position: top;
        /*background-clip: content-box;*/
        /*background-repeat: no-repeat;*/
        background-size: auto;
        min-height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

</style>

<section class="jumbotron">
    <div class="middle-stuff">
        <h1>Курс коррекции зрения <br> Светланы Троицкой</h1>
        <p>это избавление от очков за неделю, стойкое улучшение зрения за месяц и общее оздоровление уже после первых занятий</p>
    </div>
</section>

@endif

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
