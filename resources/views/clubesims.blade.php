@extends('index')
@section('content')
    <div class="hero-area">
    <div class="hero-slideshow owl-carousel">

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/CLUBE-DE-VANTAGENS.png);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h6 data-animation="fadeInDown" data-delay="100ms">M2D Telecom avisa !</h6>
                            <h2 data-animation="fadeInDown" data-delay="300ms">Agora cliente <span>M2D tem muito mais vantagem</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>
    </div>

    <section class="elements-area p-3">
        <div class="container d-flex justify-content-center">
            

                <ul class="list-group ">
                    <li class="list-group-item d-flex justify-content-center"><h3>Descontos exclusivos no nosso clube de beneficios<h3></li>

                    <li class="list-group-item list-group-item-info">Aplicativos de consultas e exames</li>
                    <li class="list-group-item list-group-item-info">Farmácias</li>
                    <li class="list-group-item list-group-item-info">Filmes e cinemas</li>
                    <li class="list-group-item list-group-item-info">Cursos Gratuitos</li>
                    <li class="list-group-item list-group-item-info">Lojas online</li>
                    <li class="list-group-item list-group-item-info">... Centenas de descontos exclusivos !!</li>
                    <li class="list-group-item d-flex justify-content-center"><a href="https://www.clubesims.com.br/m2dtelecom">Clique aqui</a>, se increva e pegue seus descontos exclusivos !</li>

                </ul>

        </div>
    </section>
</div>

@endsection