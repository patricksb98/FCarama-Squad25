<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/visualizar.css">
    <title>Minhas Reservas</title>
</head>
<body>
<header>
    <a href="/inicio" class="t1"><i class="far fa-arrow-alt-circle-left"></i></a>
    <a href="/sair" class="t1"><i class="fas fa-sign-out-alt"></i></a>
</header>
<main>
    <P>MINHAS RESERVAS</P>
    <div class="containerMaster">
            @csrf
            <div class="box">
                <div class="localAndar">LOCAL</div>
                <div>DATA</div>
                <div>MESA</div>
                <div>CADEIRA</div>
            </div>
            @foreach($reserva as $reserv)
                <div class="box">
                    <div class="localAndar">{{$reserv->local}}</div>
                    <div>{{$reserv->dia}}</div>
                    <div>{{$reserv->id_mesa}}</div>
                    <div>{{$reserv->id_cadeira}}</div>
                    <form method="post" action="/reserva/remover/{{$reserv->id}}">
                        {{method_field('DELETE')}}
                        {!! csrf_field() !!}
                        <button class="canc">Excluir</button>
                    </form>
                </div>
            @endforeach
    </div>
</main>
<footer>

</footer>
<script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
</body>
</html>
