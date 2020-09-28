@extends('layouts.app')
@section('content')
   
    <h1 class="display-4 text-center">Bienvenido a la página de Karate</h1>
    <div class="row justify-content-center mt-4">
        <div id="carouselExampleCaptions" class="carousel slide col-md-6" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.wkf.net/imagenes/galeria/karate-1-premier-madrid-2019/ok3.jpg" 
                    class="d-block w-100 h-40" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Karateka 1</h5>
                        <p>Campeonato europeo 2020</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.wkf.net/imagenes/noticias/preview-linz-2016-clash-of-titans-in-male-kata-367.jpg"
                     class="d-block w-100 h-40"  alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Antonio Díaz</h5>
                        <p>Juegos panamericanos.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.budokaifighters.com/media/k2/items/cache/b4d7de5ff725512a637402454dd08203_XL.jpg" 
                    class="d-block w-100 h-40" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kumite</h5>
                        <p>Liga europea</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>    
   
@endsection

