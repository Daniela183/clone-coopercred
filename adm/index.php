<?php
?>

<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/app.css">

</head>

<body class="principal">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h2 class="card-title text-center mb-5 fw-light fs-5">Login</h2>
                        <form method="post" action="login.php" class="login">
                            <div class="form-floating mb-3">

                                <div class="cont">
                                    <form method="post" action="login.php">

                                        <p>
                                            <label>Nome:</label>
                                            <input type="text" name="txtNome" required />
                                        </p>
                                        <p>
                                            <label>Senha:</label>
                                            <input type="password" name="txtSenha" required />
                                        </p>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                            <label class="form-check-label" for="rememberPasswordCheck">
                                                Recuperar senha
                                            </label>
                                        </div>
                                        <div class="d-grid">
                                            <input type="submit" value="Entrar" class="btn btn-success btn-login text-uppercase fw-bold" type="submit" style="background-color:#012810;"> <br>
                                            <input type="reset" value="Limpar" class="btn btn-success btn-login text-uppercase fw-bold" type="submit" style="background-color:#012810;">

                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!--<?php
    ?>

<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
            <form method="post" action="login.php" class="login">
              <div class="form-floating mb-3">
              <input type="text" name="txtNome" placeholder="Digite o Nome:" class="form-control" required>
                <label for="floatingInput">Nome:</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="txtSenha" placeholder="Digite a senha:" class="form-control" required>
                <label for="floatingPassword">Senha:</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Recuperar senha
                </label>
              </div>
              <div class="d-grid">
                 <input type="submit" value="Entrar" class="btn btn-success btn-login text-uppercase fw-bold" type="submit"> <br>
                  <input type="reset" value="Limpar" class="btn btn-success btn-login text-uppercase fw-bold" type="submit">
           
              </div>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>-->