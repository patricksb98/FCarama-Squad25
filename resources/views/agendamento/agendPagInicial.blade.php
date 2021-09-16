<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/paginaInicial.css">
    <link rel="stylesheet" href="../css/responsivo/responsivoPagInicial.css">
    <title>Encontro Dos Laranjas</title>
</head>
<body>
    <header>
        <div class="containerLogo">
            <img src="../img/Logo_-_Paginas_internas.svg" alt="Logo FCamara" class="logo">
            <p class="text">ENCONTRO DOS LARANJAS</p>
        </div>

    </header>
    <main>
        <div class="titulo">Olá {{$nome_consultor}}! O que você deseja fazer?</div>
        <div class="link">
            <a href="/termos" class="linkInter link1 t1" > <div class="btn" >FAZER UMA NOVA RESERVA <i class="fas fa-long-arrow-alt-right"></i></div> </a>
            <a href="/visualizar/reservas" class="linkInter link2 t1"> <div class="btn" >VER MINHAS RESERVAS <i class="fas fa-long-arrow-alt-right"></i></div> </a>
        </div>
    </main>
    <footer>
        <a href="/sair" class="btnSair" title="Sair" ><i class="fas fa-sign-out-alt"></i></a>
    </footer>
    <script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
</body>
</html>
