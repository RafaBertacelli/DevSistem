<?php
    $usuario = $_POST['txUser'];
    $senha = $_POST['txSenha'];
    $var = '';
    
    include('conexao.php');

    $stmt = $pdo->prepare("SELECT COUNT(usuario) FROM tbUsuario WHERE usuario = 'admin' AND senha = '1234'");
    $stmt ->execute();

    if ($stmt > 0){
        header('location:tela-admin.php');
    } else {
        header('location:./login.php');

    }

?>
