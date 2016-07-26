<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <?php include_once("header.php"); ?>


    <section class="services">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item item-1">
                        <div class="service-icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <a href="#">Продажа туров</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item item-2">
                        <div class="service-icon">
                            <i class="fa fa-plane"></i>
                        </div>
                        <a href="#">Авиабилеты</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item item-3">
                        <div class="service-icon">
                            <i class="fa fa-flag-o"></i>
                        </div>
                        <a href="#">Страхование</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="service-item item-4">
                        <div class="service-icon">
                            <i class="fa fa-suitcase"></i>
                        </div>
                        <a href="#">Визовая поддержка</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item item-5">
                        <div class="service-icon">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <a href="#">TravelSim</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item item-6">
                        <div class="service-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="#">Образование за рубежом</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="service-question">
                        <div class="service-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="question-text">
                            <h2><b>Не нашли нужный тур?</b></h2>
                            <p>Отправьте запрос и мы подберем тур, учитывая все ваши пожелания!</p>
                        </div>
                        <div class="triangle"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-button">
                        <button data-toggle="modal" data-target="#myModal" class="btn">ОТПРАВИТЬ ЗАПРОС</button>
                    </div>
                </div>
            </div>
        

        </div>

    </section>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Закрити</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Напишите свои данные и наш менеджер с вами свяжется.</h4>
                </div>
                <div class="modal-body order-modal-body">
                    <div class="modal-left pull-left">
                        <input placeholder="Ваше имя*" type="text" />
                        <br />
                        <input placeholder="Ваш номер*" type="tel" />
                    </div>
                    <div class="modal-right pull-right">
                        <textarea placeholder="В какой стране хотите отдохнуть"></textarea>
                    </div>

                </div>
                <div class="modal-footer order-modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>-->
                    <button type="button" class="btn">Отправить</button>
                </div>
            </div>
        </div>
    </div>



    <?php include_once("footer.php"); ?>
    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
</body>
</html>
