<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<ul class="list-group">
    @foreach($reserva as $reserv)
        <li class="list-group-item">Local: {{$reserv->local}} Data: {{$reserv->data}} Mesa: {{$reserv->id_mesa}} Cadeira: {{$reserv->id_cadeira}}</li>
        <form method="post" action="/reserva/remover/{{$reserv->id}}" onsubmit="return confirm('Tem certeza?')">
            @csrf
            <button class="btn btn-danger">Excluir</button>
        </form>
    @endforeach
</ul>

</body>
</html>