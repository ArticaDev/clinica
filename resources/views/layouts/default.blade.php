<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

</head>
<body>

<!-- END HEADER --> 
<!-- START CONTENT -->
@yield('content')
<!-- END CONTENT -->
<!-- START FOOTER-->

</body>
</html>