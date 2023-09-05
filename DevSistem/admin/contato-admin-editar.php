<?php

include("conexao.php"); ?>

<section>
    <form action ="mensagens-admin.php" method="post">

    <div>
        <input type="text" name="txId" placeholder="idContato" value="<?php echo $_GET['id']?>" />
    </div>

    <div>
        <input type="tex" name="txNome" placeholder="idContato" value="<?php echo $_GET['id']?>" />
    </div>

    <div>
        <input type="text" name="txEmail" placeholder="idContato" value="<?php echo $_GET['id']?>" />
    </div>

    <div>
        <input type="text" name="txAssunto" placeholder="idContato" value="<?php echo $_GET['id']?>" />
    </div>

    <div>
        <input type="text" name="txMensagem" placeholder="idContato" value="<?php echo $_GET['id']?>" />
    </div>


    </form>


</section>

<?php
header('location: mensagens-admin.php');
?>
