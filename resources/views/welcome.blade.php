@extends('index')
@section('content')
    @include('partials.hero-area')
    <section class="elements-area section-padding-100-0">
        <div class="container">
            <div class="row">

               
                <!-- ========== Icon Boxes ========== -->
                <div class="col-12">
                    <div class="elements-title mb-30">
                        <div class="line"></div>
                        <h2>Acesso rápido</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        <!-- Single Service Area -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-service-area d-flex mb-100">
                                <a href="https://sistema.m2dtelecom.com.br/central_assinante_web/login">
                                    <div class="icon">
                                        <i class="icon-check"></i>
                                    </div>
                                </a>
                                <div class="text">
                                    <a href="https://sistema.m2dtelecom.com.br/central_assinante_web/login">
                                        <h5>Segunda via do boleto</h5>
                                    </a>
                                    <p>Imprima a segunda via do boleto com rapidez e segurança.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-service-area d-flex mb-100">
                                <div class="icon">
                                    <i class="icon-idea"></i>
                                </div>
                                <div class="text">
                                    <h5>Assinar agora!</h5>
                                    <p>Tenhaa melhor experiencia em banda larga, assine agora mesmo.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-service-area d-flex mb-100">
                                
                                <a href="https://sistema.m2dtelecom.com.br/central_assinante_web/login">
                                    <div class="icon">
                                        <i class="icon-tax-1"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Fale consco</h5>
                                </a>
                                        <p>Se ainda restou alguma duvida, tire agora mesmo.</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    @include('partials.prices')
    <section class="cta-2-area wow fadeInUp" data-wow-delay="100ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="cta-text">
                            <h4>Temos corporativos de acordo com a sua demanda, legal né ? Contrate !</h4>
                        </div>
                        <div class="cta-btn">
                            <a href="#" class="btn credit-btn box-shadow">Clique aqui !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <p>Temos muitas ...</p>
                        <h2>Vantagens para você !</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="200ms">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                                <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                            </svg>
                        </div>
                        <div class="text">
                            <h5>Instalação Facilitada</h5>
                            <p>Instalação facilitada de equipamentos para o seu sucesso.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                                <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
                                <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                            </svg>
                        </div>
                        <div class="text">
                            <h5>Wi-Fi em Casa</h5>
                            <p>Conecte vários equipamentos em qualquer lugar da casa.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-telephone-x-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm9.261 1.135a.5.5 0 0 1 .708 0L13 2.793l1.146-1.147a.5.5 0 0 1 .708.708L13.707 3.5l1.147 1.146a.5.5 0 0 1-.708.708L13 4.207l-1.146 1.147a.5.5 0 0 1-.708-.708L12.293 3.5l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </div>
                        <div class="text">
                            <h5>Sem uso da linha telefonica</h5>
                            <p>Conexão com a Internet sem a necessidade de Linha Telefonica.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-hdd-network-fill" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h5.5v3A1.5 1.5 0 0 0 6 11.5H.5a.5.5 0 0 0 0 1H6A1.5 1.5 0 0 0 7.5 14h1a1.5 1.5 0 0 0 1.5-1.5h5.5a.5.5 0 0 0 0-1H10A1.5 1.5 0 0 0 8.5 10V7H14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1z"/>
                            </svg>
                        </div>
                        <div class="text">
                            <h5>Internet de Qualidade</h5>
                            <p>Contamos com Links de Altissima Qualidade</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                            </svg>
                        </div>
                        <div class="text">
                            <h5>Conectado 24/7</h5>
                            <p>Internet Sem Limites, navegue o quanto você quizer.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="45" fill="currentColor" class="bi bi-mic-fill" viewBox="0 0 16 16">
                                <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"/>
                                <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </div>
                        <div class="text">
                            <h5>Suporte Técnico</h5>
                            <p>Contamos com Técnicos Treinados e Capacitados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg id="svgLine" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2000 250" preserveAspectRatio="xMinYMax">

        <polygon points="-150,300 200,90 550,140 800,60 1100,150 1400,100 1700,10 1900,50 2500,90 2500,300" fill="url(#BglinierGradient)" stroke="none">
        </polygon>
        
        <polyline points="-150,244 200,90 550,140 800,60 1100,150 1400,100 1700,10 1900,50 2500,90 2500,500" fill="none" stroke="#7668af" stroke-width="0">
        </polyline>
        
        <text x="140" y="20" fill="#8b949b" style="font-size: 120%; font-weight: 400;">Nevegando a</text>
        <text x="130" y="60" fill="#8b949b" style="font-size: 250%; font-weight: 300;">5 Mega</text>
        
        <text x="495" y="60" fill="#8b949b" style="font-size: 120%; font-weight: 400;">Navegando a</text>
        <text x="485" y="100" fill="#8b949b" style="font-size: 250%; font-weight: 300;">3 Mega</text>
        
        <text x="745" y="0" fill="#8b949b" style="font-size: 120%; font-weight: 400;">Navegando a</text>
        <text x="735" y="40" fill="#8b949b" style="font-size: 250%; font-weight: 300;">7 Mega</text>
        
        <text x="1045" y="70" fill="#8b949b" style="font-size: 120%; font-weight: 400;">Navegando a</text>
        <text x="1035" y="110" fill="#8b949b" style="font-size: 250%; font-weight: 300;">2 Mega</text>
        
        <text x="1340" y="30" fill="#8b949b" style="font-size: 120%; font-weight: 400;">Navegando a</text>
        <text x="1330" y="70" fill="#8b949b" style="font-size: 250%; font-weight: 300;">4 Mega</text>
        
        <text x="1644" y="-45" fill="#8b949b" style="font-size: 120%; font-weight: 400;">Navegando a</text>
        <text x="1620" y="-5" fill="#8b949b" style="font-size: 250%; font-weight: 300;">10 Mega</text>
        
        <text x="1838" y="-20" fill="#8b949b" style="font-size: 120%; font-weight: 400;">Navegando a</text>
        <text x="1830" y="20" fill="#8b949b" style="font-size: 250%; font-weight: 300;">8 Mega</text>
        
        <ellipse id="svg_1" rx="15" ry="15" cx="200" cy="90" fill="#FF6501" stroke="#ffffff" stroke-width="5"></ellipse>
        <ellipse id="svg_2" rx="10" ry="10" cx="550" cy="140" fill="#016EF4" stroke="#ffffff" stroke-width="5"></ellipse>
        <ellipse id="svg_3" rx="15" ry="15" cx="800" cy="60" fill="#FF6501" stroke="#ffffff" stroke-width="5"></ellipse>
        <ellipse id="svg_4" rx="15" ry="15" cx="1100" cy="150" fill="#FF6501" stroke="#ffffff" stroke-width="5"></ellipse>
        <ellipse id="svg_5" rx="10" ry="10" cx="1400" cy="100" fill="#016EF4" stroke="#ffffff" stroke-width="5"></ellipse>
        <ellipse id="svg_6" rx="10" ry="10" cx="1700" cy="10" fill="#016EF4" stroke="#ffffff" stroke-width="5"></ellipse>
        <ellipse id="svg_7" rx="9" ry="9" cx="1900" cy="50" fill="#016EF4" stroke="#ffffff" stroke-width="5"></ellipse>
        <ellipse id="svg_8" rx="6" ry="6" cx="2500" cy="90" fill="#016EF4" stroke="#ffffff" stroke-width="5"></ellipse>
        <ellipse id="svg_9" rx="6" ry="6" cx="2200" cy="90" fill="#016EF4" stroke="#ffffff" stroke-width="5"></ellipse>
        
        <defs>
        <linearGradient id="BglinierGradient" x1="0" y1="0" x2="0" y2="1">
        <stop id="BgLinierGradientStop_1" stop-opacity="1" stop-color="#000000" offset="0"></stop>
        <stop id="BgLinierGradientStop_2" stop-opacity="1" stop-color="#000000" offset="1"></stop>
        </linearGradient>
        </defs>
        </svg>
        <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-lg-8">
                        <div class="nl-content text-center">
                            <h2>Facilidades com a Central do Assinante</h2>
                            <p>O Acesso a central do assinate é totalmente web ou mobile, com área financeira, 2º via do boleto,
                                atualização de dados, chamados técnicos e uma gama de serviços exclusivos para clientes..</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection