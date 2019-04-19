<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ $title }}</title>
    @include('common.head_assets')

    {{--<link href="https://fonts.googleapis.com/css?family=Alegreya|Oswald|PT+Sans+Caption|Philosopher|Playfair+Display+SC|Ubuntu|Ubuntu+Condensed|Vollkorn&amp;subset=cyrillic" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;subset=cyrillic" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('eye.ico') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <style>
        * {
            font-family: Ubuntu, sans-serif !important;
        }

        @if(isset($fullpage))

        body {
            background: no-repeat url("/img/background.jpeg") center center fixed;
            background-size: 100% 100%;
        }
        @endif

    </style>
</head>
<body>
@if(isset($jumbo))
    <style>
        .jumbotron {
            background: url("/img/background.jpeg");
            background-size: 100%;

            /*background-position: top;*/
            /*background-clip: content-box;*/
            /*background-repeat: no-repeat;*/
            /*background-size: auto;*/
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

    <script>
        $(document).ready(function () {
                    console.log('changing jumbotron background image');
                    jQuery('#back').change(function () {
                        $('.jumbotron')
                                .css('background', 'url('+this.value+')')
                                .css('background-size', 'cover')
                        ;
                    });
                }
        );

    </script>
@else

    <script>
        $(document).ready(function () {
                    console.log('changing background image');
                    jQuery('#back').change(function () {
                        $('body')
                                .css('background', 'url('+this.value+')')
                                .css('background-size', 'cover')
                        ;
                    });
                }
        );

    </script>
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
