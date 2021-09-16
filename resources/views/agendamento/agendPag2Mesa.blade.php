<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/agendBase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/agendPag2Mesa.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsivo/responsivoMesa.css') }}">
    <title>EncontroDosLaranjas</title>
</head>
<body>
    <header>
        <a href="/reserva/etapa1" class="t1" title="Voltar"><i class="far fa-arrow-alt-circle-left"></i></a>
        <div class="compromisso">
            <p>Escolha sua mesa</p>
            <img src="{{ asset('img/Barra_de_progresso_3.svg') }}" alt="">
        </div>
        <img src="{{ asset('img/Logo_-_Paginas_internas.svg') }}" class="logo" alt="Logo FCamara">
    </header>

    <main>
        <article>

            <form method="POST">
                @csrf
                <section class="mainBase">
                    <div class="containerForm">
                        <div class="box1"><label for="">Qual mesa você deseja reservar?</label></div>
                        <div class="master">
                            <div class="containerLegenda">
                                <div class="legenda"> <p>LEGENDA:</p> </div>
                                <div class="legenda">
                                    <div class="legenda1"></div> <p>Disponivel</p>
                                </div>
                                <div class="legenda">
                                    <div class="legenda2"></div><p>Reservada</p>
                                </div>
                            </div>
                            <div class="containerBox">
                                <div class="box2"><p>ÁREA DE LAZER</p></div>
                                <div class="boxMesa">

                                    @if($local == "São Paulo 1º Andar")
                                        @for($i = 1; $i <= 30; $i++)
                                            @if($reservasSP >= $limiteSP)
                                        <label class="containerMesa">
                                            <strong>{{$i}}</strong>
                                            <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" disabled>
                                            <span class="checkmark" style="background: #FEBBA2"></span>
                                        </label>
                                            @elseif(array_key_exists($i, $blockedTables) && $blockedTables[$i] > 4)
                                                <label class="containerMesa">
                                                    <strong>{{$i}}</strong>
                                                    <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" disabled>
                                                    <span class="checkmark" style="background: #FEBBA2"></span>
                                                </label>
                                            @else
                                                <label class="containerMesa t1">
                                                    <strong>{{$i}}</strong>
                                                    <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" required>
                                                    <span class="checkmark"></span>
                                                </label>
                                            @endif
                                        @endfor

                                    @elseif($local == "São Paulo 2º Andar")
                                            @for($i = 31; $i <= 60; $i++)
                                                @if($reservasSP >= $limiteSP)
                                                    <label class="containerMesa">
                                                        <strong>{{$i}}</strong>
                                                        <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" disabled>
                                                        <span class="checkmark" style="background: #FEBBA2"></span>
                                                    </label>
                                                @elseif(array_key_exists($i, $blockedTables) && $blockedTables[$i] > 4)
                                                    <label class="containerMesa">
                                                        <strong>{{$i}}</strong>
                                                        <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" disabled>
                                                        <span class="checkmark" style="background: #FEBBA2"></span>
                                                    </label>
                                                @else
                                                    <label class="containerMesa t1">
                                                        <strong>{{$i}}</strong>
                                                        <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" required>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                @endif
                                            @endfor

                                    @elseif($local == "Santos")
                                            @for($i = 1; $i <= 10; $i++)
                                                @if($reservasSantos >= $limiteSantos)
                                                    <label class="containerMesa mesaSantos">
                                                    <strong>{{$i}}</strong>
                                                        <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" disabled>
                                                        <span class="checkmark" style="background: #FEBBA2"></span>
                                                    </label>
                                                    @elseif(array_key_exists($i, $blockedTables) && $blockedTables[$i] > 4)
                                                    <label class="containerMesa mesaSantos">
                                                    <strong>{{$i}}</strong>
                                                        <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" disabled>
                                                        <span class="checkmark" style="background: #FEBBA2"></span>
                                                    </label>
                                                @else
                                                    <label class="containerMesa mesaSantos t1">
                                                        <strong>{{$i}}</strong>
                                                        <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" required>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                @endif
                                            @endfor
                                        @endif

                                </div>
                                <div class="box3"><p>ENTRADA PRINCIPAL</p></div>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="footerBase">
                    <a href="/sair" class="btnSair t1"><i class="fas fa-sign-out-alt"></i></a>
                    <button type="submit" class="btnCont t1" title="Sair">CONTINUAR <i class="fas fa-long-arrow-alt-right"></i></button>
                </section>
            </form>
        </article>
    </main>
    <footer></footer>
    @if(isset($erro))
    <div class="alerta"id="alerta">
        <p> Alguém foi mais rápido que você! <br> Por favor, faça a sua reserva novamente. </p>
        <div class="btnok t1" id="btnok">OK</div>
    </div>
    @endif
    <script src="{{ asset('js/agendPag2mesa.js') }}"></script>
    <script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
</body>
</html>
