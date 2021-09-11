<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/agendBase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/agendPag1Local.css') }}">
    <title>Agendamento</title>
</head>
<body>
    <header>
        <a href="/reserva" class="t1"><i class="far fa-arrow-alt-circle-left"></i></a>
        <img src="{{ asset('img/Barra_de_progresso_2.svg') }}" alt="">
        <img src="{{ asset('img/Logo_-_Paginas_internas.svg') }}" alt="">
    </header>
    <main>
        <article>
                <form action="" method="post">
                    @csrf
                    <section class="mainBase">
                        <div class="local">
                            <p>Qual sede você deseja utilizar?</p>
                            @if(isset($erro))

                            @endif
                            <div class="container">
                            <label class="btn t1" id="saoPaulo"> <strong>SÃO PAULO</strong>
                                    <input type="radio" name="local" class="radioButton" value="São Paulo 2º Andar">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="btn t1" id="santos"><strong>SANTOS</strong>
                                    <input type="radio" name="local" class="radioButton" value="Santos">
                                    <span class="checkmark"></span>
                                </label>

                            </div>
                            <div class="container" id="andar">
                                <label class="btn t1">  <strong>1º ANDAR</strong>
                                    <input type="radio" name="andar" class="radioButton" value="São Paulo 1º Andar">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="btn t1" id="andar2"><strong>2º ANDAR</strong>
                                    <input type="radio" name="andar" class="radioButton" value="São Paulo 2º Andar">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="data">
                            <p>Quando você vem ao escritório?</p>
                            <input type="date" name="data" id="data">
                        </div>
                    </section>
                    <section class="footerBase">
                        <a href="/sair" class="btnSair t1"><i class="fas fa-sign-out-alt"></i></a>
                        <button type="submit" class="btnCont t1">CONTINUAR <i class="fas fa-long-arrow-alt-right"></i></button>
                    </section>
                </form>
        </article>
    </main>
    <footer></footer>
    <script src="{{ asset('js/agendPag1Local.js') }}"></script>
    <script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
</body>
</html>
