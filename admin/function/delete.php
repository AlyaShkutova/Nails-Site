<?php
include '../../system/init.php';
if(!isset($_SESSION['logged_user'])){
    header('Location: ../login.php');
}
if(isset($_POST['go'])){
    $id = $_POST['id'];
    $query = "DELETE FROM `prices` WHERE `id` = $id";
    $user = mysqli_query($link, $query);
    echo "<script>alert('Удаление успешно')</script>";
    header("location: /");
}
?>