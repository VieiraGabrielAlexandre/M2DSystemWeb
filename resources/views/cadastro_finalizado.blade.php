@extends('index')
@section('content')
    @include('partials.hero-area')
    <section class="features-area section-padding-100-0">
        <div class="container">
                <h2 class=""> Agradecemos seu cadastro, {{ $nome }}.</h2>

                <h3> Em breve entraremos em contatos, pelos meios cadastrados.</h3>
        </div>
    </section>
@endsection