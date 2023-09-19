
<?php
    $titulo = $_POST['txTitulo'];
    $noticia = $_POST['txNoticia'];
    $id = $_POST['id'];

    include('./conexao.php');

    $stmt = $pdo->prepare("UPDATE tbNoticias SET titulo = '$titulo', noticia = '$noticia' WHERE idNoticia = $id");
    $stmt ->execute();

    header('location:../noticias.php');
    
?>