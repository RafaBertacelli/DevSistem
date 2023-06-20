<?php
include("cabecalho-admin.php");
?>
<?php
echo"<main>";
    echo "<section class="conteudo-admin">";
       echo"<div class="conteudo-admin-container">";
          echo "  <div class="mensagem-admin">";
                Mensagens recentes
            </div>
            <div class="caixinha-contato">
                <div class="parte-da-imagem">
                    <div class="imagem-admin">
                        <img src="../img/user-admin.png" alt="logo" class="user-admin">
                    </div>
                    <div class="assunto">
                        
                    </div>
                </div>
                <div class="parte-da-letra">
                    <div class="nome">
                        Rafaela Bertacelli
                    </div>
                    <div class="mensagem-admin-texto">
                    Encontrei alguns bugs de lentidão no site. na página de notícias. Grata pela atenção.
                    Bla bla bla blaaaa. Blá!!
                    </div>
                    <div class="email">
                        rafa@gmail.com
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
?>

<?php include("conexao.php"); ?>

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
    } */
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
?>
</div>


<?php 
include("rodape-admin.php");
?>
