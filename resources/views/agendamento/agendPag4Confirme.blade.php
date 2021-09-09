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
<header>
    <a href="/reserva3"><i class="far fa-arrow-alt-circle-left"></i></a>
    <img src="../img/Barra_de_progresso_5.svg" alt="">
    <img src="../img/Logo_-_Paginas_internas.svg" alt="">
</header>
<main>
    <article>

        <form method="post">
            @csrf
            <section class="mainBase">
                <div class="containerMaster">
                    <p class="subTitulo">Revise e confirme os dados da sua reserva:</p>
                    <div class="container">
                        <div class="box">
                            <div class="local">
                                <!-- Nessa div entra o local da reserva-->
                                <p>Local: <?=$local?></p>
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
                <a href="agendPag1Local.html">Alterar dados da reserva</a>
                <button type="submit" class="btnCont">  Confirmar  <i class="fas fa-long-arrow-alt-right"></i></button>
            </section>
        </form>


    </article>
</main>
<footer>

</footer>
<script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
</body>
</html>
