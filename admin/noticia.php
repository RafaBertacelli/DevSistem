
<?php
    $titulo = $_POST['titulo'];
    $noticia = $_POST['noticia'];

    //imagem do marcador
	if(isset($_FILES["arqimage"])){
		$arqINome = $_FILES["arqimage"]["name"];
		$arqITipo = $_FILES["arqimage"]["type"];
		$arqITamanho = $_FILES["arqimage"]["size"];
		$arqINomeTemp = $_FILES["arqimage"]["tmp_name"];
		$erroImgMarc = $_FILES["arqimage"]["error"];
		
		if($erroImgMarc==0){			
			if(is_uploaded_file($arqINomeTemp)){
				if(move_uploaded_file($arqINomeTemp,"../img/". $arqINome)){																														
					$caminhoImg = $arqINome;
                    include('./conexao.php');
                    $stmt = $pdo->prepare("INSERT INTO tbNoticias VALUES(null, '$titulo','$noticia', '$caminhoImg')");
                    $stmt ->execute();

				}
				else{
					$erro = "Falha ao mover imagem do marcador";
                    echo "$erro";
				}
			}
			else{
				$erro = "Erro no envio: A imagem do marcador não foi recebida com sucesso.";
                echo "$erro";
			}
		}
		else{
			$erro = "Erro no envio: " . $erro;			
            echo "$erro";
		}						
	}	
	else{
		$erro = "Imagem do Marcador enviado não encontrado";
        echo "$erro";
	}




    header('location:../noticias.php');
    
?>
