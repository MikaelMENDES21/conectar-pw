<?php
$require("conecta.php");

if(!isset($_REQUEST['id'])){
    echo "Usuário não identificado";
    die();
}
$id = $_REQUEST['id'];
$nome = "Neusa";
$email "neusa@gmail.com";
$sqlUpdate = "UPDATE tb_usuario
               SET nome_us = '$nome',
                   email_us = '$email',
                   CPF = '$CPF'
                   RG = '$RG'
            WHERE id_us = $id";
mysqli_query($conexao, $sqlUpdate);
mysqli_close($conexao);