<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset("css/agendBase.css")}}>
    <link rel="stylesheet" href={{asset("css/agendPag4Confirme.css")}}>
    <link rel="stylesheet" href={{asset("css/responsivo/responsivoConfirme.css")}}>
    <title>Encontro Dos Laranjas</title>
</head>
<body>

    <header>
        <a href="/reserva/etapa3" class="t1" title="Voltar"><i class="far fa-arrow-alt-circle-left"></i></a>
        <div class="compromisso">
            <p>Confirmação</p>
            <img src="{{ asset('img/Barra_de_progresso_5.svg') }}" alt="">
        </div>
        <img src="{{ asset('img/Logo_-_Paginas_internas.svg') }}" class="logo" alt="Logo FCamara">
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
                                <p> <?=$local?></p>
                            </div>
                            <div class="mesaCadeira">
                                <!-- Aqui entra o numnero da mesa e cadeira-->
                                <p>Mesa <?=$mesa?> </p>
                                <p>Cadeira <?=$cadeira?></p>
                            </div>
                        </div>
                        <div class="data">
                            <!--Aqui aparece a data reservada-->
                            <div class="datain d1">{{$diaSemana}}</div>
                            <div class="datain d2">{{$dia}}</div>
                            <div class="datain d3">{{$mes}}</div>
                            <div class="datain d4">{{$ano}}</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footerBase">
                <a href="/reserva/etapa1" class="t1">Alterar dados da reserva</a>
                <button type="submit" class="btnCont t1">CONFIRMAR <i class="fas fa-long-arrow-alt-right"></i></button>
                <a href="/sair" class="btnSair t1" title="Sair"><i class="fas fa-sign-out-alt"></i></a>

            </section>
        </form>


    </article>
</main>

</footer>
<script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
</body>
</html>
