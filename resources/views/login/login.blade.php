<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<form method="post">
    @csrf
    <input type="email" name="email" id="email">
    <input type="password" name="password" id="password">
    <button type="submit">Entrar</button>
</form>

</body>
</html>
