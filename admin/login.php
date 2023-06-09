<?php
include '../system/init.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `workers` WHERE `email` = '".$email."'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    if($password == $user['password']){
        $_SESSION['logged_user'] = $user;
        echo 'Вы успешно авторизовались';
        header('Location: index.php');
    } else {
        echo 'Неверный логин или пароль';
    }
}
if(isset($_SESSION['logged_user'])){
    header('Location: index.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Авторизация</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

<meta name="theme-color" content="#712cf9">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.3/examples/sign-in/sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action='./login.php' method="POST">
    <h1 class="h3 mb-3 fw-normal">Вход в зону администрирования</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" name='login' type="submit">Войти</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>

  </body>
</html>
