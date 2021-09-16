<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/responsivo/responsivoLogin.css') }}">
    <title>Encontro Dos Laranjas</title>
</head>
<body>
    <article class="containerSaudacao">
        <section class="box1">
            <h1>Bem vindo ao <BR> <p> ENCONTRO DOS LARANJAS</p></h1>
            <div class="imgSaudacao"></div>
            <h2>Estamos felizes em reabrir nossos escritórios! </h2>
        </section>

    </article>
    <article class="containerLogin">
        <section class="logoInicial">
            <img src="{{ asset('img/Logo_-_Paginas_internas.svg') }}" alt="Logo da FCamara" class="imglogo">
            <div class="box2">
            <h3> <strong> Faça o login e </strong> <strong> reserve sua mesa </strong> <strong> de maneira </strong> <strong>simples e segura</strong></h3>
            </div>
        </section>
        <section class="formLogin">
            <form action="" method="POST">
                @csrf
                <div class="containerForm">
                    @if (isset($erro))
                        <div class="alert alert-danger text-center">{{$erro}}</div>
                    @endif
                    <label for="emailLogin">E-mail</label>
                    <input type="email" name="email" id="emailLogin" class="emailLogin" placeholder=" Digite seu e-mail" required>
                </div>
                <div class="containerForm">
                    <label for="senhaLogin">Senha</label>
                    <input type="password" name="password" id="senhaLogin" class="senhaLogin" placeholder=" Digite sua senha" required>
                </div>
                <button type="submit" class="bntLogin t1">VAMOS COMEÇAR</button>
            </form>
            <a href="#" class="t1">Esqueci minha senha</a>
        </section>
    </article>
</body>
</html>
