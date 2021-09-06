<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
</head>
<body>
    <header>
        <a href="#">Voltar</a>
        <img src="" alt="">
        <img src="" alt="">
    </header>
    <main>
        <article>

            <section>
                <form action="" method="post">
                    @csrf
                    <label for="">Qual sede você deseja utilizar?</label>
                    <input type="text" name="local" value="São Paulo">
                    <label for="">Qaundo você vem ao escritório?</label>
                    <input type="date" name="data" id="data">
                    <button type="submit">Continuar</button>
                    <a href="/sair">Sair</a>
                </form>
            </section>
        </article>
    </main>
    <footer></footer>
</body>
</html>
