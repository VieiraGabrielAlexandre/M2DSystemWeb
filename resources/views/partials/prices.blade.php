<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="price.css">
<!------ Include the above in your HEAD tag ---------->


<div class="container mb-1 mt-5">
    <div class="pricing card-deck flex-column flex-md-row mb-3">
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm" style="background-color: #6A006F !important;">40 Megas</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h3 font-weight-normal text-primary text-center mb-0" style="color: #6A006F !important" data-pricing-value="15">R$ <span class="price">59,99</span><span class="h6 text-muted ml-2">/ por mês</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>24 horas de conexão</li>
                    <li>Garantia de velocidade do plano</li>
                    <li>Adesão grátis</li>
                </ul>
                <a href=" {{ route('cadastro.cliente', ['plano' => 1])}}">
                    <button type="button" class="btn btn-outline-secondary mb-3">Assinar Agora</button>
                </a>
            </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm" style="background-color: #6A006F !important;">60 Megas</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h3 font-weight-normal text-primary text-center mb-0" style="color: #6A006F !important" data-pricing-value="15">R$ <span class="price">69,99</span><span class="h6 text-muted ml-2">/ por mês</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>24 horas de conexão</li>
                    <li>Garantia de velocidade do plano</li>
=                    <li>Taxa de instalação R$250,00</li>
                </ul>
                <a href="{{ route('cadastro.cliente', ['plano' => 2])}}">
                    <button type="button" class="btn btn-outline-secondary mb-3">Assinar Agora</button>
                </a>
            </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm" style="background-color: #6A006F !important;">80 Megas</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h3 font-weight-normal text-primary text-center mb-0" style="color: #6A006F !important" data-pricing-value="15">R$ <span class="price">79,99</span><span class="h6 text-muted ml-2">/ por mês</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>24 horas de conexão</li>
                    <li>Garantia de velocidade do plano</li>
                    <li>Monthly updates</li>
                    <li>Adesão grátis</li>
                </ul>
                <a href="{{ route('cadastro.cliente', ['plano' => 3])}}">
                    <button type="button" class="btn btn-outline-secondary mb-3">Assinar Agora</button>
                </a>
            </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm"  style="background-color: #6A006F !important;">120 Megas - Wifi MAX</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h3 font-weight-normal text-primary text-center mb-0" style="color: #6A006F !important" data-pricing-value="15">R$ <span class="price">89,99</span><span class="h6 text-muted ml-2">/ por mês</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>24 horas de conexão</li>
                    <li>Garantia de velocidade do plano</li>
                    <li>Adesão grátis</li>
                </ul>
                <a href="{{ route('cadastro.cliente', ['plano' => 4])}}">
                    <button type="button" class="btn btn-outline-secondary mb-3">Assinar Agora</button>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="container mb-5 mt-1">
    <div class="pricing card-deck flex-column flex-md-row mb-3">
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm" style="background-color: #ffbb38 !important;">150 Megas - Wifi MAX</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h3 font-weight-normal text-primary text-center mb-0" style="color: #ffbb38 !important" data-pricing-value="15">R$ <span class="price">119,99</span><span class="h6 text-muted ml-2">/ por mês</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>24 horas de conexão</li>
                    <li>Garantia de velocidade do plano</li>
                    <li>Adesão grátis</li>
                </ul>
                <a href="{{ route('cadastro.cliente', ['plano' => 5])}}">
                    <button type="button" class="btn btn-outline-secondary mb-3">Assinar Agora</button>
                </a>
            </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm" style="background-color: #ffbb38 !important;">150 Megas - Wifi MAX</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h3 font-weight-normal text-primary text-center mb-0" style="color: #ffbb38 !important" data-pricing-value="15">R$ <span class="price">89,99</span><span class="h6 text-muted ml-2">/ por mês</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>24 horas de conexão</li>
                    <li>Garantia de velocidade do plano</li>
                    <li>Monthly updates</li>
                    <li>Taxa de instalação R$250,00</li>
                </ul>
                <a href="{{ route('cadastro.cliente', ['plano' => 6])}}">
                    <button type="button" class="btn btn-outline-secondary mb-3">Assinar Agora</button>
                </a>
            </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm" style="background-color: #ffbb38 !important;">300 Megas - Wifi Max</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h4 font-weight-normal text-primary text-center mb-0" style="color: #ffbb38 !important" data-pricing-value="15">R$ <span class="price">189,99</span><span class="h6 text-muted ml-2">/ por mês</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>24 horas de conexão</li>
                    <li>Garantia de velocidade do plano</li>
                    <li>Adesão grátis</li>
                </ul>
                <a href="{{ route('cadastro.cliente', ['plano' => 7])}}">
                    <button type="button" class="btn btn-outline-secondary mb-3">Assinar Agora</button>
                </a>
            </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm"  style="background-color: #ffbb38 !important;">500 Megas - Wifi Max</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h4 font-weight-normal text-primary text-center mb-0" style="color: #ffbb38 !important" data-pricing-value="15">R$ <span class="price">249,99</span><span class="h6 text-muted ml-2">/ por mês</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>24 horas de conexão</li>
                    <li>Garantia de velocidade do plano</li>
                    <li>Adesão grátis</li>
                </ul>
                <a href="{{ route('cadastro.cliente', ['plano' => 9])}}">
                    <button type="button" class="btn btn-outline-secondary mb-3">Assinar Agora</button>
                </a>
            </div>
        </div>
    </div>
</div>
      </div>
    </div>


    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <script type='text/javascript'></script>
