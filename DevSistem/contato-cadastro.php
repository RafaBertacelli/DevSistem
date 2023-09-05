<?php 
     $nome = $_POST['nomeCadas']; 
     $sobrenome = $_POST['sobrenomeCadas']; 
     $email = $_POST['emailCadas']; 
     $telefone = $_POST['telefoneCadas']; 
     $senha = $_POST['senha']; 
  
     include('admin/conexao.php'); 
  
     $stmt = $pdo->prepare("INSERT INTO tbCadastro VALUES(null, '$nome','$sobrenome','$email','$telefone','$senha')"); 
     $stmt ->execute(); 
  
     header('location:cadastro.php'); 
 ?>
