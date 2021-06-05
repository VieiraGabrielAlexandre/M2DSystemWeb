@extends('index')
@section('content')
    @include('partials.hero-area')
    <section class="elements-area p-3">
        <div class="container d-flex justify-content-center">
            

                <ul class="list-group ">
                    <li class="list-group-item d-flex justify-content-center"><h3>Dicas do nosso suporte técnico<h3></li>

                    <li class="list-group-item list-group-item-danger">Não apertar o botão reset do roteador</li>
                    <li class="list-group-item list-group-item-danger">Verificar se o cabo de rede esta conectado na porta wan atras do roteador</li>
                    <li class="list-group-item list-group-item-warning">Em casos de chuva desligar o roteador da tomada</li>
                    <li class="list-group-item list-group-item-danger">Caso estiver sem internet retirar o roteador da tomada por 30 segundos e colocarnovamente</li>
                    <li class="list-group-item list-group-item-white"></li>
                    <li class="list-group-item list-group-item-info">Se sua mensalidade estiver em atraso a partir do primeiro dia ocorrerá instabilidade na sua conexão e após os 10 dias sua internet irá bloquear até a baixa do pagamento.</li>
                </ul>
        </div>
    </section>
    <!-- ##### Elements Area End ##### -->
@endsection