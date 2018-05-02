<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ $title }}</title>
    @include('common.head_assets')

    <link href="https://fonts.googleapis.com/css?family=Alegreya|Oswald|PT+Sans+Caption|Philosopher|Playfair+Display+SC|Ubuntu|Ubuntu+Condensed|Vollkorn&amp;subset=cyrillic" rel="stylesheet">


    <style>
        /*font-family: 'Alegreya', serif;*/
        /*font-family: 'PT Sans Caption', sans-serif;*/
        /*font-family: 'Philosopher', sans-serif;*/
        /*font-family: 'Playfair Display SC', serif;*/
        /*font-family: 'Ubuntu Condensed', sans-serif;*/
        /*font-family: 'Vollkorn', serif;*/
        /*font-family: 'Oswald', sans-serif;*/
        /*font-family: 'Ubuntu', sans-serif;*/
        * {
            font-family: {!! $fontfamily ?? "Ubuntu Condensed" !!}, sans-serif !important;
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
        min-height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    .middle-stuff {
        background: rgba(255, 255, 255, 0.5);
        padding: 1em;
        min-height: 200px;
        width: 600px;
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
