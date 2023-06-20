<?php
include("cabecalho.php");
?>

<?php include("conexao.php"); ?>
<?php
    //$stmt = $pdo->prepare("select * from tbcontato");	
   // $stmt ->execute();
    
   // while($row = $stmt->fetch(PDO::FETCH_BOTH)){       
    //    echo $row["idContato"];						
    //    echo $row[1];						
     //   echo $row[2];						
      //  echo $row[3];											
      //  echo $row[4];
      //  echo "<br />";      
    //}	
    if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
	
       // $result = PDO_query($pdo, "INSERT INTO tbContato(nome,email,assunto,mesagem)VALUES('$nome','$email','$assunto','$mensagem')");
        echo "<div class='infor'>";
        print_r('Nome: '. $_POST['nome']);
        print_r('<br>');
        print_r('Email: '.$_POST['email']);
        print_r('<br>');
        print_r('Assunto: '.$_POST['assunto']);
        print_r('<br>');
        print_r('Mensagem: '.$_POST['mensagem']);
        echo "</div>";
    }
?>

<?php 
include("footer.php");
?>
