<?php
include("cabecalho.php");
?>div class="formulario"
        <h1>Envie sua mensagem</h1>
        <form action="conexao.php" method="post">
            

            <div>
                <input type="text" placeholder="Digite o seu nome completo*:" name="txNome" required>
            </div>

            <div>
                <input type='email' id='email' name='email' placeholder="Digite seu Email *" required>
            </div>
            <div>
                <input type="text" placeholder="Digite o assunto" name="txAssunto" required>
            </div>
            <h3>Digite a mensagem:</h3>
            <div>
                <input type="text"  name="txMensagem" required>
            </div>
            
            <div>
                <input class="enviar" type="submit" value="Enviar">
                
            </div>
        </form>


    </div>
   
<?php 
include("footer.php");
?>
