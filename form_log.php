<?php
    include_once 'dados.php';
    

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Arca</title>
</head>
<body>
    <section>
        <form action="session.php" method="POST">
            <h1>USER ↦ <input type="text" placeholder="Usuário..." name="user" id="user"></h1>
            <h1>Senha ↦  <input type="password" placeholder="Senha..." name="senha" id="senha"></h1>
            <input type="submit" value="ABRIR">
        </form>
    </section>
</body>
</html>