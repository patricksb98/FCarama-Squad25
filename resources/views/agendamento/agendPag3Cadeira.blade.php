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
        <a href="agendPag2Mesa.html">Voltar</a>
        <img src="" alt="">
        <img src="" alt="">
    </header>
    <main>
        <article>
            <section>
                <form action="" method="POST">
                    @csrf
                    <label for="">Qaul cadeira você deseja reservar?</label>
                    <fieldset>
                        <div class="legendaMesa">
                            <!--Aqui entra a legenda da mesa-->
                        </div>
                        <div class="mesa">
                            <div class="cadeirasModal" id="workstation">
                                <div class="cadeiras c1">
                                    <input type="radio" name="cadeira" id="ws1" value="<?=$cadeira[0]?>">
                                </div>
                                <div class="cadeiras c0"></div>
                                <div class="cadeiras c2" id="we2">
                                    <input type="radio" name="cadeira" id="ws2" value="<?=$cadeira[1]?>">
                                </div>
                                <div class="cadeiras c0"></div>
                                <div class="cadeiras c3">
                                    <input type="radio" name="cadeira" id="ws3" value="<?=$cadeira[2]?>">
                                </div>
                            </div>
                            <div class="mesaCentro"></div>
                            <div class="cadeirasModal" id="weModal2">
                                <div class="cadeiras c0"></div>
                                <div class="cadeiras c4">
                                    <input type="radio" name="cadeira" id="ws4" value="<?=$cadeira[3]?>">
                                </div>
                                <div class="cadeiras c0"></div>
                                <div class="cadeiras c5">
                                    <input type="radio" name="cadeira" id="ws5" value="<?=$cadeira[4]?>">
                                </div>
                                <div class="cadeiras c0"></div>
                            </div>
                        </div>
                    </fieldset>
                    <button type="submit">Continuar</button>
                    <a href="/sair">Sair</a>
                </form>

            </section>
        </article>
    </main>
    <footer></footer>
</body>
</html>
