<?php
include("cabecalho-admin.php");
?>

<?php

include("conexao.php");

$id = $_GET['id'];
$nome = $_GET['nome'];
$email = $_GET['email'];
$assunto = $_GET['assunto'];
$mensagem = $_GET['mensagem'];
$stmt = $pdo -> prepare("SELECT FROM tbContato SET nome='$nome'  WHERE idContato = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="mensagens-admin.php">Voltar</a>
    <div class="box">
        <form action="forms.php" method="POST">
            <input type="text" value="<?php echo @$_GET['id']?>"required>
            <input type="text" value="<?php echo @$_GET['nome']?>"required>
        </form>
    </div>
</body>
</html>

