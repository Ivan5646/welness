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
<html>
<head>
    <base href="<?="//{$_SERVER['HTTP_HOST']}{$_SERVER['DOCUMENT_URI']}"?>">
    <meta charset="utf-8">
    <title>Бесплатное занятие на wellness-тренажерах <?=$inCity?></title>
    <link  rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2|Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?= BlackBox::Geo()->geoClarify('popup') ?>
<div class="header">
    <div class="header-wrap">
        <div class="container">
            <div class="row">
                <h1><strong>Бесплатное</strong> занятие в Wellness-студии <?=$inCity?></h1>
                <h2>Акция действительна до <?= $inDate ?>!</h2>
                <?php if (BlackBox::Lead()->getParam('geo') == 27790) :?>
                    <h5>На бесплатном занятии Вы получите:</h5>
                    <ul class="short-advantages-list">
                        <li>Личного инструктора</li>
                        <li>Подбор программы тренировки</li>
                        <li>Контрольные измерения</li>
                        <li>3 процедуры на уникальных аппаратах</li>
                        <li>Рекомендации по питанию</li>
                    </ul>
                   <?php endif ?>
                <a class="btn-blue go_to" href="#form">Записаться на бесплатное занятие</a>
            </div>
        </div>
    </div>
</div>

<div class="advantages">
    <div class="container">
        <h2 id="a2">Прийдя к нам, Вы получите:</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="icon-wrap">
                    <img src="img/1.png" alt="">
                </div>
                <h3>Ощутимые результаты</h3>
                <p>Первые результаты заметны уже после нескольких занятий. Эффективные тренажеры позволяют легко терять за одну процедуру до 2400 калорий.</p>
            </div>
            <div class="col-md-4">
                <div class="icon-wrap">
                    <img src="img/3.png" alt="">
                </div>
                <h3>Безопасность</h3>
                <p>Секрет обретения идеальной фигуры давно разгадан женщинами прогрессивных стран — это в первую очередь безопасное похудение.</p>
            </div>
            <div class="col-md-4">
                <div class="icon-wrap">
                    <img src="img/9.png" alt="">
                </div>
                <h3>Поддержка</h3>
                <p>В wellness-студии Вы найдете ответы на многие вопросы, волнующие практически каждую женщину, которая решила для себя «хочу похудеть!».</p>
            </div>
        </div>
        <?php if (BlackBox::Lead()->getParam('geo') == 27790) :?>
            <h5>Для Вашего удобства мы находимся <strong>в 350 метрах от метро Тропарево по адресу: ул.Академика Анохина, 60</strong></h5>
        <?php endif ?>
    </div>
</div>
<div class="about">
    <div class="container">
        <h2 id="a3">Что такое Wellness?</h2>
        <div class="row">
            <div class="about-point">
                <p>Wellness – состояние хорошего физического и ментального здоровья как результат правильного питания, физической активности и полезных привычек.</p>
            </div>
            <div class="about-point">
                <p><strong>Wellness-тренировки отлично подходят для людей с противопоказаниями или ограничениями в физических нагрузках.</strong></p>
            </div>
            <div class="col-md-10 col-md-offset-2 about-content">
                <div class="about-point">
                    <?php if (BlackBox::Lead()->getParam('geo') == 27790) :?>
                        <h4>Преимущества занятий в Wellness club SlimPark:</h4>
                        <ul class="advantages-list">
                            <li>Уникальное оборудование разработаны с учетом особенностей женской фигуры</li>
                            <li>Красивое тело без диет и изнурительных тренировок</li>
                            <li>Персональный инструктор входит в стоимость абонемента</li>
                            <li>Разработка персональной программы тренировок с учетом особенностей вашего организма входит в стоимость абонемента</li>
                            <li>Гибкая и прозрачная ценовая политика</li>
                            <li>Уютная домашняя атмосфера, формат NO MAN</li>
                            <li>Мы болеем за результат, поэтому делаем регулярные замеры и при необходимости корректируем программу</li>
                            <li>Мы ценим Ваше время, поэтому ведем предварительную запись на каждый тренажер. Вы всегда закончите тренировку своевременно</li>
                            <li>Мы подберем программу с учетом вашего физического состояния. У нас можно заниматься в любом возрасте и даже при имеющихся ограничениях</li>
                            <li>Результат гарантирован</li>
                            <li>Красота «под ключ» (возможность делать все в одном месте: и массаж и маникюр и тренировки и фитобар)</li>
                        </ul>
                    <?php else :?>

                        <p>Основные принципы Wellness:</p>
                        <ul>
                            <li>расслабление и гармония (избежание стрессов или избавление от них);</li>
                            <li>красота и уход за телом;</li>
                            <li>движение (sport for fun, «шутя»);</li>
                            <li>питание (естественно, сбалансированное);</li>
                            <li>умственная активность.</li>
                        </ul>
                    <?php endif ?>

                </div>

            </div>
            <div class="about-point">
                <p>Wellness подразумевает комплексное использование методик оздоровления, состоящих из диетологии, реабилитационных программ,
                    психологического оздоровления, функционального тренинга, СПА-процедур и т.д. Такое сочетание умеренной физической активности,
                    расслабляющих процедур и здорового питания дает оздоровительный эффект.</p>
            </div>
        </div>
    </div>
</div>
<div class="form">
    <div class="form-wrap">
        <h2 id="a4">Запишись на пробное занятие уже сегодня!</h2>
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <!--                <h2 id="a4">Запишись на пробное занятие уже сегодня!</h2>-->
                    <h3>Спешите! Количество бесплатных<br> мест <strong>ограничено</strong>!</h3>
                    <form class="" action="../send.php" method="post" id="form">
                        <div class="form-group">
                            <input class="form-control" type="text" name="age" value="" placeholder="Ваш возраст" required="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" value="" placeholder="Ваше имя" required="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="phone" value="" placeholder="Ваш телефон" required="">
                        </div>
                        <button type="submit" class="btn-blue" name="button">Получить бесплатное занятие</button>
                    </form>
                    <div class="contraindications">
                        <h4 class="text-center">Противопоказания:</h4>
                        <ul>
                            <li>онкология;</li>
                            <li>кардиостимулятор;</li>
                            <li>кожные заболевания;</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <p style="font-size: 10px;"><?=BlackBox::geo()->legal()?></p>
    <p><a href="../politika.php">Политика конфиденциальности</a></p>
</div>
<script src="//ajax.ɡooɡleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<?=BlackBox::validationScript()?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.go_to').click( function(){ // ловим клик по ссылке с классом go_to
            var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
            if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
                $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); // анимируем скроолинг к элементу scroll_el
            }
            return false; // выключаем стандартное действие
        });
    });
</script>

</body>
</html>
