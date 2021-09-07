<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="{{ asset('css/agendBase.css') }}">
    <title>Agendamento</title>
</head>
<body>
    <header>
        <a href="#" class="as"><i class="far fa-arrow-alt-circle-left"></i></a>
        <img src="{{ asset('img/Barra_de_progresso_2.svg') }}" alt="">
        <img src="{{ asset('img/Logo_-_Paginas_internas.svg') }}" alt="">
    </header>
    <main>
        <article>

            <section>
                <form action="" method="post">
                    @csrf
                    <section class="mainBase">
                        <label for="">Qual sede você deseja utilizar?</label>
                        <input type="text" name="local" value="São Paulo">
                        <label for="">Quando você vem ao escritório?</label>
                        <input type="date" name="data" id="data">
                    </section>
                    <section class="footerBase">
                        <button class="btnSair"><a href="/sair">Sair</a></button>
                        <button type="submit">Continuar <i class="fas fa-long-arrow-alt-right"></i></button>
                    </section>
                </form>
            </section>
        </article>
    </main>
    <footer></footer>

    <script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
</body>
</html>
