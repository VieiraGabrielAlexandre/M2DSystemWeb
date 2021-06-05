@extends('index')
@section('content')
    @include('partials.hero-area')
    <section class="features-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-end">
                <!-- Heading -->
                <h2 class="title">Perguntas<span> Frequentes</span></h2>
            </div>
            <p>
                <b><i>Duvidas frequentes:</b></i><br>
                <b>Como baixar a segunda via do boleto?</b><br>
                Acesse a ‘’Minha Central’’ e digite o CPF do assinante. <br>Em seguida aparecerá a aba de ‘’Ultimas faturas’’, para atualizar clique em atualizar e para imprimir clique em imprimir.<br>
            <p>
                <!-- <a href="https://sistema.m2dtelecom.com.br/central_assinante_web/login" class="btn btn-transparent-black btn-lg" data-animation="fadeInDown">Central do Assinante</a>  #Ajustado por Willian Carvalho em 04/08/2019 para trazer URL Correta -->
                <a href="https://sistema.m2dtelecom.com.br/central_assinante_web/login" class="btn credit-btn box-shadow" data-animation="fadeInDown">Central do Assinante</a>
                <br>
                <br>
                <b>Telefones para contato?</b><br>
                Para contato com a M2D Telecom você pode ligar em nossa central ou por whatsapp nos numeros 5921-2348
                ou 5921-3209<br>
                <br>
    
                <b>O que fazer quando não há internet?</b><br>
                Verifique primeiramente se sua fatura não encontra-se em atraso, pois isto comprometerá em sua conexão<br>
                Desligue o roteador da tomada por 30 segundos e ligue-o novamente;<br>
                Verifique se você esta realmente conectado em sua rede Wifi<br>
                Verifique se o cabo de rede esta conectado na porta wan atrás do seu roteador, se não, coloque-a na porta informada;<br>
                Caso realize este procedimentos e sua conexão não volte, entre em contato com nosso suporte técnico no número 5921-2348 via WhatsApp e Fixo. <br>
                <a href="./suporte.php" class="btn credit-btn box-shadow" data-animation="fadeInDown">Suporte</a>
                <br>
                <br>
    
                <b>Como fazer a adesão da internet?</b><br>
                Clique na aba Assine agora, preencha o formulário e aguarde nosso setor comercial entrar em contato com você.<br>
                Se preferir você também pode entrar em contato conosco em nossa central <span class="fa fa-whatsapp" aria-hidden="true"></span>5921-2348 e 5921-3209<br>
                <a href="https://sistema.m2dtelecom.com.br/index.php?tipo=ecommerce&page=produtos" class="btn credit-btn box-shadow" data-animation="fadeInDown">Adquirir</a>
                <br>
                <br>
    
    
                <b>Como faço quando quero mudar de endereço?</b><br>
                Entre em contato com nossa central para informar o novo endereço e verificar a disponibilidade. Será cobrado a taxa de R$100,00 para a mudança.<br>
                <a href="https://sistema.m2dtelecom.com.br/index.php?tipo=ecommerce&page=produtos" class="btn credit-btn box-shadow" data-animation="fadeInDown">Alterações</a>
                <br>
                <br>
    
                <b>Como faço para alterar a titularidade?</b><br>
                Para alteração da titularidade é necessário fazer outro cadastro e realizar o pagamento da taxa de 50,00R$, entre em contato com nossa central para realizar o procedimento. <br>
                <a href="https://sistema.m2dtelecom.com.br/index.php?tipo=ecommerce&page=produtos" class="btn credit-btn box-shadow" data-animation="fadeInDown">Alterações</a>
                <br>
                <br>
    
                <b>O que fazer quando não sou atendido pela central ?</b><br>
                Em períodos de chuvas nossa central fica congestionada ocasionando maior tempo de espera de atendimento, neste caso abra um chamado através na sua central do assinante que entratemos em contato, <br>
                ou nos encaminhe um email: m2dtelecom@gmail.com.<br>
                <!-- <a href="https://sistema.m2dtelecom.com.br/central_assinante_web/login" class="btn btn-transparent-black btn-lg" data-animation="fadeInDown">Central do Assinante</a> #Ajustado por Willian Carvalho em 04/08/2019 para trazer URL Correta -->
                <a href="https://sistema.m2dtelecom.com.br/central_assinante_web/login" class="btn credit-btn box-shadow" data-animation="fadeInDown">Central do Assinante</a>
                <br>
                <br>
    
                <b>O que fazer quando a central demora para atender?</b><br>
                Aguarde a ligação conforme informado na fila de atendimento. Porém, o seu chamado já estará em aberto e entraremos em contato através do numero discado, caso quiser desistir de esperar. <br>
                <!-- <a href="https://sistema.m2dtelecom.com.br/central_assinante_web/login" class="btn btn-transparent-black btn-lg" data-animation="fadeInDown">Central do Assinante</a>  #Ajustado por Willian Carvalho em 04/08/2019 para trazer URL Correta -->
                <a href="https://sistema.m2dtelecom.com.br/central_assinante_web/login" class="btn credit-btn box-shadow" data-animation="fadeInDown">Central do Assinante</a>
                <br>
                <br>
    
                <b>Meu boleto venceu e agora ?</b><br>
                Em virtude da adequação do Sistema Bancário Nacional, no que diz respeito à Nova Plataforma de Cobrança, os boletos vencidos poderão ser quitados em qualquer instituição financeira, independente do Banco emissor, conforme cronograma de datas e valores abaixo:<br>
    
                A partir de 25 de agosto/2018, valores de R$ 400,00 ou mais.<br>
                A partir de 13 de outubro/2018, valores de R$ 100,00 ou mais.<br>
                A partir de 27 de outubro/2018, valores de R$ 0,01 ou mais.<br>
                Em 10 de novembro/2018 - processo concluído, com a inclusão dos boletos de cartões de crédito e de doações, entre outros.<br>    
        </div>
    </section>
@endsection