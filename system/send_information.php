<?php
include 'init.php';
$name = $_POST['name'];
$phone = $_POST['phone'];
$question = $_POST['question'];
if(isset($_POST['go'])){
    $query = "INSERT INTO `call` (`name`, `phone`, `is_answer`) VALUES ('$name','$phone', 'n')";
    $he = mysqli_query($link, $query);
    echo '<script>alert("Ожидайте звонка от нашего мастера 😊❤️")</script>';
    header('location: /');
}
if (isset($_POST['ask'])){
    $query = "INSERT INTO `feedback`(`name`, `phone`, `question`) VALUES ('$name', '$phone', '$question')";
    $he = mysqli_query($link, $query);
    echo '<script>alert("Спасибо за вопрос! 😊❤️\nМы вам скоро ответим.")</script>';
    header('location: /');
}

?>