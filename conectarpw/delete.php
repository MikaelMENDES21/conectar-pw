<?php
        require("conecta.php");
  
        if(isset ($_REQUEST['ID'])){
            $id = $_REQUEST['id'];
        }else{
            echo"Informe o id do usuário para ser apagado";
            echo "<br>Exemplo";
            $link = 'http://'.$SERVER[HTTP_HOST].$_SERVER['PHP_SELF'].'?id=3;
            echo'<a href"' . $link .'">' .$link'</a>';
            exit();
        }

        $sqlDelete = "DELETE FROM tb_usuario WHERE id_us = $id";

        $resposta = mysql_query($conexao,$sqlDelete);

        
?>