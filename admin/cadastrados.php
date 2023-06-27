<?php
include("cabecalho-admin.php");
?>

<?php
include("conexao.php");

$stm = $pdo->prepare("SELECT * FROM tbCadastro");
$stm -> execute();



echo'<main>';
    echo "<section class='conteudo-admin'>";
       echo"<div class='conteudo-admin-container'>";
          echo "<div class='mensagem-admin'>";
            echo "pessoas cadastradas";
          echo "</div>";
          

    while($row = $stm->fetch(PDO::FETCH_BOTH)){
        
        echo "<div class='conteudo-admin-container-caixinha'>";
            echo "<div class='caixinha-contato'>";
                echo "<div class='parte-da-imagem'>";
                    echo "<div class='imagem-admin'>";
                        echo "<img src='../img/user-admin.png' alt='logo' class='user-admin'>";
                    echo "</div>";
                    echo "<div class='assunto'>";
                       
                    echo "</div>";
                echo "</div>";

                echo "<div class='parte-da-letra'>";
                    echo "<div class='nome'>";
                      echo $row[1];
                      echo " ";
                        echo $row[2];
                    echo "</div>";
                    echo "<div class='mensagem-admin-texto'>";
                        echo $row[3];
                    echo "</div>";
                    echo "<div class='email'>";
                        echo  $row[4];
                    echo "</div>";
                echo "</div>";
                
            echo "</div>";
        echo "</div>";
          
           echo "</br>"; 
       
         }
         
        echo "</div>";
    echo "</section>";
echo "</main>";
    

       
?>




<div class="contatoAdmin">

 
</div>
    



<?php 
include("footer-admin.php");
?>
