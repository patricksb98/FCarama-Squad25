<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/agendBase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/agendPag1Local.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsivo/responsivoLocal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <title>Encontro Dos Laranjas</title>
</head>
<body>
    <header>
        <a href="/inicio" class="t1" title="Voltar"><i class="far fa-arrow-alt-circle-left"></i></a>
        <div class="compromisso">
            <p>Onde e Quando?</p>
            <img src="{{ asset('img/Barra_de_progresso_2.svg') }}" alt="">
        </div>
        <img src="{{ asset('img/Logo_-_Paginas_internas.svg') }}" class="logo" alt="Logo FCamara">
    </header>
    <main>
        <article>
                <form action="" method="post">
                    @csrf
                    <section class="mainBase">
                        <div class="local">
                            <p>Qual sede você deseja utilizar?</p>

                            <div class="container">
                            <label class="btn t1" id="saoPaulo"> <strong>SÃO PAULO</strong>
                                    <input type="radio" name="local" class="radioButton" value="São Paulo 1º Andar" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="btn t1" id="santos"><strong>SANTOS</strong>
                                    <input type="radio" name="local" class="radioButton" value="Santos">
                                    <span class="checkmark"></span>
                                </label>

                            </div>
                            <div class="container andar" id="andar">
                                <label class="btn btnAndar t1">  <strong>1º ANDAR</strong>
                                    <input type="radio" name="local" class="radioButton" value="São Paulo 1º Andar">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="btn btnAndar t1" id="andar2"><strong>2º ANDAR</strong>
                                    <input type="radio" name="local" class="radioButton" value="São Paulo 2º Andar">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="data">
                            <p>Quando você vem ao escritório?</p>

                            <input id="datepicker" class="datePicker" name="data" required autocomplete="off"></input>
                                <script>
                                $( "#datepicker" ).datepicker({
                                    autoSize: true,
                                    maxDate: "+1m",
                                    minDate: Number(0),
                                    dateFormat: 'dd-mm-yy',
                                });

                                </script>

                        </div>
                    </section>
                    <section class="footerBase">
                        <a href="/sair" class="btnSair t1" title="Sair"><i class="fas fa-sign-out-alt"></i></a>
                        <button type="submit" class="btnCont t1">CONTINUAR <i class="fas fa-long-arrow-alt-right"></i></button>
                    </section>
                </form>
        </article>
    </main>
    <footer>

        @if(isset($erro))
            <div class="alerta"id="alerta">
                <p>Você já tem uma reserva para esse dia! <br> Cancele sua reserva atual caso queira mudar a data.</p>
                <div class="btnok t1" id="btnok">OK</div>
            </div>
        @endif

        @if(isset($erroLimite))
        <div class="alerta"id="alerta">
            <p>Não há mais vagas para o dia escolhido nesse local! <br> Favor escolher outro dia ou local.</p>
            <div class="btnok t1" id="btnok">OK</div>
        </div>
        @endif

    </footer>
    <script src="{{ asset('js/agendPag1Local.js') }}"></script>
    <script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
</body>
</html>
