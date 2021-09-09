<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/agendBase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/agendPag2Mesa.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
<<<<<<< HEAD
        <a href="agendPag1Local.html" class="t1"><i class="far fa-arrow-alt-circle-left"></i></a>
=======
        <a href="/reserva"><i class="far fa-arrow-alt-circle-left"></i></a>
>>>>>>> 6df36278217d106e9ad87dd7810bbc80b709c8eb
        <img src="{{ asset('img/Barra_de_progresso_3.svg') }}" alt="">
        <img src="{{ asset('img/Logo_-_Paginas_internas.svg') }}" alt="">
    </header>

    <main>
        <article>

            <form method="POST">
                @csrf
                <section class="mainBase">
                    <div class="containerForm">
                        <div class="box1"><label for="">Qual mesa você deseja reservar?</label></div>
                        <div class="containerBox">
                            <div class="box2"><p>ÁREA DE LAZER</p></div>
                            <div class="boxMesa">
                                @if($local == "São Paulo 1º Andar")
                                    @for($i = 1; $i <= 30; $i++)
                                        @if(count($reservas->where('dia', $data)->where('local', $local)) >= 240)
                                    <label class="containerMesa" style="background: #FEBBA2">
                                        <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" disabled>
                                        <span class="checkmark">{{$i}}</span>
                                    </label>
                                        @elseif(count($reservas->where('dia', $data)->where('id_mesa', $i)->where('local', $local)) == 5)
                                            <label class="containerMesa" style="background: #FEBBA2">
                                                <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" disabled>
                                                <span class="checkmark">{{$i}}</span>
                                            </label>
                                        @else
                                            <label class="containerMesa t1">
                                                <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}">
                                                <span class="checkmark">{{$i}}</span>
                                            </label>
                                        @endif
                                    @endfor

                                @elseif($local == "São Paulo 2º Andar")
                                        @for($i = 31; $i <= 60; $i++)
                                            @if(count($reservas->where('dia', $data)->where('local', $local)) >= 240)
                                                <label class="containerMesa" style="background: #FEBBA2">
                                                    <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" disabled>
                                                    <span class="checkmark">{{$i}}</span>
                                                </label>
                                            @elseif(count($reservas->where('dia', $data)->where('id_mesa', $i)->where('local', $local)) == 5)
                                                <label class="containerMesa" style="background: #FEBBA2">
                                                    <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" disabled>
                                                    <span class="checkmark">{{$i}}</span>
                                                </label>
                                            @else
                                                <label class="containerMesa t1">
                                                    <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}">
                                                    <span class="checkmark">{{$i}}</span>
                                                </label>
                                            @endif
                                        @endfor

                                @elseif($local == "Santos")
                                        @for($i = 1; $i <= 10; $i++)
                                            @if(count($reservas->where('dia', $data)) >= 40)
                                                <label class="containerMesa" style="background: #FEBBA2">
                                                    <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" disabled>
                                                    <span class="checkmark">{{$i}}</span>
                                                </label>
                                            @elseif(count($reservas->where('dia', $data)->where('id_mesa', $i)->where('local', $local)) == 5)
                                                <label class="containerMesa" style="background: #FEBBA2">
                                                    <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}" disabled>
                                                    <span class="checkmark">{{$i}}</span>
                                                </label>
                                            @else
                                                <label class="containerMesa t1">
                                                    <input type="radio" name="id_mesa" class="radioButton" value="{{$i}}">
                                                    <span class="checkmark">{{$i}}</span>
                                                </label>
                                            @endif
                                        @endfor
                                    @endif

                            </div>
                            <div class="box3"><p>ENTRADA PRINCIPAL</p></div>
                        </div>
                    </div>
                    <!--<input type="text" name="id_mesa">-->

                </section>
                <section class="footerBase">
                    <a href="/sair" class="btnSair t1"><i class="fas fa-sign-out-alt"></i></a>
                    <button type="submit" class="btnCont t1">CONTINUAR <i class="fas fa-long-arrow-alt-right"></i></button>
                </section>
            </form>
        </article>
    </main>
    <footer></footer>

    <script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
</body>
</html>
