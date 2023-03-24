<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Online Shopping</title>
  <link href="css/bootstrap-reboot.min.css" rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/login.css" rel="stylesheet" />

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body class="text-center">
  <main class="form-signin">
    <form method="post" action="app/login.php" enctype="multipart/form-data">
      <img class="mb-4" src="img/logo.png" alt="" width="184" height="92">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <p class="bg-danger text-white p-2 fw-bold">Please use this user!<br />Login: user | Password: 123</p>

      <div class="form-floating">
        <input type="text" class="form-control" id="nome" name="nome" placeholder="username" >
        <label for="nome">User name</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
        <label for="senha">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <input type="submit" class="w-100 btn btn-lg btn-primary" value ="Sign In" />
      <p class="mt-5 mb-3 text-muted">Gabriel J. Alonso - 2023</p>
    </form>
  </main>

  <script src="js/bootstrap.min.js"></script>
</body>

</html>