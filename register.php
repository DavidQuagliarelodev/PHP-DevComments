<?php
include("db/configLogin.php");

if (isset($_POST["submit"])) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  if ($nome && $email && $senha != null) {
    $sql = "SELECT * FROM `devlogin` WHERE nome = '$nome' and email = '$email' and senha = '$senha';
    ";
    $result = $connection->query($sql);

    if (mysqli_num_rows($result) < 1) {
      $insertInto = "INSERT INTO devlogin (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
      $insert = mysqli_query($connection, $insertInto) or die("Erro");
      header('location: register.php');
    } else {
      header('location: index.php');
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>
  <link rel="stylesheet" href="public/registerLogin.css" />
  <title>DevComments</title>
</head>

<body>
  <main>
    <div class="container col-11 col-md-9" id="form__container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-1">
          <h2>Registre seu cadastro</h2>
          <form action="register.php" method="post">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" placeholder="Digite seu nome" name="nome" />
              <label for="text" class="form-label">Digite seu nome</label>
            </div>


            <div class="form-floating mb-3">
              <input type="email" class="form-control" placeholder="Digite seu email" name="email" />
              <label for="email" class="form-label">Digite seu email</label>
            </div>

            <div class="form-floating mb-3">
              <input type="password" class="form-control" placeholder="Digite sua senha" name="senha" />
              <label for="password" class="form-label">Digite sua senha</label>
            </div>

            <div class="form-check mb-2">
              <input type="checkbox" name="termos" id="termos" />
              <label for="termos">Você aceita os termos de serviço?</label>
            </div>

            <div class="form-check mb-2">
              <input type="checkbox" name="newslater" id="newslater" />
              <label for="termos">Deseja assinar a newslater?</label>
            </div>

            <input type="submit" name="submit" value="Entrar" class="btn btn-dark" />
          </form>
        </div>

        <div class="col-md-6 order-2">
          <div class="col-12">
            <img src="img/undraw_winter_magic_-5-xu2.svg" alt="login-image" class="img-fluid" />
            <a href="index.php">Ja tenho uma conta</a>
          </div>

          <div class="col-12" id="link__container"></div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>