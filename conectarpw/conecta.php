<?php
    //primeira formar de conectar ao banco web
     define("servidor","localhost");
     define("usuario", "root");
     define("senha", "");
     define("banco", "modular");

     $con = mysqli_connect(servidor, usuario, senha, banco);

     if(!$con){
          echo "<br> não conectou".mysqli_erro();
          exit();
     }
     
?>