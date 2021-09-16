<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/visualizar.css">
    <link rel="stylesheet" href="../css/responsivo/responsivoVisualizar.css">
    <title>Encontro Dos Laranjas</title>
</head>
<body>
<header>
    <a href="/inicio" title="Voltar"><i class="far fa-arrow-alt-circle-left"></i></a>
    <img src="../img/Logo_-_Paginas_internas.svg" class="logo" alt="Logo FCamara">
</header>
<main>
    <P>Minhas reservas</P>
    <div class="containerMaster">


            <div class="box b1">
                <div class="tab">LOCAL</div>
                <div class="tab" >DATA</div>
                <div class="tab">MESA</div>
                <div class="tab">CADEIRA</div>
            </div>

            @foreach($reserva as $reserv)
                @php($dia = date('d/m/Y', strtotime($reserv->dia)))

                <form method="post" action="/reserva/remover/{{$reserv->id}}" onsubmit="return confirm('Tem certeza?')" >
                    {{method_field('DELETE')}}
                    {!! csrf_field() !!}
                        <div class="box b2">
                        <div>{{$reserv->local}}</div>
                        <div>{{$dia}}</div>
                        <div>{{$reserv->id_mesa}}</div>
                        <div>{{$reserv->id_cadeira}}</div>
                         <div class="canc"> <button class="btncanc">Cancelar</button></div>
                    </div>
                </form>
            @endforeach
    </div>

    @foreach($reserva as $reserv)
        @php($dataController = new \App\Http\Controllers\DataController())
        @php($diaSemana = $dataController->semana(date('D', strtotime($reserv->dia))))
        @php($dia = date('d', strtotime($reserv->dia)))
        @php($mes = $dataController->mes(date('m', strtotime($reserv->dia))))
        @php($ano = date('Y', strtotime($reserv->dia)))


        <form method="post" action="/reserva/remover/{{$reserv->id}}" onsubmit="return confirm('Tem certeza?')" >
            {{method_field('DELETE')}}
            {!! csrf_field() !!}
            <div class="containerResponsivo">
                <div class="boxResponsivo">
                    <div class="localResponsivo">
                        <p>{{$reserv->local}}</p>
                    </div>
                    <div class="mesaCadeira">
                        <p>Mesa: {{$reserv->id_mesa}} </p>
                        <p>Cadeira: {{$reserv->id_cadeira}}</p>
                    </div>
                </div>
                <div class="data">
                    <div class="datain d1">{{$diaSemana}}</div>
                    <div class="datain d2">{{$dia}}</div>
                    <div class="datain d3">{{$mes}}</div>
                    <div class="datain d4">{{$ano}}</div>
                </div>
                <div class="cancResponsivo"> <button class="btncancResponsivo">Excluir</button></div>
            </div>
        </form>

    @endforeach
</main>
 <a href="/sair" class="btnSair" title="Sair" ><i class="fas fa-sign-out-alt"></i></a>
<footer>
    <a href="/reserva/etapa1">FAZER UMA NOVA RESERVA<i class="fas fa-long-arrow-alt-right"></i></a>
</footer>
<script src="https://kit.fontawesome.com/1c96bc8c85.js" crossorigin="anonymous"></script>
</body>
</html>
