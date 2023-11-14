<?php
    $user = $_POST['txUser'];
    $pass = $_POST['txSenha'];
    
    include('conexao.php');

    if ($user == "admin") {
        $stmt = $pdo->prepare("SELECT COUNT(usuario) 'count' FROM tbusuario WHERE usuario = '$user' AND senha = '$pass'");
        $stmt ->execute();
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row["count"] != 0) {
            header('location:tela-admin.php');
        }
    
    } else { 
        header('location:../login.php');
    }

?>
