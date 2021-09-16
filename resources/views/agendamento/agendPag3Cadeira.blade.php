<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/agendBase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/agendPag3Cadeira.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsivo/responsivoCadeira.css') }}">
    <title>Encontro Dos Laranjas</title>

</head>
<body>
    <header>
        <a href="/reserva/etapa2" class="t1" title="Voltar"><i class="far fa-arrow-alt-circle-left"></i></a>
        <div class="compromisso">
            <p>Escolha sua estação</p>
            <img src="{{ asset('img/Barra_de_progresso_4.svg') }}" alt="">
        </div>
        <img src="{{ asset('img/Logo_-_Paginas_internas.svg') }}" class="logo" alt="Logo FCamara">
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

                        </div>
                        <fieldset class="containerMesa">

                            <div class="mesa">
                                <div class="cadeirasModal cm1" id="workstation">
                                    @if($reservada1 == 1)
                                        <label class="cadeiras c1">
                                            <strong><?=$cadeira[0]?></strong>
                                            <input type="radio" name="cadeira" class="btnc" id="ws1" value="<?=$cadeira[0]?>" disabled>
                                            <span class="checkmark" style="background: #FEBBA2"></span>
                                        </label>
                                    @else
                                        <label class="cadeiras c1 t1">
                                            <strong><?=$cadeira[0]?></strong>
                                            <input type="radio" name="cadeira" class="btnc" id="ws1" value="<?=$cadeira[0]?>" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    @endif
                                    <div class="cadeiras c0"></div>
                                        @if($reservada2 == 1)
                                            <label class="cadeiras c1" id="we2" >
                                                <strong><?=$cadeira[1]?></strong>
                                                <input type="radio" name="cadeira" class="btnc" id="ws2" value="<?=$cadeira[1]?>" disabled>
                                                <span class="checkmark" style="background: #FEBBA2"></span>
                                            </label>
                                        @else
                                            <label class="cadeiras c1 t1" id="we2">
                                                <strong><?=$cadeira[1]?></strong>
                                                <input type="radio" name="cadeira" class="btnc" id="ws2" value="<?=$cadeira[1]?>" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        @endif
                                    <div class="cadeiras c0"></div>
                                        @if($reservada3 == 1)
                                            <label class="cadeiras c1">
                                                <strong><?=$cadeira[2]?></strong>
                                                <input type="radio" name="cadeira" class="btnc" id="ws3" value="<?=$cadeira[2]?>" disabled>
                                                <span class="checkmark" style="background: #FEBBA2"></span>
                                            </label>
                                        @else
                                            <label class="cadeiras c1 t1">
                                                <strong><?=$cadeira[2]?></strong>
                                                <input type="radio" name="cadeira" class="btnc" id="ws3" value="<?=$cadeira[2]?>" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        @endif
                                </div>
                                <div class="mesaCentro">MESA {{session('id_mesa')}}</div>
                                <div class="cadeirasModal cm2" id="weModal2">
                                    <div class="cadeiras c0"></div>
                                    @if($reservada4 == 1)
                                        <label class="cadeiras c1">
                                            <strong><?=$cadeira[3]?></strong>
                                            <input type="radio" name="cadeira" class="btnc" id="ws4" value="<?=$cadeira[3]?>" disabled>
                                            <span class="checkmark" style="background: #FEBBA2"></span>
                                        </label>
                                    @else
                                        <label class="cadeiras c1 t1">
                                        <strong><?=$cadeira[3]?></strong>
                                            <input type="radio" name="cadeira" class="btnc" id="ws4" value="<?=$cadeira[3]?>" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    @endif
                                    <div class="cadeiras c0"></div>
                                    @if($reservada5 == 1)
                                        <label class="cadeiras c1">
                                            <strong><?=$cadeira[4]?></strong>
                                            <input type="radio" name="cadeira" class="btnc" id="ws5" value="<?=$cadeira[4]?>" disabled>
                                            <span class="checkmark" style="background: #FEBBA2"></span>
                                        </label>
                                    @else
                                        <label class="cadeiras c1 t1">
                                            <strong><?=$cadeira[4]?></strong>
                                            <input type="radio" name="cadeira" class="btnc" id="ws5" value="<?=$cadeira[4]?>" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    @endif
                                    <div class="cadeiras c0"></div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </section>
                <section class="footerBase">
                    <a href="/sair" class="btnSair t1" title="Sair"><i class="fas fa-sign-out-alt"></i></a>
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
