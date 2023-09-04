<?php
include("cabecalho-admin.php");
?>

<?php
include("conexao.php");

$stmt = $pdo->prepare("SELECT * FROM tbContato ORDER BY nome");
$stmt -> execute();

    $i;

echo'<main>';
    echo "<section class='conteudo-admin'>";
       echo"<div class='conteudo-admin-container'>";
          echo "<div class='mensagem-admin'>";
            echo "Mensagens recentes";
          echo "</div>";
          

          $exibir = 1;
    while($row = $stmt->fetch(PDO::FETCH_BOTH)){
        
        echo "<div class='conteudo-admin-container-caixinha'>";
            echo "<div class='caixinha-contato'>";
                echo "<div class='parte-da-imagem'>";
                    echo "<div class='imagem-admin'>";
                        echo "<img src='../img/user-admin.png' alt='logo' class='user-admin'>";
                    echo "</div>";
                    echo "<div class='assunto'>";
                        echo $row[2];
                    echo "</div>";
                echo "</div>";

                echo "<div class='parte-da-letra'>";
                    echo "<div class='nome'>";
                        echo $row[1];
                    echo "</div>";
                    echo "<div class='mensagem-admin-texto'>";
                        echo $row[4];
                    echo "</div>";
                    echo "<div class='email'>";
                        echo  $row[3];
                    echo "</div>";
                echo "</div>";
                echo "<a href='/DevSistem/admin/contato-admin-excluir.php?id=$row[idContato]'> Excluir </a>";
            echo "</div>";
        echo "</div>";
            $exibir ++;

            if($exibir %2==0)
            echo "</br>";
       
         }
         
        echo "</div>";
    echo "</section>";
echo "</main>";
    

       
?>
        <div class="botaomsg">
        <a href="mensagem-admin-invertida.php"> <button class="contato-botao">Trocar ordem?</button></a>   
        </div>

<?php 
include("footer-admin.php");
?>

