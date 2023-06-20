<?php
include("cabecalho.php");
?>
<?php include("admin/conexao.php"); ?>


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

                <form class="form-contato" action="admin/contato-admin.php" method="POST">
                    <div class="contato-input-div">
                        <input class="contato-input" type="text" placeholder="Digite o seu nome completo*" name="nome" required>
                    </div>

                    <div class="contato-input-div">
                        <input class="contato-input" type='email' id='email' name='email' placeholder="Digite seu Email*" required>
                    </div>

                    <div class="contato-input-div">
                        <input class="contato-input" type="text" placeholder="Digite o assunto" name="assunto" required>
                    </div>

                    <div class="contato-mensagem-textinho-div">
                        Digite a mensagem:
                    </div>

                    <div class="contato-input-mensagem-div">
                        <input class="contato-input-mensagem" type="text"  name="mensagem" required>
                    </div>
                        
                    <div class="contato-bt">
                        <input class="contato-botao" type="submit" name="submit" id="submit" value="Enviar">                       
                    </div>

                </form>
            </div>
        </div>

    </selection>
</main>


<?php 
include("footer.php");
?>
