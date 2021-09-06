<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="agendPag1Local.html">Voltar</a>
        <img src="" alt="">
        <img src="" alt="">
    </header>

    <main>
        <article>
            <section>
                <form action="" method="POST">
                    <label for="">Qaul mesa você deseja reservar?</label>
                    <section>
                        <p>Area de lazer</p>
                        <div>
                        <!-- Nessa div entra as mesas para a reserva-->

                        </div>
                        <p>Entrada Principal></p>

                        @if($local == 'São Paulo')
                            @for($i = 1; $i <= 48; $i++)
                                <h1>{{$i}}</h1>
                            @endfor
                        @elseif($local == 'Santos')
                            @for($i = 1; $i <= 4; $i++)
                                <h1>{{$i}}</h1>
                            @endfor
                        @endif

                    </section>
                    <button type="submit"><a href="agendPag3Cadeira.html">Continuar</a></button>
                    <a href="/sair">Sair</a>
                </form>
            </section>
        </article>
    </main>
    <footer></footer>
</body>
</html>
