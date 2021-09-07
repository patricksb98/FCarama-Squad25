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
        <a href="agendPag3Cadeira.html">Voltar</a>
        <img src="" alt="">
        <img src="" alt="">
    </header>
    <main>
        <article>
            <p>Revise e confirme os dados da sua reserva:</p>
            <form method="post">
                @csrf
            <section>
                <div class="container">
                    <div class="local">
                        <!-- Nessa div entra o local da reserva-->
                        <p>Local: <?=$local?></p>
                    </div>
                    <div class="mesaCadeira">
                        <!-- Aqui entra o numnero da mesa e cadeira-->
                        <p>Mesa: <?=$mesa?> Cadeira: <?=$cadeira?></p>
                    </div>
                </div>
                <div class="data">
                    <!--Aqui aparece a data reservada-->
                    <p>Data: <?=$data?></p>
                </div>
            </section>
            <section>
                <a href="agendPag1Local.html">Alterar dados da reserva</a>
                <button type="submit">Confirmar</button>
            </section>
            </form>


        </article>
    </main>
    <footer>

    </footer>
</body>
</html>
