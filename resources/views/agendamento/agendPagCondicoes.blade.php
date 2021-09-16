<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/agendBase.css">
    <link rel="stylesheet" href="css/agendPagCondicoes.css">
    <link rel="stylesheet" href="css/responsivo/responsivoCondicoes.css">
    <title>Encontro Dos Laranjas</title>
</head>
<body>
    <header class="headerBase">

        <a href="agendPag2Mesa.html" class="t1" title="Voltar"><i class="far fa-arrow-alt-circle-left"></i></a>
        <div class="compromisso">
            <p>Compromisso</p>
            <img src="img/Barra_de_progresso_1.svg" alt="">
        </div>
        <img src="img/Logo_-_Paginas_internas.svg" alt="Logo FCamara">

    </header>
    <main>
        <article class="mainBase">
            <div class="text">
                Você se compromete a seguir os protocolos de Higienização?
            </div>
            <div class="container">
                <div class="box b1">
                    <div class="boxImg bi1"><img src="img/Ilustra_1.svg" alt=""></div>
                    <div class="boxText">Troque a mascara a cada 2 horas.</div>
                </div>
                <div class="box b2">
                    <div class="boxImg bi2"><img src="img/Ilustra_2.svg" alt=""></div>
                    <div class="boxText">Lave as mão com frequência. Use agua e sabão ou álcool em gel.</div>
                </div>
                <div class="box b3">
                    <div class="boxImg bi3"><img src="img/Ilustra_3.svg" alt=""></div>
                    <div class="boxText" >Mantenha a distanciamento social de 1,5 metros.</div>
                </div>
                <div class="box b4">
                    <div class="boxImg bi4"><img src="img/Ilustra_4.svg" alt=""></div>
                    <div class="boxText">Se você se sentir indisposto fique em casa!</div>
                </div>
            </div>
    </article>
    </main>
    <footer class="footerBase">

        <a href="/sair" class="btnDisc t1">DISCORDO<i class="fas fa-long-arrow-alt-right"></i></a>
        <form method="post">
            @csrf
            <button type="submit" class="btnCont t1" name="aceitou" value="1">CONCORDO<i class="fas fa-long-arrow-alt-right"></i></button>
        </form>
        <a href="/sair" class="btnSair t1" title="Sair"><i class="fas fa-sign-out-alt"></i></a>


    </footer>
    <script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
</body>
</html>
