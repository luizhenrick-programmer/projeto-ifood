<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="includes/administrador.png" type="image/x-icon">
  <title>Página de Login</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .login-form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body class="bg-dark">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <form class="login-form" action="login.php" method="POST">
        <h2 class="text-center mb-4">Login</h2>
        <div class="mb-3">
          <label for="username" class="form-label">Email ou usuario</label>
          <input type="text" class="form-control" name="username" placeholder="Insira o email ou nome de usuário" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" name="password" placeholder="Insira a senha" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
      </form>
    </div>
  </div>
</div>

<script src="../js/bootstrap.bunble.js"></script>
</body>
</html>