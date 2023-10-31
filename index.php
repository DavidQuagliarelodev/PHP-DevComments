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
        <div class="col-md-6 order-md-2">
          <h2>Faça Login pra continuar</h2>
          <form action="validationLogin.php" method="post">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" placeholder="Digite seu nome" name="nome" />
              <label for="email" class="form-label">Digite seu nome</label>
            </div>

            <div class="form-floating mb-3">
              <input type="email" class="form-control" placeholder="Digite seu email" name="email" />
              <label for="email" class="form-label">Digite seu email</label>
            </div>

            <div class="form-floating mb-3">
              <input type="password" class="form-control" placeholder="Digite sua senha" name="senha" />
              <label for="password" class="form-label">Digite sua senha</label>
            </div>

            <input type="submit" value="Entrar" name="submmit" class="btn btn-dark" />
          </form>
        </div>

        <div class="col-md-6 order-1">
          <div class="col-12">
            <img src="img/undraw_location_search_re_ttoj.svg" alt="login-image" class="img-fluid" />
          </div>

          <div class="col-12" id="link__container">
            <a href="register.php">Ainda não tenho cadastro</a>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>