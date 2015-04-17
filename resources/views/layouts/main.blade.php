<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('meta-title', 'UWI Mona Alumni')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->

    {!! HTML::script('js/jquery.min.js')  !!}
    {!! HTML::script('js/jquery.scrolly.min.js')  !!}
    {!! HTML::script('js/jquery.dropotron.min.js')  !!}
    {!! HTML::script('js/jquery.scrollex.min.js')  !!}
    {!! HTML::script('js/skel.min.js')  !!}
    {!! HTML::script('js/skel-layers.min.js')  !!}
    {!! HTML::script('js/init.js')  !!}

    {!! HTML::style('css/skel.css') !!}
    {!! HTML::style('css/style.css') !!}
    {!! HTML::style('css/style-xlarge.css') !!}

    {{--<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->--}}
    {{--<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->--}}
    <!--[if lte IE 9]>{!! HTML::style('css/ie/v9.css') !!}<![endif]-->
    <!--[if lte IE 8]>{!! HTML::style('css/ie/v8.css') !!}<![endif]-->

</head>
<body class="@yield('body-class')">
    @include('layouts.partials._navbar')
    @yield('header')
    @yield('content')
    @yield('footer')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    @yield('scripts')
</body>
</html>