<?php
include("cabecalho-admin.php");
?>

<?php
$id = $_GET['id'];
include("conexao.php");

$stmt = $pdo -> prepare("SELECT * FROM tbNoticias WHERE idNoticia = $id");
$stmt -> execute();
$row = $stmt->fetch(PDO::FETCH_BOTH);
$titulo = $row['titulo'];
$noticia = $row['noticia'];

//header('location:../noticias.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a class="sai" href="mensagens-admin.php">Voltar</a>
    <div class="box">
        <form action="forms.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div>
                <input class="contato-input" name="txTitulo" placeholder="titulo" value="<?php echo $titulo?>">
            </div>
            <br>
            <div>
                <input class="contato-input" name="txNoticia" placeholder="noticia" value="<?php echo $noticia ?>">
            </div>
            <br>
            <div>
                <input class="contato-botao" type="submit" value="enviar">
            </div>
        </form>
    </div>
</body>
</html>