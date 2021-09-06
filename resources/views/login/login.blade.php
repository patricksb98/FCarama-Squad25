<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <article class="containerSaudacao">
        <section class="box1">
            <h1>Bem vindo ao encontro dos Laranjas</h1>
            <h2>Estamos felizes em reabir nossos escritórios! </h2>
        </section>
        <section class="box2">
            <h3>Faça o login e reserve sua mesa de maneira <p>simples e segura</p></h3>
        </section>
    </article>
    <article class="containerLogin">
        <section class="logoInicial">
            <img src="" alt="" class="imglogo">
        </section>
        <section class="formLogin">
            <form action="" method="POST">
                @csrf
                <label for="emailLogin">E-mail</label>
                <input type="email" name="email" id="emailLogin" placeholder="Digite seu e-mail">
                <label for="senhaLogin">Senha</label>
                <input type="password" name="password" id="senhaLogin" placeholder="Digite sua senha">
                <button type="submit">Entrar</button>
            </form>
            <a href="#">Esqueci minha senha</a>
        </section>
    </article>
</body>
</html>
