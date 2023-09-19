
<?php

include("conexao.php");

$id = $_GET['id'];
$stmt = $pdo -> prepare("delete from tbNoticia where idNoticia = $id");
$stmt -> execute();

header('location:noticias-admin.php');

?>