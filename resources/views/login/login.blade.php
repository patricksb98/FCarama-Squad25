<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <article class="containerSaudacao">
        <section class="box1">
            <h1>Bem vindo ao <BR> <p> ENCONTRO DOS LARANJAS</p></h1>
            <div class="imgSaudacao"><img src="" alt=""></div>
            <h2>Estamos felizes em reabir nossos escritórios! </h2>
        </section>

    </article>
    <article class="containerLogin">
        <section class="logoInicial">
            <img src="{{ asset('img/Logo_-_Paginas_internas.svg') }}" alt="logo da FCamara" class="imglogo">
            <div class="box2">
                <h3>Faça o login e <br> reserve sua mesa <br> de maneira <br> <p>simples e segura</p></h3>
            </div>
        </section>
        <section class="formLogin">
            <form action="" method="POST"> 
                @csrf
                <div class="containerForm">
                    <label for="emailLogin">E-mail</label>
                    <input type="email" name="email" id="emailLogin" class="emailLogin" placeholder=" Digite seu e-mail">
                </div>
                <div class="containerForm">
                    <label for="senhaLogin">Senha</label>
                    <input type="password" name="password" id="senhaLogin" class="senhaLogin" placeholder=" Digite sua senha">
                </div>
                <button type="submit" class="bntLogin">VAMOS COMEÇAR</button>
            </form>
            <a href="#">Esqueci minha senha</a>
        </section>
    </article>
</body>
</html>
