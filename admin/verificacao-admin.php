<?php
    $usuario = $_POST['txUser'];
    $pass = $_POST['txSenha'];
   // echo $usuario;
   // echo  $senha;
    
    include('conexao.php');

    $stmt = $pdo->prepare("SELECT COUNT(usuario) FROM tbUsuario WHERE usuario = 'admin' AND senha = '1234'");
    $stmt ->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
   
    echo($row['COUNT(usuario)']);
    

    //   if ($row['COUNT(usuario)']){
    //      header('location:tela-admin.php');
    //  } else {
    //       header('location:../login.php');
    //   }

?>
