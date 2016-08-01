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

    <section class="tittle">
        <div class="container-fluid">
            <div class="row">
               <div class="container">
                   <div class="row">
                       <h1>Горящие туры</h1>
                   </div>
               </div>
            </div>
        </div>
    </section>

    <section class="find-tours">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="images/findTours.jpg" />
                </div>
            </div>
        </div>
    </section>

    <section class="index-news">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="news-tittle">
                            <h2><b>Новости</b></h2>
                            <p>Оставайтесь в курсе всех важных и интересных событий</p>
                        </div>
                    </div>
                    <div class="row news-container">
                        <div class="col-md-6">
                            <div class="news-div">
                                <img src="http://joinup.ua/media/2016/07/maldivy-kuhnya-listalka-3-1.jpg" />
                                <div class="news-name">
                                    <h4>
                                        Мальдивы – пальчики оближешь!
                                    </h4>
                                    <article>
                                        Мальдивы —  это острова из самых сладких наших снов и розовых мечт. 
                                        Они пленят своей экзотикой, вдохновляющей атмосферой, спокойствием, 
                                        которое чувствуется даже в воздухе. А еще — бескрайним океаном, который дышит свежестью и делится своей силой. 
                                        Мальдивы – это  потрясающие белоснежные пляжи, по которым так приятно гулять. 
                                        
                                        </article>
                                    <a href="newsopen_1.php">Подробнее >></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-div">
                                <img src="http://joinup.ua/media/2016/07/Zastavka-700h420_21-1.jpg" />
                                <div class="news-name">
                                    <h4>
                                        Dhigufaru Island Resort 5* — ваш особый мир на Мальдивах
                                    </h4>
                                    <article>
                                        Здесь всегда есть место маленьким и большим чудесам, новым открытиям, созерцанию красоты внешней и внутренней, радости и настоящему счастью. Поэтому мы хотим, чтобы вы отдыхали здесь чаще.

                                        И мы рады представить вам сегодня новый отель на Мальдивах, который станет особым и совершенным местом для первоклассного отдыха.

                                    </article>
                                    <a href="newsopen_2.php">Подробнее >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row news-container">
                        <div class="col-md-6">
                            <div class="news-div">
                                <img src="http://joinup.ua/media/2016/07/andorra-rannee-bronirovanie-zastavksa.jpg" />
                                <div class="news-name">
                                    <h4>
                                        Андорра — для влюбленных в зиму
                                    </h4>
                                    <article>
                                        Например, большой стакан лимонада с мятой, лимоном и льдом. Или несколько шариков фруктового мороженого с натуральным молоком. Или спелого и сочного арбуза, который вы только что достали из холодильника и нарезали большими кусочками. А еще лучше — ненадолго оказаться в месте, где вас ждут заснеженные горы, белоснежные пейзажи и атмосфера настоящей сказочной зимы. Правда?
                                    </article>
                                    <a href="newsopen_3.php">Подробнее >></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-div">
                                <img src="http://joinup.ua/media/2016/06/Horvatiya-700x424.jpg" />
                                <div class="news-name">
                                    <h4>
                                        To Do List. Хорватия зовет!
                                    </h4>
                                    <article>
                                        Хорватия… Произнося это слово в голове сразу рождаются образы пляжей с чистейшей водой, буйство зелени и красок пейзажей… Так и хочется сесть в тени дерева, которому уже несколько сотен лет, и глубоко вдохнув  вкуснейший воздух, наслаждаться красотами, которые вас окружают, погружая в состояние умиротворения и счастья.
                                    </article>
                                    <a href="newsopen_4.php">Подробнее >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row news-container">
                        <div class="col-md-6">
                            <div class="news-div">
                                <img src="http://joinup.ua/media/2016/07/andorra-rannee-bronirovanie-zastavksa.jpg" />
                                <div class="news-name">
                                    <h4>
                                        Андорра — для влюбленных в зиму
                                    </h4>
                                    <article>
                                        Например, большой стакан лимонада с мятой, лимоном и льдом. Или несколько шариков фруктового мороженого с натуральным молоком. Или спелого и сочного арбуза, который вы только что достали из холодильника и нарезали большими кусочками. А еще лучше — ненадолго оказаться в месте, где вас ждут заснеженные горы, белоснежные пейзажи и атмосфера настоящей сказочной зимы. Правда?
                                    </article>
                                    <a href="newsopen_3.php">Подробнее >></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-div">
                                <img src="http://joinup.ua/media/2016/06/Horvatiya-700x424.jpg" />
                                <div class="news-name">
                                    <h4>
                                        To Do List. Хорватия зовет!
                                    </h4>
                                    <article>
                                        Хорватия… Произнося это слово в голове сразу рождаются образы пляжей с чистейшей водой, буйство зелени и красок пейзажей… Так и хочется сесть в тени дерева, которому уже несколько сотен лет, и глубоко вдохнув  вкуснейший воздух, наслаждаться красотами, которые вас окружают, погружая в состояние умиротворения и счастья.
                                    </article>
                                    <a href="newsopen_4.php">Подробнее >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 advice">
                    <div class="advice-tittle">
                        <h2>
                            <b>Актуальные советы</b>
                        </h2>
                    </div>
                    <div class="news-div">
                        <img src="http://joinup.ua/media/2016/07/Turtsiya-5-1.jpg" />
                        <div class="news-name">
                            <h4>
                                Как проходит лето в Турции?
                            </h4>
                        </div>
                            <article>
                                Турция – одна из излюбленных стран для летнего отдыха среди украинцев. И еще бы! Ведь до Турции лететь всего несколько часов, не нужно предварительно получать визу и готовить ворох документов, на курортах многие знают русский язык, поэтому каждый турист чувствует себя комфортно, цены – приятно удивляют, а количество интересных мест и достопримечательностей и красивейших пейзажей просто завораживает.
                            </article>
                            <a href="newsopen_5.php">Подробнее</a>
                      
                    </div>
                    <div class="news-div">
                        <img src="http://joinup.ua/media/2016/01/rb-gretsiya-logo-640x424.jpg" />
                        <div class="news-name">
                            <h4>
                                Раннее бронирование по Греции! Получи свой победный лавровый венок!
                            </h4>
                        </div>
                            <article>
                                Греция – это страна, которая вызывает безоговорочное восхищение! Именно здесь зародилась одна из самых древних цивилизаций, которая дала миру много открытий, чудес и знаний. Философские труды Платона и Аристотеля, невероятная архитектура и по сей день считается примером изысканности и стиля, кулинарные традиции греков, который пленят любого гурмана.
                            </article>
                            <a href="newsopen_6.php">Подробнее</a>
                       
                    </div>
                    <div class="news-div">
                        <img src="http://joinup.ua/media/2016/07/Camel-Market-11.jpg" />
                        <div class="news-name">
                            <h4>
                                Дубай – много сюрпризов этим летом!
                            </h4>
                        </div>
                            <article>
                                ОАЭ – это настоящая страна чудес. Кажется, что здесь возможно абсолютно все. Сначала кажется, а потом понимаешь, что нет, не показалось – здесь действительно сбываются даже самые невероятные желания и мечты. Каждому своему гостю ОАЭ дарит вдохновение, воодушевление и осознание того, что все в наших руках.
                            </article>
                            <a href="newsopen_7.php">Подробнее</a>
                      
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="weather">
                            <div id="adbc1c3a2cb901811c9728083d8fe720">
                                <p>
                                    <a href="http://world-weather.ru/">Прогноз погоды - world-weather.ru</a>
                                    <br />
                                    <a href="http://world-weather.ru/pogoda/russia/arkhangelsk/">Прогноз погоды в Архангельске</a>
                                </p>
                            </div>
                            <script type="text/javascript" charset="utf-8" src="http://world-weather.ru/wwinformer.php?userid=adbc1c3a2cb901811c9728083d8fe720"></script>
                          </div>
                    </div>

                    <div class="col-md-4">
                        <div class="exchange">
                            <style>
                                #IUAfinance32 {
                                    min-width: 175px;
                                    width: 100%;
                                    cursor: pointer;
                                }

                                    #IUAfinance32 * {
                                        margin: 0;
                                        padding: 0;
                                    }

                                    #IUAfinance32 .content {
                                        overflow: hidden;
                                        padding: 4px;
                                        font-family: Arial;
                                        font-size: 10px;
                                        color: #000000;
                                        background: #ff6501;
                                        border: 1px solid #ffffff;
                                    }

                                    #IUAfinance32 h1 {
                                        overflow: hidden;
                                        margin-top: -4px;
                                        font-size: 12px;
                                        font-weight: bold;
                                        height: 20px;
                                        line-height: 20px;
                                        color: #ffffff;
                                    }

                                        #IUAfinance32 h1 span {
                                            float: left;
                                            white-space: nowrap;
                                        }

                                        #IUAfinance32 h1 i {
                                            float: right;
                                            display: inline-block;
                                            width: 36px;
                                            height: 15px;
                                            background: url(http://i.i.ua/v2/logo/logo_small_14_black.png) no-repeat 0 1px transparent;
                                            opacity: .3;
                                        }

                                    #IUAfinance32 a, #IUAfinance32 a:hover {
                                        border: none;
                                        text-decoration: underline;
                                        color: #ffffff;
                                    }

                                    #IUAfinance32 dl {
                                        overflow: hidden;
                                        background: #ffffff;
                                        padding: 4px;
                                        margin-bottom: 4px;
                                    }

                                        #IUAfinance32 dl dt {
                                            font-weight: bold;
                                            font-size: 12px;
                                        }

                                        #IUAfinance32 dl dd {
                                            clear: left;
                                            border-top: 1px dotted #DDD;
                                        }

                                        #IUAfinance32 dl span {
                                            display: block;
                                            float: left;
                                            width: 39%;
                                            white-space: nowrap;
                                            text-align: right;
                                        }

                                            #IUAfinance32 dl span.th {
                                                width: 22%;
                                                text-align: left;
                                            }

                                        #IUAfinance32 dl dt span {
                                            font-size: 10px;
                                            font-weight: normal;
                                        }

                                        #IUAfinance32 dl dd span {
                                            line-height: 24px;
                                            font-size: 20px;
                                            font-family: Trebuchet MS;
                                        }

                                            #IUAfinance32 dl dd span img {
                                                vertical-align: middle;
                                                margin-right: 1px;
                                            }
                            </style>
                            <div id="IUAfinance32">
                                <div class="content">
                                    <h1>
                                        <span>
                                            <a href="http://finance.i.ua/bank/15/" id="IUAfinance32TitleLink">Курси валют</a>
                                        </span>
                                        <i></i>
                                    </h1>
                                    <dl id="IUAfinance32Embed"></dl>
                                    <a href="http://finance.i.ua/">Курси долара, євро і рубля по банках</a>
                                </div>
                            </div>
                            <script type="text/javascript">
if (typeof(iFinance) == "undefined") {
	if (typeof(iFinanceData) == "undefined") {
		document.write('<scr' + 'ipt src="http://i.i.ua/js/i/finance_informer.js?1" type="text/javascript" charset = "windows-1251"></scr' + 'ipt>');
		iFinanceData = [];
	}
	iFinanceData.push({b:15,c:[840,978,643],enc:0, lang:1,p:'32'});
} else {
	window['oiFinance32'] = new iFinance();
	window['oiFinance32'].gogo({b:15,c:[840,978,643],enc:0, lang:1,p:'32'});
}
                            </script>
                        </div>
                    </div>
                </div>
            </div>
    </section>


	<?php include_once "footer.php";?>

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


</body>
</html>
