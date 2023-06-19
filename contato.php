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
<main>
    <selection>
        <div class="contato-container">
            <div class="contato-mensagem">
                <div class="contato-mensagem-titulo">
                    Precisa de ajuda? <br> Conte com a gente. 

                </div>
                <br>
                <div class="contato-mensagem-textinho">
                    De configurações de conta a permissões, encontre ajuda sobre tudo para o nosso site!
                </div>
            </div>
        
            <div class="formulario-contato">
                <div class="contato-mensagem-titulo">
                    Envie sua mensagem
                </div>

                <form class="form-contato" action="contato.php" method="POST">
                    <div class="contato-input-div">
                        <input class="contato-input" type="text" placeholder="Digite o seu nome completo*" name="txNome" required>
                    </div>

                    <div class="contato-input-div">
                        <input class="contato-input" type='email' id='email' name='txEmail' placeholder="Digite seu Email*" required>
                    </div>

                    <div class="contato-input-div">
                        <input class="contato-input" type="text" placeholder="Digite o assunto" name="txAssunto" required>
                    </div>

                    <div class="contato-mensagem-textinho-div">
                        Digite a mensagem:
                    </div>

                    <div class="contato-input-mensagem-div">
                        <input class="contato-input-mensagem" type="text"  name="txMensagem" required>
                    </div>
                        
                    <div class="contato-bt">
                        <input class="contato-botao" type="submit" value="Enviar">                       
                    </div>

                </form>
            </div>
        </div>

    </selection>
</main>


<?php 
include("footer.php");
?>

