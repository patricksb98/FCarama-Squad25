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
                    @csrf
                    <label for="">Qaul mesa você deseja reservar?</label>
                    <section>
                        <p>Area de lazer</p>
                        <div>
                        <!-- Nessa div entra as mesas para a reserva-->

                        </div>
                        <p>Entrada Principal></p>

                        <input type="text" name="id_mesa">

                    </section>
                    <button type="submit">Continuar</button>
                    <a href="/sair">Sair</a>
                </form>
            </section>
        </article>
    </main>
    <footer></footer>
</body>
</html>
