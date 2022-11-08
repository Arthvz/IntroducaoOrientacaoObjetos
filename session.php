<?php
include_once 'dados.php';

$usuario = $_POST['user'] ?? NULL;
$senha = $_POST['senha'] ?? NULL;

if(!empty($usuario)) {
    session_start();

    $_SESSION['user'] = $usuario['user'];
    $_SESSION['name'] = $usuario['nome'];
    $_SESSION['email'] = $usuario['email'];
    $_SESSION['senha'] = $usuario['senha'];
    $_SESSION['cpf'] = $usuario['cpf'];

    header('Location: cofre.php');
} else {
    echo 'Usuário não cadastrado! <a href="logout.php"><button>Sair</button></a>';
}

?>