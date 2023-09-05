<?php 
 include("cabecalho.php"); 
 ?> 
 <?php include("admin/conexao.php"); ?> 
  
  
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
  
                 <form class="form-contato" action="contato-cadastro.php" method="POST"> 
                     <div class="contato-input-div"> 
                         <input class="contato-input" type="text" placeholder="Digite o seu nome *" name="nomeCadas" required> 
                     </div> 
                     <div class="contato-input-div"> 
                         <input class="contato-input" type="text" placeholder="Digite o seu sobrenome*" name="sobrenomeCadas" required> 
                     </div> 
  
                     <div class="contato-input-div"> 
                         <input class="contato-input" type='email' id='email' name='emailCadas' placeholder="Digite seu Email*" required> 
                     </div> 
                     <div class="contato-input-div"> 
                         <input class="contato-input" type='text' id='email' name='telefoneCadas' placeholder="Digite seu Telefone*" required> 
                     </div> 
  
                     <div class="contato-input-div"> 
                         <input class="contato-input" type="text" placeholder="Digite sua senha" name="senha" required> 
                     </div> 
  
  
                     <div class="contato-bt"> 
                         <input class="contato-botao" type="submit" name="submit" id="submit" value="Enviar">                        
                     </div> 
  
                 </form> 
  
  
             </div>         
 </div> 
  
  
 <?php  
 include("footer.php"); 
 ?>
