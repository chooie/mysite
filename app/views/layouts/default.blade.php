<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal site">
    <meta name="author" content="Charlie Hebert">

    @yield('head')

    {{ HTML::style("css/bootstrap.min.css") }}
    {{ HTML::style("font-awesome-4.2.0/css/font-awesome.min.css") }}
    {{--
        Finally figured out why favicon isn't working. Add query string to the end
        to force browser to refresh favicon.
    --}}
     <link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v=2" type="image/x-icon">

    {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
    {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
    <!--[if lt IE 9]>
        {{ HTML::script("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js") }}
        {{ HTML::script("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js") }}
    <![endif]-->
    {{ HTML::style("css/main.css") }}

</head>

<body>
    @include('layouts.partials.nav')

    @yield('content')

    {{-- Footer --}}
    <footer>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Charlie Hebert 2014</p>
                </div>
            </div>
        </div>
    </footer>

    {{-- jQuery --}}
    <script src="js/jquery.js"></script>

    {{-- Bootstrap Core JavaScript --}}
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
