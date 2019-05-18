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

@if (isset($combined))
<style>
    .jumbotron {

        /*background-position: top;*/
        /*background-clip: content-box;*/
        /*background-repeat: no-repeat;*/
        /*background-size: auto;*/
        min-height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    body {
        background: url("{{ asset('img/backs/arch-bridge-clouds-814499.jpg') }}") no-repeat ;
        background-size: cover;
    }

</style>
<section class="jumbotron">
    <div class="middle-stuff">
        <h1>Курс коррекции зрения <br> Светланы Троицкой</h1>
        <p>это избавление от очков за неделю, стойкое улучшение зрения за месяц и общее оздоровление уже после первых занятий</p>
    </div>
</section>
@endif

@if(isset($black_background))
    <style>
        #main article {
            background: rgba(0, 0, 0, 0.5);
        }
        #main * {
            color: #fff;
        }

        #main .title a {
            color: #2ebaae !important;
        }

        #main h2 {
            font-size: 200%;
        }



        #wrapper {
            padding-top: 0em;
        }

        .middle-stuff {
            width: auto;
            max-width: 1100px;
        }
        .middle-stuff h1 {
            font-size: 200%;
        }
        .post {
            border: solid 1px rgba(0,0,0, 0.3);
        }

        .jumbotron h1 {

        }

        body p, body i, body article {
            font-size: 120%;
        }
    </style>
@endif

@if(isset($gradient_background))
    <style>

        #header {
            background-color: #ffffff !important;
        }

        #header .links ul li {
            border-left: solid 1px #000;
            border-left: solid 1px rgba(103, 107, 110, 0.88);
        ;
        }

        .post {
            border: none !important;
        }

        #header h1 a:hover {
            background: linear-gradient(to right top, #6d327c, #485DA6, #00a1ba, #00BF98, #36C486);
            /*background: linear-gradient(to right, #30CFD0 0%, #330867 100%);*/
            background-image: linear-gradient(to bottom, #2ebaae, #22bbaa, #15bda4, #07be9f, #00bf98);

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #header h1 a:hover span {
            /*color: #FFAE6F;*/
            /*background: #FFAE6F;*/
            /*-webkit-background-clip: text;*/
            /*-webkit-text-fill-color: transparent;*/

            background: #fc4a1a;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #f7b733, #fc4a1a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #header h1 a span {
            color: #FFAE6F;
        }

        #header .links ul li > a:hover {
            color: #FFA17A;
        }
        #main article {
            background: none;
        }
        #main * {
            color: #fff;
        }

        /*#main .title a {*/
        /*    color: #2ebaae !important;*/
        /*}*/

        #main h2 {
            font-size: 200%;
        }

        body {
            /*background-image: -webkit-gradient(linear, left bottom, right top, from(#6d327c), color-stop(#485DA6), color-stop(#00a1ba), color-stop(#00BF98), to(#36C486));*/
            /*background-image: -webkit-linear-gradient(left bottom, #6d327c, #485DA6, #00a1ba, #00BF98, #36C486);*/
            /*background-image: -o-linear-gradient(left bottom, #6d327c, #485DA6, #00a1ba, #00BF98, #36C486);*/
            /*background-image: linear-gradient(to right top, #6d327c, #485DA6, #00a1ba, #00BF98, #36C486);*/

            background-image: linear-gradient(to bottom, #2ebaae, #22bbaa, #15bda4, #07be9f, #00bf98);
        }

        /*h1, h2, h3 {*/
        /*    color: #FFA17A !important;*/
        /*    !*text-shadow: 1px 1px 0px #FFFFFF;*!*/
        /*    !*text-shadow: rgb(255, 255, 255) 1px 0px 0px, rgb(255, 255, 255) 0.540302px 0.841471px 0px, rgb(255, 255, 255) -0.416147px 0.909297px 0px, rgb(255, 255, 255) -0.989992px 0.14112px 0px, rgb(255, 255, 255) -0.653644px -0.756802px 0px, rgb(255, 255, 255) 0.283662px -0.958924px 0px, rgb(255, 255, 255) 0.96017px -0.279415px 0px;*!*/
        /*}*/


        #wrapper {
            background: none;

            padding-top: 0em;
        }

        .middle-stuff {
            width: auto;
            max-width: 1100px;
        }
        .middle-stuff h1 {
            font-size: 200%;
        }
        .post {
            border: solid 1px rgba(0,0,0, 0.3);
        }

        .jumbotron h1 {

        }

        body p, body i, body article {
            font-size: 120%;
        }
    </style>
@endif

@if ($title == 'variant5')
    <style>
        .button.turquoise-flat-button {
            /*text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);*/
            background: #FFA17A;
            border: 0;
            border-bottom: 2px solid #ac7447;
            color: #ffffff !important;
        }

        .button.turquoise-flat-button:hover {
            /*text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);*/
            background: white;
            border: 1px solid #FFA17A;
            color: #FFA17A !important;

        }
    </style>
@endif

@if ($title == 'variant6')
    <style>
        body {
            /*background-image: -webkit-gradient(linear, left bottom, right top, from(#6d327c), color-stop(#485DA6), color-stop(#00a1ba), color-stop(#00BF98), to(#36C486));*/
            /*background-image: -webkit-linear-gradient(left bottom, #6d327c, #485DA6, #00a1ba, #00BF98, #36C486);*/
            /*background-image: -o-linear-gradient(left bottom, #6d327c, #485DA6, #00a1ba, #00BF98, #36C486);*/
            background-image: linear-gradient(to right top, #6d327c, #485DA6, #00a1ba, #00BF98, #36C486);

        }

        h1, h2, h3, h1 a,  h2 a,  h3 a {
            color: #FFA17A !important;
            /*text-shadow: 1px 1px 0px #FFFFFF;*/
            /*text-shadow: rgb(255, 255, 255) 1px 0px 0px, rgb(255, 255, 255) 0.540302px 0.841471px 0px, rgb(255, 255, 255) -0.416147px 0.909297px 0px, rgb(255, 255, 255) -0.989992px 0.14112px 0px, rgb(255, 255, 255) -0.653644px -0.756802px 0px, rgb(255, 255, 255) 0.283662px -0.958924px 0px, rgb(255, 255, 255) 0.96017px -0.279415px 0px;*/
        }
    </style>
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
