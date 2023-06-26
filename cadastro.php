<?php
include("cabecalho.php");
?>
<?php include("admin/conexao.php"); ?>



 <main>
    <selection>
	<div class="login">
            <div class="contato-mensagem">
                <div class="contato-mensagem-titulo">
                    Faça o Cadastro! <br> Bem-vindo. 
                </div>
                <br>
            </div>

            <div class="contato-Mensagem">
                <div class="textoCadastro">
                    <h2>Cadastre-se</h2>   
                </div>

                <br>

                <form class="form-cadastro" action="admin/cadastro-admin.php" method="POST">

                        <div class="cadastro-input">
                            <input class="cadastro-input" type= "text" name="nomeCadas" placeholder="Primeiro nome" class="caixa-cadastro" required>
				<br>
			    <input class="cadastro-input" type = "text" name="sobrenomeCadas" placeholder="Sobrenome" class="caixa-cadastro" required>
			       <br>
			    <input class="cadastro-input" type=  "email" name="emailCadas" placeholder="Digite seu Email" class="caixa-cadastro" required>
			       <br>			    
		            <input class="cadastro-input" type= "text" name="telefoneCadas" placeholder="Telefone *opcional" class="caixa-cadastro">
			       <br>
                            <input class="cadastro-input" type= "text" name="senha" placeholder="Digite sua senha" class="caixa-cadastro" required>
                        </div>

                        <br>

                        <div class="enviarCadastro">
                           <input class="cadastro-botao" type="submit" name="submit" id="submit" value="Enviar">
                        </div>
                </form>
            </div>        
	</div>
    </selection>
</main>
<?php 
include("footer.php");
?>
