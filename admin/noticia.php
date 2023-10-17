
<?php
    $titulo = $_POST['titulo'];
    $noticia = $_POST['noticia'];
    $caminhoImg = $_POST['caminhoImg'];


    include('./conexao.php');

    $stmt = $pdo->prepare("INSERT INTO tbNoticias VALUES(null, '$titulo','$noticia', '$caminhoImg')");
    $stmt ->execute();

    header('location:../noticias.php');
    
?>
