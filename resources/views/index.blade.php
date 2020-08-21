@extends('layouts.default')
@section('content')
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#"><img src="assets/img/0cd22a36-c30f-4004-9cea-0752a4fc9cc5-removebg-preview.png" style="height: 50px;width: 100px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.html">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="catalog-page.html">Catalog</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="features.html">Features</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="pricing.html">Pricing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html">About Us</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="color: rgba(0,0,0,0.85);background: url(https://images.pexels.com/photos/4672626/pexels-photo-4672626.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940) center;height: 60vh;">
            <div class="text">
                <h1 style="font-family: 'Dancing Script', cursive;color: #efc585;">O que você deseja?</h1>
                <p style="font-family: 'Dancing Script', cursive;font-size: 42px;">Rejuvenescer</p>
            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h1 style="color: rgb(239,197,133);">Escolha por <strong>ÁREA</strong></h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4 col-xl-3" style="margin: 10px auto;"><img class="img-thumbnail" src="assets/img/scenery/image5.jpg" style="border-radius: 100%;width: 250px;height: 250px;"></div>
                    <div class="col-md-6 col-lg-4 col-xl-3" style="margin: 10px auto;"><img class="img-thumbnail" src="assets/img/scenery/image5.jpg" style="border-radius: 100%;width: 250px;height: 250px;"></div>
                    <div class="col-md-6 col-lg-4 col-xl-3" style="margin: 10px auto;"><img class="img-thumbnail" src="assets/img/scenery/image5.jpg" style="border-radius: 100%;width: 250px;height: 250px;"></div>
                </div>
            </div>
        </section>
        <section class="clean-block clean-info dark" style="background-color: rgb(255,255,255);">
            <div class="container">
                <div class="block-heading">
                    <h1 style="color: rgb(239,197,133);font-family: Montserrat, sans-serif;">Escolha por <strong>TRATAMENTO</strong></h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4 col-xl-3" style="margin: 10px auto;"><img class="img-thumbnail" src="assets/img/scenery/image5.jpg" style="border-radius: 100%;width: 250px;height: 250px;"></div>
                    <div class="col-md-6 col-lg-4 col-xl-3" style="margin: 10px auto;"><img class="img-thumbnail" src="assets/img/scenery/image5.jpg" style="border-radius: 100%;width: 250px;height: 250px;"></div>
                    <div class="col-md-6 col-lg-4 col-xl-3" style="margin: 10px auto;"><img class="img-thumbnail" src="assets/img/scenery/image5.jpg" style="border-radius: 100%;width: 250px;height: 250px;"></div>
                </div>
            </div>
        </section>
        <section class="clean-block features" style="background-color: rgb(244,244,244);">
            <div class="container">
                <div class="block-heading">
                    <h1 style="color: #efc585;font-family: 'Dancing Script', cursive;">Sobre Nós</h1>
                    <p style="font-family: 'Dancing Script', cursive;font-size: 24px;color: rgb(0,0,0);">A Corporalle é uma união do melhor em termos de estética e segurança em seus tratamentos.&nbsp;<br></p>
                    <h2 style="color: #efc585;font-family: 'Dancing Script', cursive;margin-top: 32px;">Veja Fotos</h2>
                </div>
                <div class="row justify-content-center"><img style="background: url(https://images.pexels.com/photos/374071/pexels-photo-374071.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500) center / cover no-repeat;width: 70vw;height: 250px;padding-top: 0px;margin-top: -15px;"></div>
            </div>
        </section>
        <section class="clean-block slider dark"></section>
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h1 style="color: #efc585;font-family: 'Dancing Script', cursive;">Localização</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4" style="margin: auto;margin-top: 10px;">
                        <h2 style="font-family: 'Dancing Script', cursive;text-align: center;">Spa</h2><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="400"></iframe>
                        <h4 style="font-family: 'Dancing Script', cursive;text-align: center;">Endereço Spa:</h4>
                        <h4 style="font-family: 'Dancing Script', cursive;text-align: center;">Telefone: (61) XXXXX-XXXX</h4>
                        <h5 style="font-family: 'Dancing Script', cursive;text-align: center;">Horário de Funcionamento: 08:00 até 17:00</h5>
                    </div>
                    <div class="col-sm-6 col-lg-4" style="margin: auto;margin-top: 10px;">
                        <h2 style="font-family: 'Dancing Script', cursive;text-align: center;">Clínica</h2><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="400"></iframe>
                        <h4 style="font-family: 'Dancing Script', cursive;text-align: center;">Endereço Clínica:</h4>
                        <h4 style="font-family: 'Dancing Script', cursive;text-align: center;">Telefone: (61) XXXXX-XXXX</h4>
                        <h5 style="font-family: 'Dancing Script', cursive;text-align: center;">Horário de Funcionamento: 08:00 até 17:00</h5>
                    </div>
                </div>
            </div>
        </section>
    </main>
   
@endsection