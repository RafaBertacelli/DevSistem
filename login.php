<?php
include("cabecalho.php");
?>

<div class="textoLogin">
    <h2>Faça seu login</h2>
</div>


<div class="login">
    <div class="tela1">
        <div class="textoLogin">
            <h2>Já sou cadastrado</h2>   
        </div>

        <br>
            <div class="inputs">
                <form action="">
                        <div class="usuario">
                            <input type="text" name="txUser" placeholder="Digite seu email" class="caixa-login">
                        </div>
                        <br>

                        <div class="senha">
                            <input type="text" name="txSenha" placeholder="Digite sua senha" class="caixa-login">
                        </div>
                    <br>

                        <div class="enviarLogin">
                            <input type="submit" name="txEnviar" value="Entrar" class="botao-login">
                        </div>
                    </div>
                </form>
               
    </div>
    <div class="tela2">
        <div class="textoLogin">
            <h2>Quero me cadastrar</h2>
        </div>
        <br>
        <div class="enviarLogin">
            <input type="submit" name="txEnviar" value="Cadastrar com email" class="botao-login-cadastro">
        </div>
    </div>

       
</div>
