<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <link href="{{ url('css/all.css')  }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ url('js/output.js') }}"></script>

</head>
<body>
@include('partials.header')
<div class="container">
    @include('flash::message')
    @yield('content')
</div>

<script>
    // $('div.alert').not('.alert-important').delay(3000).slideUp();
    <!-- This is only necessary if you do Flash::overlay('...') -->
    $('#flash-overlay-modal').modal();
</script>
@yield('footer')
</body>
</html>
