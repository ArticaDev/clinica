@extends('layouts.default')
@section('content')
    <main id="home" class="page landing-page">

<section><!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
      <a href="#">
        <img style="height:95vh;"class="d-block w-100" src="https://images.pexels.com/photos/4672626/pexels-photo-4672626.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940"
          alt="First slide">
        <div class="mask rgba-black-strong"></div></a>
      </div>
      <div class="carousel-caption">
      <h1 style="font-family: 'Dancing Script', cursive;color: #efc585;">O que você deseja?</h1>
        <p style="font-family: 'Dancing Script', cursive;font-size: 42px;">Rejuvenescer</p>
      </div>
    </div>

    <div class="carousel-item">
      <div class="view">
      <a href="#">
        <img style="height:95vh;"class="d-block w-100" src="https://images.pexels.com/photos/3771835/pexels-photo-3771835.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
          alt="First slide">
        <div class="mask rgba-black-strong"></div></a>
      </div>
      <div class="carousel-caption">
      <h1 style="font-family: 'Dancing Script', cursive;color: #efc585;">O que você deseja?</h1>
        <p style="font-family: 'Dancing Script', cursive;font-size: 42px;">Emagrecer</p>
      </div>
    </div>

    <div class="carousel-item">
      <div class="view">
      <a href="#">
        <img style="height:95vh;"class="d-block w-100" src="https://images.pexels.com/photos/3757942/pexels-photo-3757942.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
          alt="First slide">
        <div class="mask rgba-black-strong"></div></a>
      </div>
      <div class="carousel-caption">
      <h1 style="font-family: 'Dancing Script', cursive;color: #efc585;">O que você deseja?</h1>
        <p style="font-family: 'Dancing Script', cursive;font-size: 42px;">Relaxar</p>
      </div>
    </div>

  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
</section>



        <section id="area" class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h1 style="color: rgb(239,197,133);">Escolha por <strong>Área</strong></h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4 col-xl-3" style="margin: 10px auto;"><a href="catalog"><img class="img-thumbnail" src="https://images.pexels.com/photos/3188/love-romantic-bath-candlelight.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="border-radius: 100%;width: 250px;height: 250px;"></a></div>
                    <div class="col-md-6 col-lg-4 col-xl-3" style="margin: 10px auto;"><a href="catalog"><img class="img-thumbnail" src="https://images.pexels.com/photos/7700/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="border-radius: 100%;width: 250px;height: 250px;"></a></div>
                    <div class="col-md-6 col-lg-4 col-xl-3" style="margin: 10px auto;"><a href="catalog"><img class="img-thumbnail" src="https://images.pexels.com/photos/3865799/pexels-photo-3865799.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="border-radius: 100%;width: 250px;height: 250px;"></a></div>
                </div>
            </div>
        </section>
        <section id="treatment" class="clean-block clean-info dark" style="background-color: rgb(255,255,255);">
            <div class="container">
                <div class="block-heading">
                    <h1 style="color: rgb(239,197,133);font-family: Montserrat, sans-serif;">Escolha por <strong>Tratamento</strong></h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4 col-xl-3" style="margin: 10px auto;"><img class="img-thumbnail" src="https://images.pexels.com/photos/3212164/pexels-photo-3212164.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="border-radius: 100%;width: 250px;height: 250px;"></div>
                    <div class="col-md-6 col-lg-4 col-xl-3" style="margin: 10px auto;"><img class="img-thumbnail" src="https://images.pexels.com/photos/3997993/pexels-photo-3997993.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="border-radius: 100%;width: 250px;height: 250px;"></div>
                    <div class="col-md-6 col-lg-4 col-xl-3" style="margin: 10px auto;"><img class="img-thumbnail" src="https://images.pexels.com/photos/3865797/pexels-photo-3865797.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="border-radius: 100%;width: 250px;height: 250px;"></div>
                </div>
            </div>
        </section>
        <section id="aboutus" class="clean-block features" style="background-color: rgb(244,244,244);">
            <div class="container">
                <div class="block-heading">
                    <h1 style="color: #efc585;font-family: 'Dancing Script',cursive;">Sobre Nós</h1>
                    <p style="max-width:800px;font-family: 'Dancing Script', cursive;font-size: 24px;color: rgb(0,0,0);">A Corporalle é uma união do melhor em termos de estética e segurança em seus tratamentos.&nbsp;<br></p>
                    <h2 style="color: #efc585;font-family: 'Dancing Script', cursive;margin-top: 32px;">Veja Fotos</h2>
                </div>
                <div class="row justify-content-center"><a href="gallery"><img id="gallery"></div></a>
            </div>
        </section>
        <section class="clean-block slider dark"></section>
        <section id="local" class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h1 style="color: #efc585;font-family: 'Dancing Script',cursive;">Localização</h1>
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