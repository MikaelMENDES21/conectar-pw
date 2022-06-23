<?php
    session_start();
    if(!isset($_REQUEST['txtNome']) == false){
if(isset($_SESSION['usuario'])){
         exit();
}
    }

    if(isset($_REQUEST['txtNome']) == false){
        header("Location: login.php");
    }
if($_REQUEST['txtNome'] == "adim" && $_REQUEST['txtSenha'] == "nimda"){
    $_SESSION['usuario'] = "Administrador";
    header("Location: index.php");
}