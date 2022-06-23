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
       <h1>Cadastro</h1>
            <form action="salvar.php" method="POST">
              <div>
                <label for="txtNome" class="form-label">Nome:</label>
                <input type="text" name="txtNome" id="txtNome" placeholder="Nome" class="form-control" required />
              </div>
              <div>
                <label for="txtEmail" class="form-label">Email:</label>
                <input type="email" name="txtEmail" id="txtEmail" placeholder="Email" class="form-control" required />
              </div>
              <div>
                <label for="txtRG" class="form-label">RG:</label>
                <input type="text" name="txtRG" id="txtRG" placeholder="RG" class="form-control" required />
              </div>
              <div>
                <label for="txtCPF" class="form-label">Email:</label>
                <input type="text" name="txtCPF" id="txtCPF" placeholder="CPF" class="form-control" required />
              </div>
              <div>
                <input type="submit" value="Salvar" class="btn btn-primary" />
              </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>