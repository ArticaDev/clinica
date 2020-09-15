@extends('layouts.default')
@section('content')

<main class="page catalog-page">
        <section class="clean-block clean-catalog dark" style="padding-top:50px;">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-color">Tratamentos</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="content" style="padding-top:50px;">
                    <div class="row align-items-center">
                        <div class="catalog col-md-6 col-lg-4 col-xl-3 d-flex flex-column justify-content-center align-items-center" style="margin: 10px auto;">
                            <a href="product">
                            <img class="img-thumbnail" src="https://images.pexels.com/photos/3188/love-romantic-bath-candlelight.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="border-radius: 100%;width: 250px;height: 250px;padding: 0px;" /></a>
                            <a href="product"><h3 class="text-center" style="margin-top: 25px;margin-bottom:50px;">Título do Procedimento 1</h3></a>
                        </div>
                        <div class="catalog col-md-6 col-lg-4 col-xl-3 d-flex flex-column justify-content-center align-items-center" style="margin: 10px auto;">
                            <a href="product">
                            <img class="img-thumbnail" src="https://images.pexels.com/photos/3188/love-romantic-bath-candlelight.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="border-radius: 100%;width: 250px;height: 250px;padding: 0px;" /></a>
                            <a href="product"><h3 class="text-center" style="margin-top: 25px;margin-bottom:50px;">Título do Procedimento 1</h3></a>
                        </div>
                        <div class="catalog col-md-6 col-lg-4 col-xl-3 d-flex flex-column justify-content-center align-items-center" style="margin: 10px auto;">
                            <a href="product">
                            <img class="img-thumbnail" src="https://images.pexels.com/photos/3188/love-romantic-bath-candlelight.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="border-radius: 100%;width: 250px;height: 250px;padding: 0px;" /></a>
                            <a href="product"><h3 class="text-center" style="margin-top: 25px;margin-bottom:50px;">Título do Procedimento 1</h3></a>
                        </div> 
                        
   

                        <p class="pagination">
                            <a class="pagination__next" href="catalog.blade.php">Next Page</a>
                        </p>   
                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection