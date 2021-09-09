<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/agendBase.css">
    <link rel="stylesheet" href="css/agendPag4Confirme.css">
    <title>Document</title>
</head>
<body>
<<<<<<< HEAD
<<<<<<< HEAD
    <header>
        <a href="agendPag3Cadeira.html" class="t1"><i class="far fa-arrow-alt-circle-left"></i></a>
        <img src="{{ asset('img/Barra_de_progresso_5.svg') }}" alt="">
        <img src="{{ asset('img/Logo_-_Paginas_internas.svg') }}" alt="">
    </header>
    <main>
        <article>
=======
<header>
    <a href="/reserva3"><i class="far fa-arrow-alt-circle-left"></i></a>
    <img src="../img/Barra_de_progresso_5.svg" alt="">
    <img src="../img/Logo_-_Paginas_internas.svg" alt="">
</header>
<main>
    <article>
>>>>>>> 6df36278217d106e9ad87dd7810bbc80b709c8eb

        <form method="post">
            @csrf
            <section class="mainBase">
                <div class="containerMaster">
                    <p class="subTitulo">Revise e confirme os dados da sua reserva:</p>
                    <div class="container">
                        <div class="box">
                            <div class="local">
                                <!-- Nessa div entra o local da reserva-->
                                <p> <?=$local?></p>
                            </div>
                            <div class="mesaCadeira">
                                <!-- Aqui entra o numnero da mesa e cadeira-->
                                <p>Mesa: <?=$mesa?> </p>
                                <p>Cadeira: <?=$cadeira?></p>
                            </div>
                        </div>
                        <div class="data">
                            <!--Aqui aparece a data reservada-->
                            <p>Data: <?=$data?></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footerBase">
<<<<<<< HEAD
                <a href="agendPag1Local.html" class="t1">Alterar dados da reserva</a>
                <button type="submit" class="btnCont t1">CONFIRMAR <i class="fas fa-long-arrow-alt-right"></i></button>
                <a href="/sair" class="btnSair t1"><i class="fas fa-sign-out-alt"></i></a>
=======
                <a href="agendPag1Local.html">Alterar dados da reserva</a>
                <button type="submit" class="btnCont">  Confirmar  <i class="fas fa-long-arrow-alt-right"></i></button>
>>>>>>> 9fb3dc1d3731953e87e776550a8ed2189f1cebd5
            </section>
        </form>


    </article>
</main>
<footer>

<<<<<<< HEAD
    </footer>
    <script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
=======
</footer>
<script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
>>>>>>> 9fb3dc1d3731953e87e776550a8ed2189f1cebd5
</body>
</html>
