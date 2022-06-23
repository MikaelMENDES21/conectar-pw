<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-danger navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lista.php">Lista</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastro.php">Cadastro</a>
      </li>
    </ul>
  </div>
</nav>
 <div class="container">
    <div class="row"> 
       <div class ="col"> 
             <h1>Login</h1>
             <div class ="col">
               <h1>Página Inicial</h1>
               <p>Seja bem vindo(a) ao nosso site</p>
             </div>
       </div>
    </div>
    <?php if(isset($_SESSION['usuario'])){?>
    <form action="logout.php" class="d-flex">
      <input type="submit" value="sair" class="btn btn-outline-info" />
    </form>
  <?php }else { ?>
    <form action="login.php" class="d-flex">
      <input type="submit" value="entrar" class="btn btn-outline-info" />
    </form>
  <?php } ?>
  </div>
</nav>
</div>
</body>
</html>