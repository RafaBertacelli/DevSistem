<?php
include("cabecalho-admin.php");
?>

<?php
include("conexao.php");

$stmt = $pdo->prepare("SELECT * FROM tbContato");
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

      
        echo $row["idContato"];
        
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




<div class="contatoAdmin">
    <?php
  /*  $stmt = $pdo->prepare("select * from tbcontato");	
    $stmt ->execute();
    
    while($row = $stmt->fetch(PDO::FETCH_BOTH)){       
        echo $row["idContato"];						
        echo $row[1];						
        echo $row[2];						
        echo $row[3];											
        echo $row[4];
        echo "<br />";      
    } 
	echo "<div class='recentes'>";
    echo "<h2>Mensagens recenetes</h2>";
    echo "</div>";
    
    echo "<div class='mensagens'>";
    if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
	
       // $result = PDO_query($pdo, "INSERT INTO tbContato(nome,email,assunto,mesagem)VALUES('$nome','$email','$assunto','$mensagem')");
    echo "<div class='infor'>";
        echo "<div class='nomeForm'>";
        print_r('Nome: '. $_POST['nome']);
        echo "</div>";
        print_r('<br>');

        echo "<div class='emailForm'>";
        print_r('Email: '.$_POST['email']);
        echo "</div>";
        print_r('<br>');

        echo "<div class='assuntoForm'>";
        print_r('Assunto: '.$_POST['assunto']);
        echo "</div>";
        print_r('<br>');

        echo "<div class='mensagemForm'>";
        print_r('Mensagem: '.$_POST['mensagem']);
        echo "</div>";

    echo "</div>";
    }
    echo "</div>";
    */
?>
</div>
    



<?php 
include("footer-admin.php");
?>

