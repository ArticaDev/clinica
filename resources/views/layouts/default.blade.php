<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corporalle</title>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind+Siliguri">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/Footer-Basic.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Growing-Search-Bar-Animated-Text-Input.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/smoothproducts.css')}}">

</head>
<body>
<nav class="navbar navbar-light fixed-top">
        <div class="container"><a class="navbar-brand logo js-scroll-trigger home" href="/"><img src="assets/img/0cd22a36-c30f-4004-9cea-0752a4fc9cc5-removebg-preview.png" style="height: 50px;width: 100px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                <li class="nav-item js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger home" href="/">Home</a></li>
                    <li class="nav-item js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#area">Áreas</a></li>
                    <li class="nav-item js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#treatment">Tratamentos</a></li>
                    <li class="nav-item js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#aboutus">Sobre</a></li>
                    <li class="nav-item js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#local">Localização</a></li>
                </ul>
        </div>
        </div>
    </nav>

<!-- END HEADER --> 
<!-- START CONTENT -->
@yield('content')
<!-- END CONTENT -->
<!-- START FOOTER-->
    <!-- Start: Footer Basic -->
    <div class="footer-basic" style="background-color: #efc585;">
        <footer>
            <!-- Start: Social Icons -->
            <div class="social" style="color: rgb(0,0,0);"><a href="#"><i class="icon ion-social-whatsapp"></i></a><a href="#"><i class="icon ion-email"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <!-- End: Social Icons -->
            <!-- Start: Links -->
            <ul class="list-inline" style="color: rgb(0,0,0);">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Área</a></li>
                <li class="list-inline-item"><a href="#">Tratamentos</a></li>
                <li class="list-inline-item"><a href="#">Sobre Nós</a></li>
                <li class="list-inline-item"><a href="#">Localização</a></li>
            </ul>
            <!-- End: Links -->
            <!-- Start: Copyright -->
            <p class="copyright" style="color: rgb(0,0,0);">Corporalle - 2020</p>
            <!-- End: Copyright -->
            <!-- Start: Copyright -->
            <p class="copyright" style="color: rgb(0,0,0);margin-top: 5px;">Desenvolvido por Artica Dev</p>
            <!-- End: Copyright -->
        </footer>
    </div>
    <!-- End: Footer Basic -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{ asset('assets/js/smoothproducts.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    

</body>
</html>