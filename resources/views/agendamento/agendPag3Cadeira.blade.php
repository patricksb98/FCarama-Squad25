<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/agendBase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/agendPag3Cadeira.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="agendPag2Mesa.html" class="t1"><i class="far fa-arrow-alt-circle-left"></i></a>
        <a href="/reserva2"><i class="far fa-arrow-alt-circle-left"></i></a>
        <img src="{{ asset('img/Barra_de_progresso_4.svg') }}" alt="">
        <img src="{{ asset('img/Logo_-_Paginas_internas.svg') }}" alt="">
    </header>
    <main>
        <article>
            <section>
                <form action="" method="POST">
                    @csrf

                    <section class="mainBase">
                    <div class="texto1">Qual cadeira você deseja reservar?</div>
                    <div class="containerMaster">
                        <div class="legendaMesa">
                            <div class="legenda"> <p>LEGENDA:</p> </div>
                            <div class="legenda">
                                <div class="legenda1"></div> <p>Disponivel</p>
                            </div>
                            <div class="legenda">
                                <div class="legenda2"></div><p>Reservada</p>
                            </div>
                            <div class="legenda">
                                <div class="legenda3"></div><p>Desativada</p>
                            </div>
                            <!--Aqui entra a legenda da mesa-->
                        </div>
                        <fieldset class="containerMesa">

                            <div class="mesa">
                                <div class="cadeirasModal cm1" id="workstation">
                                    @if($reservada1 == 1)
                                        <label class="cadeiras c1" style="background: #FEBBA2">
                                            <input type="radio" name="cadeira" class="btnc" id="ws1" value="<?=$cadeira[0]?>" disabled>
                                            <span class="checkmark"><?=$cadeira[0]?></span>
                                        </label>
                                    @else
                                        <label class="cadeiras c1 t1">
                                            <input type="radio" name="cadeira" class="btnc" id="ws1" value="<?=$cadeira[0]?>">
                                            <span class="checkmark"><?=$cadeira[0]?></span>
                                        </label>
                                    @endif
                                    <div class="cadeiras c0"></div>
                                        @if($reservada2 == 1)
                                            <label class="cadeiras c1" id="we2" style="background: #FEBBA2">
                                                <input type="radio" name="cadeira" class="btnc" id="ws2" value="<?=$cadeira[1]?>" disabled>
                                                <span class="checkmark"><?=$cadeira[1]?></span>
                                            </label>
                                        @else
                                            <label class="cadeiras c1 t1" id="we2">
                                                <input type="radio" name="cadeira" class="btnc" id="ws2" value="<?=$cadeira[1]?>">
                                                <span class="checkmark"><?=$cadeira[1]?></span>
                                            </label>
                                        @endif
                                    <div class="cadeiras c0"></div>
                                        @if($reservada3 == 1)
                                            <label class="cadeiras c1" style="background: #FEBBA2">
                                                <input type="radio" name="cadeira" class="btnc" id="ws3" value="<?=$cadeira[2]?>" disabled>
                                                <span class="checkmark"><?=$cadeira[2]?></span>
                                            </label>
                                        @else
                                            <label class="cadeiras c1 t1">
                                                <input type="radio" name="cadeira" class="btnc" id="ws3" value="<?=$cadeira[2]?>">
                                                <span class="checkmark"><?=$cadeira[2]?></span>
                                            </label>
                                        @endif
                                </div>
                                <div class="mesaCentro">MESA {{session('id_mesa')}}</div>
                                <div class="cadeirasModal cm2" id="weModal2">
                                    <div class="cadeiras c0"></div>
                                    @if($reservada4 == 1)
                                        <label class="cadeiras c1" style="background: #FEBBA2">
                                            <input type="radio" name="cadeira" class="btnc" id="ws4" value="<?=$cadeira[3]?>" disabled>
                                            <span class="checkmark"><?=$cadeira[3]?></span>
                                        </label>
                                    @else
                                        <label class="cadeiras c1 t1">
                                            <input type="radio" name="cadeira" class="btnc" id="ws4" value="<?=$cadeira[3]?>">
                                            <span class="checkmark"><?=$cadeira[3]?></span>
                                        </label>
                                    @endif
                                    <div class="cadeiras c0"></div>
                                    @if($reservada5 == 1)
                                        <label class="cadeiras c1" style="background: #FEBBA2">
                                            <input type="radio" name="cadeira" class="btnc" id="ws5" value="<?=$cadeira[4]?>" disabled>
                                            <span class="checkmark"><?=$cadeira[4]?></span>
                                        </label>
                                    @else
                                        <label class="cadeiras c1 t1">
                                            <input type="radio" name="cadeira" class="btnc" id="ws5" value="<?=$cadeira[4]?>">
                                            <span class="checkmark"><?=$cadeira[4]?></span>
                                        </label>
                                    @endif
                                    <div class="cadeiras c0"></div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </section>
                <section class="footerBase">
                    <a href="/sair" class="btnSair t1"><i class="fas fa-sign-out-alt"></i></a>
                    <button type="submit" class="btnCont t1">CONTINUAR <i class="fas fa-long-arrow-alt-right"></i></button>
                </section>
            </form>

            </section>
        </article>
    </main>
    <footer></footer>
    <script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
</body>
</html>
