<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tz-live-pay</title>

    <link href="css/style.css" rel="stylesheet">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
</head>

<body>
    <!-- первый блок -->
    <div class="block ptop">
        <div class="box">
            <div class="box_text">
                <p class="heder">Мобильный эквайринг с комиссией <span class="heder_red">от 1,2%</span></p>
                <p class="text">Принимайте оплату на выезде — любым удобным способом</p>
                <button class="main_btn btn_hid" onclick="alerted();">Подключить</button>
            </div>
        </div>
        <div class="box center">
            <div class="box_img">
                <img src="img/calculator.png" alt="калькулятор">
            </div>
        </div>
        <div class="box100 center btn_vis">
            <button class="main_btn" onclick="alerted();">Подключить</button>
        </div>
        <div class="block_rect btn_vis center">
            <div class="leftstr rect_center">
                <div class="rect22"></div>
                <div class="rect32"></div>
            </div>
        </div>
    </div>

    <!-- второй блок -->
    <div class="ptop">
        <div class="box100 center">
            <p class="heder">Платежи <span class="heder_red">в любой точке продаж</span></p>
        </div>
        <div class="box80">
            <div class="box">
                <div>
                    <img class="box_min_img" src="img/star.png" alt="звезда">
                </div>
                <div class="">
                    <p>
                        <span class="text_pay">Разные способы оплаты</span><br>
                        <span class="block_text">Оплата картой, наличными, по QR-коду или касанием мобильного
                            телефона</span>
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="">
                    <img class="box_min_img" src="img/thumbs-up.png" alt="лайк">
                </div>
                <div class="1">
                    <p>
                        <span class="text_pay">Соотвествие закону</span><br>
                        <span class="block_text">Налоговая получит отчетность по 54-ФЗ, а клиент — чек</span>
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="">
                    <img class="box_min_img" src="img/shield.png" alt="щит">
                </div>
                <div class="">
                    <p>
                        <span class="text_pay">Безопасные платежи</span><br>
                        <span class="block_text">Отсутвие махинаций с купюрами и краж благодаря безналичной
                            оплате</span>
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="">
                    <img class="box_min_img" src="img/edit.png" alt="блакнот">
                </div>
                <div class="">
                    <p>
                        <span class="text_pay">Дополнительные возможности</span><br>
                        <span class="block_text">Можно удалить позицию из заказа или отменить его перед оплатой</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="center btn_vis">
            <p class="meta_text">Вы платите меньше, если используете кассу не постоянно</p>
        </div>
        <div class="center">
            <button class="main_btn" onclick="alerted();">То, что надо!</button>
        </div>

        <!-- квадратики -->
        <div class="block_rect btn_vis">
            <div class="leftstr">
                <div class="rect22"></div>
                <div class="rect32"></div>
            </div>
            <div class="rightstr">
                <div class="rect32"></div>
            </div>
        </div>

        <!-- слайдер что купить -->
        <div class="ptop">
            <div class="box100 center">
                <p class="heder">Что выбрать</p>
            </div>
            <div class="btn_hid">
                <div class="box80">
                    <?php
                    include 'slider_choose.php';
                    ?>
                </div>
            </div>           
            <div class="btn_vis">
                <div class="box80 slider btn_vis">
                    <?php
                    include 'slider_choose.php';
                    ?>
                </div>
            </div>

            <!-- квадратики -->
            <div class="block_rect btn_hid">
                <div class="leftstr">
                    <div class="rect22"></div>
                    <div class="rect32"></div>
                </div>
                <div class="rightstr">
                    <div class="rect32"></div>
                </div>
            </div>
            <div class="block_rect btn_vis center">
                <div class="leftstr rect_center">
                    <div class="rect22"></div>
                    <div class="rect32"></div>
                </div>
            </div>

            <!-- слайдкр платежи -->
            <div class="box100 center">
                <p class="heder">Где можно принимать платежи</p>
            </div>
            <div class="btn_hid">
                <div class="box80">
                    <?php
                    include 'slider_pay.php';
                    ?>                    
                </div>
            </div>           
            <div class="btn_vis">
                <div class="box80 slider">
                    <?php
                    include 'slider_pay.php';
                    ?>
                </div>
            </div>

            <div class="center">
                <button class="main_btn" onclick="alerted();">Хочу</button>
            </div>

            <!-- квадратики -->
            <div class="block_rect btn_vis">
                <div class="leftstr">
                    <div class="rect22"></div>
                    <div class="rect32"></div>
                </div>
                <div class="rightstr">
                    <div class="rect32"></div>
                </div>
            </div>

            <!-- таблица с процентами -->
            <div class="box80 ptop">
                <div class="box33">
                    <div class="box_text">
                        <p class="heder_red">Стоимость <span class="heder">мобильного эквайринга</span></p>
                        <p class="block_text">Прозрачная комисся на все виды эквайринга.
                            Процент зависит только от вашей выручки и вида деятельности</p>
                        <button class="main_btn btn_hid" onclick="alerted();">Подключить</button>
                    </div>
                </div>
                <div class="box60">
                    <div class="bck_img">
                        <p class="block_heder_text">Комиссия за использование эквайринга LIFE PAY — <span class="block_heder_text_red"> от 1,2% до 1,9%</span></p>
                    </div>
                    <div class="box100 box_shadow">
                        <p class="block_heder_text leftstr">Вид деятельности</p>
                        <p class="block_heder_text rightstr">Комиссия за эквайринг</p>
                        <p class="block_text leftstr">Фастфуд</p>
                        <p class="block_text rightstr">1,2%</p>
                        <hr class="box80 border_lin center">
                        <p class="block_text leftstr">Продуктовые супермаркеты</p>
                        <p class="block_text rightstr">1,5%</p>
                        <hr class="box80 border_lin center">
                        <p class="block_text leftstr">Прочее</p>
                        <p class="block_text rightstr">1,9%</p>
                    </div>
                </div>
            </div>
            <div class="center btn_vis">
                <button class="main_btn btn_vis" onclick="alerted();">Подключить</button>
            </div>
        </div>

        <!-- скрипты -->
        <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script src="js/index.js"></script>
</body>

</html>