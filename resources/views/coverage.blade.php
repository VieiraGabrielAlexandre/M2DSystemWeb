@extends('index')
@section('content')
    @include('partials.hero-area')
    <section class="features-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-end">
                <table class="table align-middle">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Ruas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                            <td>Grajaú</td>
                            <td>Todas</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                            <td>Vargem Grande</td>
                            <td>Todas</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                            <td>Parelheiros</td>
                            <td>Todas</td>
                        </tr>
                        <th scope="row">4</th>
                            <td>Jardim Progresso</td>
                            <td>Todas</td>
                        </tr>
                        <th scope="row">5</th>
                            <td>Horizonte Azul</td>
                            <td>Todas</td>
                        </tr>
                        <th scope="row">6</th>
                            <td>Capão Redondo</td>
                            <td>Todas</td>
                        </tr>
                        <th scope="row">7</th>
                            <td>Jardim Silveira</td>
                            <td>Todas</td>
                        </tr>
                    </tbody>
                </table>

                <h5 class="text-center">Para saber se sua região é atendida, consulte disponibilidade.</<h2>
                    <a href="activities/registero.php" class="btn credit-btn btn-3 m-2">Clique aqui</a>
            </div>
        </div>
    </section>
@endsection