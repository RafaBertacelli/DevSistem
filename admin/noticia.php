
<?php
    $titulo = $_POST['titulo'];
    $noticia = $_POST['noticia'];

    include('./conexao.php');

    $stmt = $pdo->prepare("INSERT INTO tbNoticias VALUES(null, '$titulo','$noticia')");
    $stmt ->execute();

    header('location:../noticias.php');
    
?>
