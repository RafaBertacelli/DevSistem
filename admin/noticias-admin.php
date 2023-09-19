<?php
include("cabecalho-admin.php");
?>

<?php
include("conexao.php");
?>

<br>
<div class="titulo-container">Notícias</div>
    <div class="titulo-noticias1">
        ADICONE SUA NOTÍCIA!
    </div>
    <div class="titulo-noticias2">
        Tem algo importante para divulgar? 
    </div>
    <div class="container">
        <div class="container-noticias">
            <div class="parte-da-imagem-notiicas">
                <img class="caixa3" src="../img/programando-1.jpg" alt="">
            </div>
            <div class="parte-da-noticia-noticias">
                <form class="form-noticia" action="noticia.php" method="POST">
                    <div class="noticia-input-titulo">
                        <input class="title-c" type="text" placeholder="Título da notícia" name="titulo" required>
                    </div>
                    <div class="noticia-input-noticia">
                        <input class="text-c" type="text" placeholder="Notícia" name="noticia" required>
                    </div>
                    <div class="noticia-botao2">
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
                    echo"<div class='titleb'>";
                        echo $row[1];
                    echo"</div>";
                    echo"<div class='textob'>";
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
