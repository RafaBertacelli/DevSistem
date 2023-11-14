<?php
include("cabecalho.php");
?>

<div class="login">
            <div class="contato-mensagem">
                <div class="contato-mensagem-titulo">
                    Faça o login! <br> Bem-vindo de volta. 
                </div>
                <br>
                <div class="contato-mensagem-textinho">
                   Novo por aqui? Cadastre-se já!
                </div>
            </div>

            <div class="inputs">
                <div class="textoLogin">
                    <h2>Já sou cadastrado</h2>   
                </div>

                <br>

                <form class="form-login" action="admin/verificacao-admin.php" method="POST">

                        <div class="usuario">
                            <input type="text" name="txUser" placeholder="Digite seu email" class="caixa-login">
                        </div>

                        <br>

                        <div class="senha">
                            <input type="passsword" name="txSenha" placeholder="Digite sua senha" class="caixa-login">
                        </div>

                        <br>

                        <div class="enviarLogin">
                            <input type="submit" name="txEnviar" value="Entrar" class="botao-login">
                        </div>

                        <div class="login-nao-cadastrado">
                              <a href="cadastro.php">Não tem uma conta? Cadastre-se!</a>
                        </div>
                </form>


            </div>        
</div>
<?php 
include("footer.php");
?>
