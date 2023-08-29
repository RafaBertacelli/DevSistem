
<?php

include("conexao.php");

$id = $_GET['id'];
$stmt = $pdo -> prepare("delete from tbContato where idContato = $id");
$stmt -> execute();

header('location:../mensagens-admin.php');

?>