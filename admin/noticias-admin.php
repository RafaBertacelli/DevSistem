<?php
include("cabecalho-admin.php");
?>

<?php
include("conexao.php");
?>


<div class="titulo-container">Notícias</div>
    <div class="container">
        <div class="container-noticias">
            <div class="titulo-noticias1">
                ADICONE SUA NOTÍCIA!
            </div>
            <div class="titulo-noticias2">
                Tem algo importante para divulgar? 
            </div>
            <div class="parte-da-imagem-notiicas">
                <img class="caixa3" src="../img/programando-1.jpg" alt="">

            </div>
            <div class="parte-da-noticia-noticias">
                <form class="form-noticia" action="noticia.php" method="POST">
                    <div class="noticia-input-titulo">
                        <input class="noticia-input-titulo" type="text" placeholder="Título da notícia" name="titulo" required>
                    </div>
                    <div class="noticia-input-noticia">
                        <input class="noticia-input-noticia" type="text" placeholder="Notícia" name="noticia" required>
                    </div>
                    <div class="noticia-botao">
                        <input class="noticia-botao" type="submit" name="submit" id="submit" value="ENVIAR">                       
                    </div>
                </form>
            </div>
    </div>
</div>

<div class="titulo-container">Notícias adicionadas</div>
    <div class="container">
        <div class="container-noticias">
            <div class="parte-da-imagem-notiicas">
                <img class="caixa3" src="../img/programando-1.jpg" alt="">
                
                <a href="#">EDITAR</a>
                <a href="#">EXCLUIR</a>
            </div>
            <div class="parte-da-noticia-noticias">
                <form class="form-noticia" action="noticias.php" method="POST">
               <?php
               include("conexao.php");
               $stmt = $pdo->prepare("SELECT * FROM tbNoticias");
               $stmt -> execute();

               while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                    echo'<div class="noticia-titulo">';
                        echo $row[1];
                    echo"</div>";
                    echo'<div class="noticia-input-noticia">';
                         echo $row[2];
                    echo"</div>";
               }
                ?>

                </form>
            </div>
    </div>
<?php 
include("footer-admin.php");
?>
