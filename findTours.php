<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Marapahu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/themes/image.css" rel="stylesheet" />
</head>
<body>
    <?php include_once "header.php";?>
    <section class="hot-tours">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="info_block">
                        <p>Заказать туры</p>
                        <p class="info-text">Самые актуальные горящие туры.
                        Звоните и летите отдыхать.</p>
                        <button data-toggle="modal" data-target="#myModal">Контакты</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="find_tours">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="twocolumn">
                        <div id="tour_search_module"></div>
                        <script src="http://module.ittour.com.ua/tour_search.jsx?id=598576D1034496G10N60852&ver=1&type=2970"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="send-message">
        <div class="row">
            <div class="col-md-offset-1 col-md-11">
                <div class="message-form">
                    <div class="container">
                        <header>
                            Не нашли то что искали, напиши свои пожелания и мы подберем:
                        </header>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="message-inputs">
                                    <input type="text" placeholder="ФИО*" />
                                    <br />
                                    <input type="tel" placeholder="Ваш телефон*" />
                                    <br />
                                    <input type="email" placeholder="E-mail*" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="message-text">
                                    <textarea placeholder="Куда желаете улететь"></textarea>
                                </div>
                                <button>Отправить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hot-tours-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--<div class="info_block">
                        <p>Египет</p>
                        <p class="info-text">Короткий фрагмент</p>
                        <button>See More</button>
                    </div>-->
                </div>
            </div>
        </div>
    </section>

    <?php include_once "footer.php";?>
    <?php include_once "modal.php";?>


</body>
</html>
