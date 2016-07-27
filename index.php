<!DOCTYPE html>
<html lang="en">
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
	<section id="main_slider" class="carousel slide">
		<!--идентификаторы-->
		<ol class="carousel-indicators">
			<li class="active" data-target="#main_slider" data-slide-to="0"></li>
			<li data-target="#main_slider" data-slide-to="1"></li>
			<li data-target="#main_slider" data-slide-to="2"></li>
		</ol>
		<!--слайды-->
		<div class="carousel-inner">
			<div class="item active">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="carousel-caption">
								<p>Египет</p>
								<p>Короткий фрагмент</p>
                                <button data-toggle="modal" data-target="#myModal">See More</button>
							</div>
						</div>
					</div>
				</div>
                <div class="carousel-img">

                </div>
				<!--<img src="images/main_slider1.jpg" alt="slide1">-->
			</div>
			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="carousel-caption">
								<p>Египет</p>
								<p>Короткий фрагмент</p>
                                <button data-toggle="modal" data-target="#myModal">See More</button>
							</div>
						</div>
					</div>
				</div>
                <div class="carousel-img">
                </div>
			</div>
			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="carousel-caption">
								<p>Египет</p>
								<p>Короткий фрагмент</p>
                                <button data-toggle="modal" data-target="#myModal">See More</button>
							</div>
						</div>
					</div>
				</div>
                <div class="carousel-img">

                </div>
			</div>
		</div>
		<!--стрелки-->
		<a href="#main_slider" class="left carousel-control" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a href="#main_slider" class="right carousel-control" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
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
	<section class="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Наши услуги:</h2>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<div class="service-img">
							<div class="target"></div>
						</div>
						<h3>Помощь в оформлении <br/> загран паспортов</h3>
						<p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезызвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<div class="service-img">
							<div class="list"></div>
						</div>
						<h3>Помощь в оформлении <br/> загран паспортов</h3>
						<p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезызвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<div class="service-img">
							<div class="people"></div>
						</div>
						<h3>Помощь в оформлении <br/> загран паспортов</h3>
						<p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезызвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<div class="service-img">
							<div class="list"></div>
						</div>
						<h3>Помощь в оформлении <br/> загран паспортов</h3>
						<p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезызвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<div class="service-img">
							<div class="cogwheel"></div>
						</div>
						<h3>Помощь в оформлении <br/> загран паспортов</h3>
						<p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезызвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<div class="service-img">
							<div class="calculator"></div>
						</div>
						<h3>Помощь в оформлении <br/> загран паспортов</h3>
						<p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезызвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="img_block">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="info_block">
						<p>Египет</p>
						<p class="info-text">Короткий фрагмент</p>
                        <button data-toggle="modal" data-target="#myModal">See More</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="propose">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Лучшее для Вас</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bxSlider">
                        <div class="slide tour">
                            <img src="images/propose.jpg" class="img-responsive" alt="">
                            <div class="info_block">
                                <h3>Египет</h3>
                                <p class="tour-info hidden-xs ">Отель Font sizen 5*7 дней 8 ночей. Вылет из Харькова на двоих 3991</p>
                                <button data-toggle="modal" data-target="#myModal">Заказать</button>
                                <div class="order hidden-xs">
                                    <a href="#" data-toggle="modal" data-target="#myModal">
                                        <p>Заказать</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slide tour">
                            <img src="images/propose.jpg" class="img-responsive" alt="">
                            <div class="info_block">
                                <h3>Египет</h3>
                                <p class="tour-info hidden-xs ">Отель Font sizen 5*7 дней 8 ночей. Вылет из Харькова на двоих 3991</p>
                                <button data-toggle="modal" data-target="#myModal">Заказать</button>
                                <div class="order hidden-xs">
                                    <a href="#" data-toggle="modal" data-target="#myModal">
                                        <p>Заказать</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slide tour">
                            <img src="images/propose.jpg" class="img-responsive" alt="">
                            <div class="info_block">
                                <h3>Египет</h3>
                                <p class="tour-info hidden-xs ">Отель Font sizen 5*7 дней 8 ночей. Вылет из Харькова на двоих 3991</p>
                                <button data-toggle="modal" data-target="#myModal">Заказать</button>
                                <div class="order hidden-xs">
                                    <a href="#" data-toggle="modal" data-target="#myModal">
                                        <p>Заказать</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slide tour">
                            <img src="images/propose.jpg" class="img-responsive" alt="">
                            <div class="info_block">
                                <h3>Египет</h3>
                                <p class="tour-info hidden-xs ">Отель Font sizen 5*7 дней 8 ночей. Вылет из Харькова на двоих 3991</p>
                                <button data-toggle="modal" data-target="#myModal">Заказать</button>
                                <div class="order hidden-xs">
                                    <a href="#" data-toggle="modal" data-target="#myModal">
                                        <p>Заказать</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slide tour">
                            <img src="images/propose.jpg" class="img-responsive" alt="">
                            <div class="info_block">
                                <h3>Египет</h3>
                                <p class="tour-info hidden-xs ">Отель Font sizen 5*7 дней 8 ночей. Вылет из Харькова на двоих 3991</p>
                                <button data-toggle="modal" data-target="#myModal">Заказать</button>
                                <div class="order hidden-xs">
                                    <a href="#" data-toggle="modal" data-target="#myModal">
                                        <p>Заказать</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
	<?php include_once "footer.php";?>




</body>
</html>
