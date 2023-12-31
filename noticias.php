<?php
include("cabecalho.php");
?>

<main class="conteudo">
    <section>
        <br>

        <div class="titulo-container">Notícias</div>
    <div class="containerN">
        <div class="container-noticias">

               <?php
                $exibir = 1;


               include("admin/conexao.php");
               $stmt = $pdo->prepare("SELECT * FROM tbNoticias");
               $stmt -> execute();

               while($row = $stmt->fetch(PDO::FETCH_BOTH)){
            echo'<div class="parte-da-imagem-notiicas">';
                echo'<img class="caixa3" src="img/'.$row[3].'" alt="Imagem">';
            echo'</div>';
            echo'<div class="parte-da-noticia-noticias">';
                echo'<form class="form-noticia" action="noticias.php" method="POST">';
                    echo'<div class="noticia-titulo">';
                        echo $row[1];
                    echo"</div>";
                    echo'<div class="noticia-input-noticia">';
                         echo $row[2];
                    echo"</div>";

                    $exibir ++;

                    
            echo'</div>';
                echo'</form>';
               }
                ?>

               
        </div>
    </div>
</div>
</div>

        <div class="titulo-container">Destaques</div>
        
        <div class="container">
            
            <div class="c3">
                <img class="caixa3" src="img/img1.png" alt="">
                <div class="textos-caixas">
                    <div class="title-c">
                        <a href="#">
                            Saiba tudo
                        </a>
                    </div>
                    
                    <div class="text-c">
                        Descubra as vantagens de um sistema bem desenvolvido
                    </div>
                </div>              
            </div>
            <div class="c3">
                <img class="caixa3" src="img/img2.png" alt="">
                <div class="textos-caixas">
                    <div class="title-c">
                        <a href="#">
                            Você sabe?
                        </a>
                    </div>
                    
                    <div class="text-c">
                        A importância do desenvolvimento de sistemas para empresas modernas
                    </div>
                </div>              
            </div>
            <div class="c3">
                <img class="caixa3" src="img/img3.png" alt="">
                <div class="textos-caixas">
                    <div class="title-c">
                        <a href="#">
                            Você sabe?
                        </a>
                    </div>
                    
                    <div class="text-c">
                        Os princípios básicos do desenvolvimento de sistemas eficientes
                    </div>
                </div>              
            </div>
            <div class="c3">
                <img class="caixa3" src="img/img4.png" alt="">
                <div class="textos-caixas">
                    <div class="title-c">
                        <a href="#">
                            Você sabe?
                        </a>
                    </div>
                    
                    <div class="text-c">
                        Como garantir a segurança em um sistema de desenvolvimento personalizado
                    </div>
                </div>              
            </div>

        </div>
        <div class="titulo-container">Linguagens </div>
        
    <div class="container">
            <div class="c3">
                <img class="caixa3" src="img/img5.png" alt="">
                <div class="textos-caixas">
                    <div class="title-c">
                        <a href="#">
                            Se inscreva!
                        </a>
                    </div>
                    
                    <div class="text-c">
                        Descubra as linguagens de programação mais utilizadas no desenvolvimento de sistemas
                    </div>
                </div>              
            </div>
            <div class="c3">
                <img class="caixa3" src="img/img6.png" alt="">
                <div class="textos-caixas">
                    <div class="title-c">
                        <a href="#">
                            Descubra!
                        </a>
                    </div>
                    
                    <div class="text-c">
                        Conheça os benefícios de aprender a programar desde cedo
                    </div>
                </div>              
            </div>
            <div class="c3">
                <img class="caixa3" src="img/programando-1.jpg" alt="">
                <div class="textos-caixas">
                    <div class="title-c">
                        <a href="#">
                            Descubra!
                        </a>
                    </div>
                    
                    <div class="text-c">
                       Descubra a linguagem de programaçaomais facil de aprender
                    </div>
                </div>              
            </div>
        <div class="c3">
            <img class="caixa3" src="img/img8.png" alt="">
            <div class="textos-caixas">
                <div class="title-c">
                    <a href="#">
                        Inscreva-se agora!
                    </a>
                </div>
                
                <div class="text-c">
                    Descubra como a inteligência artificial está revolucionando o desenvolvimento de sistemas
                </div>
            </div>              
        </div>
    </div>
            
        <div class="titulo-container">Dicas de Programação</div>
    
    <div class="container">
        <div class="c3">
            <img class="caixa3" src="img/imagem1.png" alt="">
            <div class="textos-caixas">
                <div class="title-c">
                    <a href="#">
                        Inscreva-se agora!
                    </a>
                </div>
                
                <div class="text-c">
                    Descubra como aprimorar suas habilidades de programação de forma gratuita
                </div>
            </div>              
        </div>
        <div class="c3">
            <img class="caixa3" src="img/imagem2.png" alt="">
            <div class="textos-caixas">
                <div class="title-c">
                    <a href="#">
                        Explore!
                    </a>
                </div>
                
                <div class="text-c">
                    Dicas para os jovens interessados em iniciar uma carreira de desenvolvedor
                </div>
            </div>              
        </div>
        <div class="c3">
            <img class="caixa3" src="img/imagem3.png" alt="">
            <div class="textos-caixas">
                <div class="title-c">
                    <a href="#">
                        Saiba mais!
                    </a>
                </div>
                
                <div class="text-c">
                    Oportunidade de aprender programação online com 70% de desconto pelo Google
                </div>
            </div>              
        </div>
        <div class="c3">
            <img class="caixa3" src="img/imagem4.png" alt="">
                <div class="textos-caixas">
                    <div class="title-c">
                        <a href="#">
                            Entenda
                        </a>
                    </div>
                    
                    <div class="text-c">
                    Os benefícios de incorporar a inteligência artificial no processo de programação
                    </div>
                </div>              
    </div>
</div>





        </section>
</main>  
 <?php 
include("footer.php");
?>

