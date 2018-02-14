<?php
include '/var/lib/blackbox/BlackBox.php';
$config = dirname(__FILE__) . '/../config.php';
BlackBox::init($config);
BlackBox::Lead()->init();


if (!BlackBox::Geo()->isAvailable())
    BlackBox::Geo()->detectGeo(true);

$inCity = BlackBox::Geo()->isAvailable() ? ' в ' . BlackBox::Geo()->geoInflect(5) : '';
$fromCity = BlackBox::Geo()->isAvailable() ? ' из ' . BlackBox::Geo()->geoInflect(1) : '';
$noCity = BlackBox::Geo()->isAvailable() ? BlackBox::Geo()->geoInflect(1) : '';

$monthAr = array(
    1 => array('январь', 'января'),
    2 => array('февраль', 'февраля'),
    3 => array('март', 'марта'),
    4 => array('апрель', 'апреля'),
    5 => array('май', 'мая'),
    6 => array('июнь', 'июня'),
    7 => array('июль', 'июля'),
    8 => array('август', 'августа'),
    9 => array('сентябрь', 'сентября'),
    10 => array('октябрь', 'октября'),
    11 => array('ноябрь', 'ноября'),
    12 => array('декабрь', 'декабря')
);
$date = new DateTime(date('d-m-Y'));
$date->add(new DateInterval('P3D'));
$inDate = $date->format('j') . " " . $monthAr[$date->format('n')][1];
?>

<!DOCTYPE html>
<html lang="ru"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wellness</title>
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.5.8/es5-shim.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <script async="" src="js/analytics.js"></script> -->
    <!-- <script type="text/javascript" async="" src="js/watch.js"></script> -->
    <script type="text/javascript" async="" id="topmailru-code" src="js/code.js"></script>
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- <script src="js/mobile-detect.min.js"></script> -->
    <!-- 		<script>
                var md = new MobileDetect(window.navigator.userAgent);
                var viewport = $('meta[name="viewport"]');

                if (md.mobile())
                    viewport.attr("content", "width=400");
                else
                    viewport.attr("content", "width=device-width");

            </script> -->
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/ex-machines.css">
    <link rel="stylesheet" type="text/css" href="css/expert.css">
    <link rel="stylesheet" type="text/css" href="css/bottom-order.css">
</head>

<body>
<!-- <script src="js/counter.js"></script> -->
<noscript><div style="position: absolute; left: -10000px;">
        <img src="img/counter" height="1" width="1" style="border: 0px;"></div></noscript>
<div class="section1 container-fluid">
    <div class="row">
        <div class="container">
            <div class="row">
                <section>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 col-lg-offset-3">
                        <div class="row"> <!-- .mob-bg -->
                            <h1 class="section1__header">
                                <span class="pink">Wellness-СТУДИЯ</span><br> забудьте о лишнем весе!
                                <span class="section1__header_min">Идеальная фигура <span class="pink">ВСЕГО ЗА КУРС*</span></span>
                            </h1>
                            <div class="section1__imgblock col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="row">
                                    <span class="section1__img_block"></span>
                                    <img class="section1__img" src="img/head1-compressor.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 hidden-sm visible-xs col-xs-12">
                                <div class="row">
                                    <ul class="section1__list">
                                        <li class="section1__list_item">Эффективное<strong> жиросжигание</strong></li>
                                        <li class="section1__list_item"><strong>Ускорение</strong> метаболизма</li>
                                        <li class="section1__list_item">Избавление от <strong>целлюлита</strong></li>
                                        <li class="section1__list_item"><strong>Очищение</strong> организма!</li>
                                    </ul>
                                    <!-- 											<span class="section1__info_text">
                                                                                    Успейте приобрести <span class="green">по акции!</span>
                                                                                </span> -->
                                </div>
                            </div>
                            <div class="section1__formblock col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="section1__form">
                                        <h4 class="section1__form_header">Запишись на <span class="section1__free">бесплатное</span> <span class="form__header_text">занятие уже сегодня!</span></h4>
                                        <div class="header__counter">
                                            <div class="counter__num">
                                                <span class="counter__num_text">Осталось</span>
                                                <div class="countdown__wrap">
                                                    <!--                                    <span class="hour">0</span>
                                                                                        <span class="minute">0</span>
                                                                                        <span class="second">5</span> -->
                                                </div>
                                                <div class="counter__hour">
                                                    <span class="counter__num_item">0</span>
                                                    <!-- <span class="header__counter text-bottom">часов</span> -->
                                                </div>
                                                <div class="counter__min">
                                                    <span class="counter__num_item">0</span>
                                                    <!-- <span class="header__counter text-bottom">минут</span> -->
                                                </div>
                                                <div class="counter__sec">
                                                    <span class="counter__num_item">8</span>
                                                    <!-- <span class="header__counter text-bottom">секунд</span> -->
                                                </div>
                                            </div>
                                            <span class="counter__num_text counter__num_textBottom">бесплатных мест</span>
                                        </div>

                                        <form class="form landing__form" action="../../send.php" method="post" onsubmit="validateform(this); return false;">
                                            <ul class="form__list">
                                                <li class="form__item">
                                                    <input name="name" class="form__input form__select" placeholder="Ф.И.О">
                                                </li>
                                                <li class="form__item">
                                                    <input placeholder="Возраст" type="text" name="age">
                                                </li>
                                                <li class="form__item">
                                                    <input placeholder="Телефон" type="tel" class="form__input" name="phone">
                                                </li>
                                                <li class="form__item">
                                                    <input type="submit" value="ЗАПИСАТЬСЯ">
                                                </li>
                                            </ul>
                                            <p style="text-align:center; font-size:12px;">*курс подбирается индивидуально для клиента</p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section1__down col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <section class="section2">
            <div class="section2__block col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 hidden-sm">
                        <div class="row">
                            <img src="img/kalend.png" alt="">
                            <span class="section2__arrow_right"></span>
                        </div>
                    </div>
                    <div class="section2_rightblock col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="row">
                            <h2 class="section2__header">ВЫ СТАНЕТЕ СТРОЙНОЙ
                                <span class="pink">уже после месячного курса</span>
                            </h2>
                            <p class="section2__block_text">
                                Wellness - это <span class="yellow">мощнейший</span> <strong>комплекс упражнений по сжиганию</strong> жировых отложений и <span class="yellow">подавлению целлюлита</span>.
                            </p>
                            <ul class="section2__items">
                                <li class="section2_item">Эффективное жиросжигание</li>
                                <li class="section2_item"><strong>Полное очищение</strong> организма от шлаков и токсинов</li>
                                <li class="section2_item"><strong>Ускорение</strong> снижения веса</li>
                                <li class="section2_item"><strong>Нормализация</strong> обмена веществ</li>
                                <li class="section2_item">Увеличение процесса жиросжигания</li>
                                <li class="section2_item"><strong>Избавление</strong> от отеков</li>
                                <li class="section2_item"><strong>Избавление</strong> <strong class="section2__black">от целлюлита</strong></li>
                                <li class="section2_item"><strong>Тотальная блокировка</strong> жировых отложений!</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section3">
            <div class="section3__block col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 wellness-about">
                        <div class="row">
                            <h2 class="section3__header">
                                Что такое Wellness?
                                <!-- <span class="section3__header_yellow">ФОРМУЛА ПОХУДЕНИЯ!</span> -->
                            </h2>
                            <p class="section3__text">
                                Если вы не любите долгосрочные изнурительные тренировки,  но при этом хотите обрести красивую, подтянутую фигуру и красивый мышечный рельеф, то изодинамические тренажеры подойдут именно вам
                                Если раньше для избавления от лишнего веса необходимо было сидеть на истощающих диетах и почти каждый день заниматься в спортзале, то теперь вы можете всего лишь час провести на наших тренажерах и получить видимый результат
                                Для занятий не нужна специальная физическая подготовка, а также нет ограничений по возрасту
                                Особенно заметный эффект достигается именно там, где бессильны любые диеты - на талии, ногах, боках, животе и ягодицах!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 hidden-sm">
                        <div class="row">
                            <span class="section3__img_block"></span>
                            <!-- <img class="section3__img" src="img/masaje-reductivo.jpg" alt=""> -->
                            <!-- <img class="section3__img_fruit" src="img/prickly-big.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div >  <!-- class="row" -->
</div >   <!-- class="container" -->

<div class="ex-machines container">
    <div class="ex-machines_machine">
        <h4>Роликовый тренажер</h4>
        <div class="ex-machines_img"></div>
        <div class="ex-machines_description">
            <div class="ex-machines_description-wrapper">
                Помогает полностью избавиться от целлюлита
            </div>
        </div>
        <div class="ex-machines_full-description">
            Деревянные ролики, выполненные из бука, подобно десяткам пальцев ласкают и разглаживают кожу, равномерно разогревая ее. Помогает полностью избавиться от целлюлита, снимает отечность и положительно влияет на массу других женских проблем.
        </div>
    </div>
    <div class="ex-machines_machine">
        <h4>Баротнеражер</h4>
        <div class="ex-machines_img ex-machines_img--baro"></div>
        <div class="ex-machines_description">
            <div class="ex-machines_description-wrapper">
                Ускоряет процесс сжигания жира в "проблемных зонах"
            </div>
        </div>
        <div class="ex-machines_full-description">
            Тренажер представляет собой эллиптический кардио-тренажер, встроенный в капсулу, в которой создается пониженное давление. Объединяя движения и вакуум, тренажер помогает в самое короткое время уменьшить объем живота, ягодиц, ног и улучшить состояние кожи при целлюлите.
        </div>
    </div>
    <div class="ex-machines_machine">
        <h4>Виброплатформа</h4>
        <div class="ex-machines_img ex-machines_img--vibro"></div>
        <div class="ex-machines_description">
            <div class="ex-machines_description-wrapper">
                10 минут тренировки заменяте 2 часа бега!
            </div>
        </div>
        <div class="ex-machines_full-description">
            Любимый тренажер Мадонны и Кайли Миноуг. 5-10 минут на виброплатформе заменяют полноценную тренировку! Основана на принципе вибрации, который стимулирует мышцы рефлекторно и заставляет их быстро сокращаться и расслабляться.
        </div>
    </div>
    <div class="ex-machines_machine ">
        <h4>Лимфоштаны</h4>
        <div class="ex-machines_img ex-machines_img--lympho"></div>
        <div class="ex-machines_description">
            <div class="ex-machines_description-wrapper">
                Всего одна процедура заменяет 20-30 сеансов ручного массажа. Похудение на 1 размер за одно занятие.
            </div>
        </div>
        <div class="ex-machines_full-description">
            Всего одна процедура заменяет 20-30 сеансов ручного массажа. Процедура избавляет от отеков, уменьшает объемы тела, разглаживает кожу, является хорошей профилактикой варикоза, борется с целлюлитом и лишним весом.
        </div>
    </div>
</div>

<div class="expert">
    <div class="container">
        <div class="expert_notepad section6__blockitem">
            <h3 class="section6__header">МНЕНИЕ СПЕЦИАЛИСТА <br> О БАРОТРЕНАЖЕРЕ</h3>
            <p class="section6__text">
                Вакуумный тренажер предусматривает создание разряженного воздуха. От этого в подкожной клетчатке увеличивается приток крови и повышается температура. Перераспределение крови от проблемных органов, которые переполнены жидкостью, к тем, которые голодают от недостатка кислорода. Как известно, жировые отложения (особенно целлюлит) и являются такими зонами.Оттягивание кожи от подкожной жировой клетчатки приводит к усилению распада жирных кислот. <strong>Следовательно, исчезают локальные жировые отложения, от которых не избавиться при диетах любой строгости.</strong>
            </p>
            <span class="section6__username">Кулешов Николай,<br> диетолог</span>
            <img class="section6__signature" src="img/signature.png" alt="">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
    </div>
</div>
<div class="container">
    <div class="row">
        <section class="section9">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <h2 class="section9__header">ЭТИ ДЕВУШКИ УЖЕ ПОПРОБОВАЛИ Wellness!</h2>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="section9__slider">
                                <div class="section9__userblock col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <img src="img/user-photo/1.png" alt="">
                                        <p class="section9__text">
                                            <strong>Взяла абонемент, за месяц результат - минус 17 kg с 52 размера одежды на 46.</strong> Купила второй абонемент, очень нравится, и хотя сейчас после каждой тренировки уходит вес граммами по 300- 400грамм за неделю виден хороший результат. Прибавилось сил, энергии и желания продолжать. Желаю всем девчонкам быть красивыми!!!!!
                                            <!--
                                                                                                Перед свадьбой из-за стресса набрала лишнего, и переживала, как похудеть то?! Услышала про Wellness , почитала отзывы и купила. <strong>В итоге, я похудела на 6,5 килограмм и при этом, вес
                                                                                                    держится уже пол года. Ну а свадебное платье было даже немного велико!</strong> Принимать саше просто и удобно, главное не забывать, и вкус очень приятный! -->
                                        </p>
                                        <span class="section9__username">Алина, 42 года</span>
                                    </div>
                                </div>
                                <div class="section9__userblock col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <img src="img/user-photo/2.png" alt="">
                                        <p class="section9__text">
                                            У нас в городе открыли Wellness-студию, мне было интерсено что же это такое. Нашла информацию в интернете и начала ходить на вакуумный тренажер. После третьего похода уже стали заменты первые результаты, контур тела стал ровнее, а так же маленько ушли объемы, уменьшился целлюлит, ушел живот. <strong>После того как я отходила все десять сеансов, результат был очень хороший, все тело хорошо подтянулось, целлюлита не стало, животик пропал, а это была моя главная проблема. Спасибо студии WELLNESS!</strong>

                                            <!-- 													В моем возрасте уже сложно выполнять различные физические упражнения и сидеть на диетах, а выглядеть стройной и привлекать мужчин все еще хочется. <strong>Решила попробовать Wellness по совету
                                                                                                    подруги и осталась под впечатлением.</strong> Результатом очень довольна! -->
                                        </p>
                                        <span class="section9__username">Яна, 32 лет</span>
                                    </div>
                                </div>
                                <div class="section9__userblock col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <img src="img/user-photo/3.png" alt="">
                                        <p class="section9__text">
                                            Увидела я как-то акцию бесплатное занятие в Wellness-студии. Решила попробовать. Расскажу сначала о себе. Я никогда не страдала от лишнего веса но все изменилось после родов. Появились все проблемные зоны, это конечно живот и бедра.<strong> После курса я сбросила 23 кг. влезла в свои "дородовые" штаны.</strong> Если я раньше не могла их не то что застегнуть, даже натянуть. Целлюлит тоже явно уменьшился. Так что рекомендую.

                                            <!-- 													сегда стеснялась своих форм и мечтала похудеть, но времени на спортзал и диеты нет, так как я воспитываю трех детей! <strong>Купила Wellness и через 7 дней не поверила цифре на весах! И почему
                                                                                                    раньше не было такого классного средства?</strong> -->
                                        </p>
                                        <span class="section9__username">Василиса, 34 года</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <p class="section9__footer_text">Создать идеальное тело - <strong>легко</strong> вместе с Wellness!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

<br>
<br>
<br>


<div class="bottom-order">
    <!-- 			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <p class="section9__footer_text">Создать идеальное тело - <strong>легко</strong> вместе с Wellness!</p>
                    </div>
                </div> -->
    <h2 class="section10__header"><span class="pink">НАЧНИТЕ НОВУЮ ЖИЗНЬ</span> В СТРОЙНОМ ТЕЛЕ УЖЕ СЕГОДНЯ!</h2>

    <div class="section1__formblock section10__leftblock bottom-order_form">
        <div class="row">
            <div class="section1__form">
                <h4 class="section1__form_header">Запишись на <span class="section1__free">бесплатное</span> <span class="form__header_text">занятие уже сегодня!</span></h4>
                <div class="header__counter">
                    <div class="counter__num">
                        <span class="counter__num_text">Осталось</span>
                        <div class="countdown__wrap">
                            <!-- 									<span class="hour">0</span>
                                                                <span class="minute">0</span>
                                                                <span class="second">5</span> -->
                        </div>
                        <div class="counter__hour">
                            <span class="counter__num_item">0</span>
                            <!-- <span class="header__counter text-bottom">часов</span> -->
                        </div>
                        <div class="counter__min">
                            <span class="counter__num_item">0</span>
                            <!-- <span class="header__counter text-bottom">минут</span> -->
                        </div>
                        <div class="counter__sec">
                            <span class="counter__num_item">8</span>
                            <!-- <span class="header__counter text-bottom">секунд</span> -->
                        </div>
                    </div>
                    <span class="counter__num_text counter__num_textBottom">бесплатных мест</span>
                </div>

                <form class="form landing__form" action="../../send.php" method="post" onsubmit="validateform(this); return false;">
                    <li class="form__item">
                        <input name="name" class="form__input form__select" placeholder="Ф.И.О">
                    </li>
                    <li class="form__item">
                        <input placeholder="Возраст" type="text" name="age">
                    </li>
                    <li class="form__item">
                        <input placeholder="Телефон" type="tel" class="form__input" name="phone">
                    </li>
                    <p style="text-align:center; font-size:12px;">*курс подбирается индивидуально для клиента </p>
                    <li class="form__item">
                        <input type="submit" value="ЗАПИСАТЬСЯ" class="bottom-order_order-btn">
                    </li>
                    </ul>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <p style="font-size: 10px;"><?=BlackBox::geo()->legal()?></p>
    <p><a href="../politika.php" target="_blank">Политика конфиденциальности</a></p>
</div>


<!-- <script src="js/jquery.cookie.min.js"></script> -->
<!-- <script src="js/purl.min.js"></script> -->
<!-- <script src="js/jquery.countdown.min.js"></script> -->
<script src="js/slick.min.js"></script>
<!-- <script src="js/leadprofit.js"></script> -->
<!-- 		<script type="text/javascript">
			$(document).ready(function () {
				$(".landing__form").leadprofit({
					hash: "efdb8325-9e2e-4347-ace3-5e46a06e80f4"
				}).leadprofitSubmit({
					confirmUrl: '../../confirm.html',
					counterParams: {
						country: "{country}",
						version: document.location.pathname.replace(/\/+/g, '').replace('landings', '').replace('index.html', '').replace('index2.html', '').replace('confirm.html', '')
					}
				});
			});

		</script> -->
<script src="js/main.js"></script>
<!--     <script src="../bun/bun.js" charset="utf-8"></script> -->
<!-- <script src="js/price.js"></script> -->

<!-- <script src="js/jquery.luckyPlugin-min.js"></script> -->
<!-- 		<script>
			$(document).ready(function () {
				$(document).luckyPlugin({
					top: false
				});
			});
		</script> -->


<script>
    
    $(document).ready(function(){
        // slick slider initialization 
        $(".section9__slider").slick({
            infinite: !0,
            slidesToShow: 3,
            responsive: [{breakpoint: 991, settings: {slidesToShow: 1, dots: true}}]
        })


        // counter
        var counter = 8;
        var step = Math.floor(Math.random() * 40000) + 10000;
        var interval = setInterval(function() {
            counter--;
            jQuery(".counter__sec .counter__num_item").html(counter);
            if (counter == 1) {
                //Do something
                //jQuery("#number").html("Countdown ended!");
                // Stop the counter
                clearInterval(interval);
            }
        }, step);

        });

</script>

<!-- form validation -->
<script>
    function validateform(form) {
        if (form.elements["name"].value == "") {
            alert("Please, enter your full name");
            return false;
        }
        if (form.elements["name"].value.length < 2) {
            alert("Please, enter your full name");
            return false;
        }
        var phone_reg = new RegExp('[A-z А-я]', 'g');
        var literInPhone = phone_reg.test(form.elements["phone"].value);
        if (form.elements["phone"].value == "") {
            alert("Please, enter your phone number");
            return false;
        }
        if (literInPhone) {
            alert("Please, enter your phone number");
            return false;
        }
        if (form.elements["phone"].value.length < 9) {
            alert("Please, enter your phone number");
            return false;
        }

        form.querySelector(".btn").setAttribute("disabled", true);
        form.submit();
    }
</script>

</body>
</html>