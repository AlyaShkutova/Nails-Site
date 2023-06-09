<?php
include 'system/init.php';
?>
<html>
    <head>
        <title>Kaminskaya studio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link rel="stylesheet" href="css/mba.css">
        <link rel="stylesheet" href="css/slider1.css">
       

    </head>
    <body>
        <head>
        <nav>
            <ul class="navigation">
                <div class="logo">
                    <a href="./"><img class="altushka" src="img/logo_wtf.png" alt="logo"></a>
                </div>
                <li><a href="./">Главная</a></li>
                <li><a href="./mba.php">О нас</a></li>
                <li><a href="./our_service.php">Услуги</a></li>
                <li><a href="./#feedback">Отзывы</a></li>
                <li><a href="./#contact">Контакты</a></li>
            </ul>
        </nav>
        </head>
        <main>
</br>
</br>
            </div class="reviews">
            <center>
                <h2>Прайс-лист</h2>
            </center>
            </div>
            <div class="prices">
                <div class="container">
                    <center>
                    <table class="customTable">
                        <tr>
                            <td>Имя</td>
                            <td>Описание</td>
                            <td>Цена</td>
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
                                    echo '</tr>';
                                }
                            }
                        ?>
                        </table>
                    </center>
                </div>
            </div>
        </main>
        <div class="forms">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="forms__inner">
                            <div class="forms__item">
                                <h3>Записаться на процедуру</h3>
                                <form action="./system/send_information.php" method="post">
                                    <input class="form__inputs" type="text" name="name" placeholder="Ваше имя">
                                    <input class="form__inputs" type="text" name="phone" placeholder="Ваш телефон">
                                    <input class="form__inputs" type="submit" name="go" value="Записаться">
                                </form>
                            </div>
                            <div class="forms__item">
                                <h3>Задать вопрос</h3>
                                <form action="./system/send_information.php" method="post">
                                    <input class="form__inputs" type="text" name="name" placeholder="Ваше имя">
                                    <input class="form__inputs" type="text" name="phone" placeholder="Ваш телефон">
                                    <input class="form__inputs" type="text" name="question" placeholder="Ваш вопрос">
                                    <input class="form__inputs" type="submit" name="ask" value="Задать вопрос">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div class="container" id="contact">
            <div class="row">
                <div class="col-12">
                    <div class="footer__inner">
                        <div class="footer__item">
                            <h3>Контакты</h3>
                            <div class="contact-left">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2288.7973474387454!2d73.307996!3d54.994187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43ab01bbaed12c5f%3A0x9e748835c4814aa0!2z0YPQuy4g0KLRg9C_0L7Qu9C10LLQsCwgMiDQutC-0YDQv9GD0YEgMSwg0J7QvNGB0LosINCe0LzRgdC60LDRjyDQvtCx0LsuLCA2NDQxMTI!5e0!3m2!1sru!2sru!4v1667994760893!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <p>г.Омск ул.Туполева 2/1</p>
                            <p>Телефон: +79006739040</p>
                            <p>Email: kaminskaya.studio@bk.ru</p>
                        </div>
                        <div class="footer__item socials">
                            <h3>Мы в соцсетях:</h3>
                            <div class="social">
                                <a href="https://instagram.com/kaminskaya.nailsomsk?igshid=YmMyMTA2M2Y=" target="_blank"><img class="social" src="img/instagram.png" alt="instagram"></a>
                                <a href="https://instagram.com/kaminskaya.nailsomsk?igshid=YmMyMTA2M2Y=" target="_blank"><img class="social" src="img/tg.png" alt="tg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function(){
            $('.slider__inner').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true
            });
        });
    </script>
</html>