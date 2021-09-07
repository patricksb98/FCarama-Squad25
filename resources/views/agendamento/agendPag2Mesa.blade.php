<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/agendBase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/agendPag2Mesa.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="agendPag1Local.html"><i class="far fa-arrow-alt-circle-left"></i></a>
        <img src="{{ asset('img/Barra_de_progresso_2.svg') }}" alt="">
        <img src="{{ asset('img/Logo_-_Paginas_internas.svg') }}" alt="">
    </header>

    <main>
        <article>

            <form action="" method="POST">
                @csrf
                <section class="mainBase">
                    <div class="containerForm">
                        <div class="box1"><label for="">Qual mesa você deseja reservar?</label></div>
                        <div class="containerBox">
                            <div class="box2"><p>Area de lazer</p></div>
                            <div class="boxMesa">
                                <label class="containerMesa">
                                    <input type="radio" name="radio" class="radioButton" value="1">
                                    <span class="checkmark">01</span>
                                </label>
                            </div>
                            <div class="box3"><p>Entrada Principal</p></div>
                        </div>
                    </div>
                    <!--<input type="text" name="id_mesa">-->

                </section>
                <section class="footerBase">
                    <button class="btnSair"><a href="/sair">Sair</a></button>
                    <button type="submit" class="btnCont">Continuar <i class="fas fa-long-arrow-alt-right"></i></button>
                </section>
            </form>
        </article>
    </main>
    <footer></footer>

    <script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
</body>
</html>
