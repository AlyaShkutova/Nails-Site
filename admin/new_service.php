<?php
include '../system/init.php';
if(!isset($_SESSION['logged_user'])){
    header('Location: login.php');
}
if(isset($_POST['go'])){
    $id = $_POST['id'];
    $query = "UPDATE `call` SET `is_answer` = 'y' WHERE `id` = '$id'";
    mysqli_query($link, $query);
}

if(isset($_POST['not'])){
    $id = $_POST['id'];
    $query = "UPDATE `feedback` SET `is_answer` = 'y' WHERE `id` = '$id'";
    mysqli_query($link, $query);
    }
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Админка</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sticky-footer-navbar/">





<link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.3/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">

<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Зона администрирования</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./index.php">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./new_service.php">Добавление услуг</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Управление прайс листом</h1>
    <p class="lead">Создавайте новые услуги</p>
    <a href="./function/make.php">Создать новую услугу</a>
    <table>
    <tr>
        <td>Имя</td>
        <td>Описание</td>
        <td>Цена</td>
        <td>Действие</td>
    </tr>
    <?php
        $query = mysqli_query($link, "SELECT * from `prices`");
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        if(empty($result)){
        } else {
            foreach($result as $item){
                echo '<tr>';
                echo '<td>'.$item['name'].'</td>';
                echo '<td>'.$item['text'].'</td>';
                echo '<td>'.$item['price'].'</td>';
                ?>
                <td>
                <form method="POST" action="./function/delete.php">
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                    <input class="btn btn-primary" name="go" type="submit" value="Удалить">
                </form>
                </td>
                <?
                echo '</tr>';
            }
        }
    ?>
    </table>
</div>
</main>

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Шкутова Альбина.</span>
  </div>
</footer>


    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      
  </body>
</html>
