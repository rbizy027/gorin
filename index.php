<?php
    require_once("ipgeobase/ipgeobase.php");
    $gb = new IPGeoBase();
    //$ip = '62.133.160.0';
    $ip = $_SERVER['REMOTE_ADDR'];
    $data = $gb->getRecord($ip);

    $cityes = array('Челябинск' => 'second', 'Новосибирск' => 'first', 'Нижний Новгород' => 'third', 'Уфа' => 'fourth');
    $city_class = isset($cityes[$data['city']]) ? $cityes[$data['city']] : 'fourth';
    $contact_classes = array('first' => 'map1', 'second' => 'map2', 'third' => 'map3', 'fourth' => 'map4');
    $contact_class = 'phone-info '. $contact_classes[$city_class];
    //die($city_class);
?>

<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 no-js"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js"> <!--<![endif]-->

<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MFMCLH8');</script>
  <!-- End Google Tag Manager -->
    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<meta name="yandex-verification" content="c9a2a60480e275a1" />
	<title>Печи для бани Горыныч 3 👍 Купить банную печь жар Горыныч 2, цена | Термосфера</title>
	<meta name="description" content="Купить банную печь Горыныч-3 с лютым характером! Печь пользуется огромной популярностью в русских банях за счет надежности, практичности и функциональности. Узнать цену!" />

    <meta content="width=1024, minimum-scale= 0.1, maximum-scale=1.0 " name="viewport" />

    <!-- CSS
  ================================================== -->
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/fixes.css" rel="stylesheet" type="text/css" />
    <!-- JS
  ================================================== -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <!-- bxSlider -->
    <script src="js/jquery.bxslider.min.js"></script>
    <link href="css/jquery.bxslider.css" rel="stylesheet" />

    <!-- fancyBox -->
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="js/jquery.inputmask.js"></script>
	<link rel="stylesheet" href="css/jquery.fancybox.css" media="screen"/>

    <!-- bPopUp-->
    <link type="text/css" rel="stylesheet" media="screen" href="css/modals.css" />
    <script src="js/jquery.bpopup.min.js" type="text/javascript"></script>
    <script>
        $(function() {
            $('#input-phone').inputmask('9(999)999-99-99');
            $('.phone-info').attr('class', '<?php echo $contact_class?>')
            $('.map1').find('.map_location').hide();
            $('.map1').find('.adress').hide();
            $('.map1').find('.phone-info').hide();
            <?  if(isset($cityes[$data['city']])): ?>
                $('.map1').find('.map_location.<?php echo $city_class?>').show();
                $('.map1').find('.adress.<?php echo $city_class?>').show();
            <? else: ?>
                $('.map1').find('.map_location.fourth').show();
                $('.map1').find('.adress.fourth').show();
            <? endif ?>
        })
    </script>
	<!--<noindex><script async src="data:text/javascript;charset=utf-8;base64,ZnVuY3Rpb24gbG9hZHNjcmlwdChlLHQpe3ZhciBuPWRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoInNjcmlwdCIpO24uc3JjPSIvL2xwdHJhY2tlci5ydS9hcGkvIitlO24ub25yZWFkeXN0YXRlY2hhbmdlPXQ7bi5vbmxvYWQ9dDtkb2N1bWVudC5oZWFkLmFwcGVuZENoaWxkKG4pO3JldHVybiAxfXZhciBpbml0X2xzdGF0cz1mdW5jdGlvbigpe2xzdGF0cy5zaXRlX2lkPTI0NTAwO2xzdGF0cy5yZWZlcmVyKCl9O3ZhciBqcXVlcnlfbHN0YXRzPWZ1bmN0aW9uKCl7alFzdGF0Lm5vQ29uZmxpY3QoKTtsb2Fkc2NyaXB0KCJzdGF0c19hdXRvLmpzIixpbml0X2xzdGF0cyl9O2xvYWRzY3JpcHQoImpxdWVyeS0xLjEwLjIubWluLmpzIixqcXVlcnlfbHN0YXRzKQ=="></script></noindex>-->
	<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-163320-2qUjJ';</script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFMCLH8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="layout">
    <!-- header -->
    <header id="main">
        <div class="header">
            <div class="limit">
                <a href="#" class="logo" alt="Печь для бани Горыныч 3 - Термосфера"></a>
                <div class="call-side">
                    <div class="phone">
                        <div class="line uppercase">
                            <div class="icon"></div>
                            Контактный телефон
                        </div>
                        <!-- <div class="number">8-347-<span>275-09-32</span></div> -->
						<div class="phone-info map1">  <!-- .map1 .map2 .map3 .map4-->
							 <!-- <div class="number first">
								8-800-<span>2009-510</span>
							</div>
							<div class="number second">
								8-800-<span>2009-510</span>
							</div>
							<div class="number third">
								8-800-<span>2009-510</span>
							</div>
							<div class="number fourth">
								<span>8-347-275-09-32</span>
							</div> -->
							<div class="number roistat-phone-3"><!--<span class="lptracker_phone"--> 8 (905) 352-00-11</div>
						</div>
                    </div>
                    <div style="clear: both;"></div>
                    <a href="#" class="button blue" id="callback">перезвоните мне</a>
                    <div style="clear: both;"></div>
					<div class="mail">
						<div class="icon"></div>
						<div class="uppercase">E-mail:</div>
						<a href="#">termosfera@inbox.ru</a>
					</div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>

        <!-- block1 -->
        <div class="block1">
            <div class="limit">
                <h1 class="h1 color-blue">Банная печь Горыныч <br>на 3 помещения</h1>
                <div class="hr title"></div>
                <h3><span>обогрев</span><br>парной, моечной и комнаты отдыха</h3>
                <div class="contejner">
                    <img class="left" src="images/content/img1.png" alt="Банная печь Горыныч 3 фото"/>
                    <img src="images/content/img2.png" alt="3D модель банной печи Горыныч-3 фото"/>
                    <img class="center" src="images/content/img3.png" alt="Печи для бани Горыныч-3 фото"/>
                    <div style="clear: both;"></div>
                </div>
                <h3 class="b1-ttl">Оставьте заявку, чтобы получить консультацию специалиста</h3>
                <a href="#" class="button brown" id="gorinich">Оставить заявку</a>
                <div class="hr"></div>
				<div class="shipping"><img src="/images/shipping.png"></div>
            </div>
        </div>
        <?/*<div class="bottom-box">
            <div class="arrow"></div>
        </div>*/?>
    </header>

	<div class="block6 part">
        <div class="bottom-box">
            <div class="arrow"></div>
        </div>
    </div>

    <!-- block9 -->
    <div class="block9">
        <div class="limit">
            <div class="h1">вид бани при расположении печи с правой и левой каменкой</div>
            <div class="hr title"></div>
            <div class="left">
                <div class="headline">схема бани при установке печи горыныч-3,</div>
                <div class="sub-title">каменка слева</div>
                <img src="images/content/img1_block9.png" alt="Схема бани при установке печи Горыныч-3 с каменкой слева фото"/>
                <div class="plan-first">
                    <div class="section first">Парная</div>
                    <div class="section second">моечное отделение</div>
                    <div class="section third">Комната отдыха</div>
                </div>
            </div>
            <div class="right">
                <div class="headline">схема бани при установке печи горыныч-3,</div>
                <div class="sub-title">каменка справа</div>
                <img src="images/content/img2_block9.png" alt="Схема бани при установке печи Горыныч-3 с каменкой справа фото"/>
                <div class="plan-second">
                    <div class="section first">моечное отделение</div>
                    <div class="section second">Парная</div>
                    <div class="section third">Комната отдыха</div>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>

    <!-- block13 -->


    <div class="block13">
		<!--	<video width="640" height="360" controls="controls" poster="video/duel.jpg">
			<source src="video.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
			Тег video не поддерживается вашим браузером.
		</video> -->

        <div class="limit">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/5ohEwAfadzY?controls=0&rel=0&showinfo=0&border=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="bottom-box">
                <div class="arrow"></div>
        </div>
        <br>
    </div>

	<!-- block2 -->
        <div class="block2" id="work">
            <div class="limit">
                <br>
                <h2 class="h1 color-brown">Основной принцип работы печи</h2>
                <div class="hr title"></div>
                <h3>Топка расположенна в перегородке между моечной и парной</h3>
				<br>
				<div class="contejner">
					<div class="w-row">
						<div class="w-col w-col-6">
							<div class="preimuch-2">
								<p class="preimuch-text"><span class="orange-bold">Моечная</span><br>Обогрев моечной за счет бака и выступающей части топки</p>

								<img src="/images/teh/5c474aaef83b6b09cda3ffb3_preimuch-ar-d.png" alt="Обогрев моечной за счет бака и выступающей части топки | Горыныч 3" class="image-32">
							</div>

							<img style="margin-top: 15px;" src="/images/teh/5c7412cf33128214143eda61_peregorodka-l-t.png">
						</div>

						<div class="w-col w-col-6">
							<img src="/images/teh/5c7412de2d05ce3fe09b0c82_peregorodka-r-t.png" alt="Каменка занимает мало места в парной | Горыныч 3" class="kamenka">

							<div class="preimuch-2">
								<p class="preimuch-text"><span class="orange-bold">Парная</span><br>Каменка занимает мало места в парной</p>

								<img src="/images/teh/5c474aea6029e8a5386fe616_preimuch-ar-u.png" class="image-33">
							</div>
						</div>
					</div>
				</div>
				<div style="clear: both;"></div>
				<br>

            </div>
            <div class="bottom-box">
                <div class="arrow"></div>
            </div>
        </div>

    <!-- block3 -->
    <div class="block3">
        <div class="limit">
            <h2 class="h1 color-blue">Преимущества печи горыныч-3</h2>
            <div class="hr title"></div>
            <div class="contejner">
                <div class="left">
                    <div class="point">
                        <img src="images/content/img9.png" alt="Толщина стенки печи Горыныч"/>
                        <div class="title">толщина топки</div>
                        <div class="sub-title">8мм</div>
                    </div>
                    <div class="point point2">
                        <img src="images/content/img10.png" alt="Компактность печи Горыныч"/>
                        <div class="title">компактность печи</div>
                        установленная печь занимает мало пространства<br />
                        в парной размер каменки 40*70 см.<br />
                        в моечной бак на стене 30*70
                    </div>
                </div>
                <div class="center">
                    <div class="point point5">
                        <img src="images/content/img13.png" alt="Безколосниковый принцип работы печи"/>
                        безколосниковый принцип<br />
                        продольного горения
                    </div>
                </div>
                <div class="right">
                    <div class="point">
                        <img src="images/content/img11.png" alt="Высокий срок службы печи"/>
                        <div class="title">Срок службы</div>
                        <div class="sub-title">более 15 лет</div>
                    </div>
                    <div class="point point4">
                        <img src="images/content/img12.png" alt="Высокий КПД"/>
                        <div class="title">высокий</div>
                        <div class="sub-title">кпд</div>
                        За счет изгибов дымохода<br />
                        длинной 1 метр<br />
                        дымовые газы догорают<br />
                        и прогревают баню и камин
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>

    <!-- block4 -->
    <div class="block4">
        <div class="limit">
            <h2 class="h1 color-brown">плюсы продольного горения</h2>
            <div class="hr title"></div>
            <div class="contejner">
                <div class="left">
                    <h3>Обычное горение</h3>
                </div>
                <div class="center">
                    <h5>безколосниковая конструкция топки<br />
                    Реже чистка золы<br />
                    температура горения выше<br />
                    Выше кпд</h5>
                    <a href="#" class="button brown" id="plus">Оставить заявку</a>
                    <div class="hr"></div>
                </div>
                <div class="right">
                    <h3>продольное горение</h3>
                    <div class="text line1">дрова горят в длинну</div>
                    <div class="text line2">продольное горение</div>
                    <div class="text line3">подача воздуха горения</div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <div class="bottom-box">
            <div class="arrow"></div>
        </div>
    </div>

    <!-- block5 -->
    <div class="block5">
        <div class="limit">
            <div class="h1">Заказать печь</div>
            <div class="hr title"></div>
            <div class="contejner">
                <div class="left_image"></div>
                <div class="right_image"></div>
                <div style="clear: both;"></div>
                <div class="button-block">
                    <a href="#" class="button blue" id="buy">Заказать</a>
                    <div class="hr"></div>
                </div>
            </div>
        </div>
        <div class="bottom-box">
            <div class="arrow"></div>
        </div>
    </div>


	<!-- block6 -->
    <div class="block6" id="cost">
        <div class="limit">

            <div class="h1 color-brown">Варианты печи</div>
            <div class="hr title"></div>
            <div class="lider"></div>
            <div class="center-text">
                Особенностью этой печи является то,<br />
                что перегородка между мойкой и парной<br />
                проходит по поверхности печи,<br />
                разделяя ее тем самым на две части
            </div>
            <div class="contejner">
                <div class="left-side left">
                    <div class="name">Горыныч-мини, каменка слева</div>
                    <img src="images/content/skazka-l.jpg" alt="Горыныч-мини, каменка слева"/>
                </div>
                <div class="center-part">
                    ОБЪЕМ МОЕЧНОЙ 7-12 М<sup>3</sup><br />
                    ОБЪЕМ ПАРНОЙ 7-12 М<sup>3</sup><br />
                    КПД ПЕЧИ 70%<br />
                    РАЗМЕРЫ, (Д*Ш*В) 670*750*950 ММ.<br />
                    МАССА ПЕЧИ 130 КГ. МАССА КАМНЕЙ 80 КГ.<br />
                    ТОЛЩИНА ТОПКИ 8 ММ.<br />
                    БАК ДЛЯ ВОДЫ 65 ЛИТРОВ
                    <div class="cost">Цена: печь 21 800 р. + бак 5 300 р.</div>
					<div class="cost">Итого: 27 100 р.</div>
                </div>
                <div class="right-side right">
                    <div class="name">Горыныч-мини, каменка справа</div>
                    <img src="images/content/skazka-r.jpg" alt="Горыныч-мини, каменка справа"/>
                </div>
				<br>
				<br>
				<a class="button brown" id="camin" href="#">Оставить заявку</a>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>

	<!-- block7 -->
    <div class="block7">
        <div class="limit">
            <ul class="bxslider">
                <li>
                    <div class="slide"><a class="fancybox" rel="pech1" href="images/slide/full-skazka-1.jpg"><img src="images/slide/skazka-1.png" alt="Печь для бани Горыныч-3 Сквазка фото 1"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech1" href="images/slide/full-skazka-2.jpg"><img src="images/slide/skazka-2.png" alt="Печь для бани Горыныч-3 Сквазка фото 2"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech1" href="images/slide/full-skazka-3.jpg"><img src="images/slide/skazka-3.png" alt="Печь для бани Горыныч-3 Сквазка фото 3"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech1" href="images/slide/full-skazka-4.jpg"><img src="images/slide/skazka-4.png" alt="Печь для бани Горыныч-3 Сквазка фото 4"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech1" href="images/slide/full-skazka-5.jpg"><img src="images/slide/skazka-5.png" alt="Печь для бани Горыныч-3 Сквазка фото 5"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech1" href="images/slide/full-skazka-6.jpg"><img src="images/slide/skazka-6.png" alt="Печь для бани Горыныч-3 Сквазка фото 6"/></a></div>
                </li>
            </ul>
        </div>
        <div class="bottom-box"></div>
    </div>

	<!-- block6 -->
    <div class="block6" id="cost">
        <div class="limit">

            <!--<div class="h1 color-brown">Варианты печи</div>
            <div class="hr title"></div>
            <div class="lider"></div>-->
            <div class="center-text">
                Особенностью этой печи является то,<br />
                что перегородка между мойкой и парной<br />
                проходит по поверхности печи,<br />
                разделяя ее тем самым на две части
            </div>
            <div class="contejner">
                <div class="left-side left">
                    <div class="name">Горыныч-3, каменка слева</div>
                    <img src="images/content/img1_block6.png" alt="Горыныч-3, каменка слева"/>
                </div>
                <div class="center-part">
                    Объем моечной 10-18 м<sup>3</sup><br />
                    Объем парной 8-18 м<sup>3</sup><br />
                    КПД печи 80-90%<br />
                    Размеры,   (Д*Ш*В)  1000*775*920 мм.<br />
                    Масса печи 200 кг. Масса камней 100 кг.<br />
                    Толщина топки 8 мм.<br />
                    бак для воды 100 литров
                    <div class="cost">Цена: печь 41 500 р. + бак 6 500 р.</div>
					<div class="cost">Итого: 48 000 р.</div>
                </div>
                <div class="right-side right">
                    <div class="name">Горыныч-3, каменка справа</div>
                    <img src="images/content/img2_block6.png" alt="Горыныч-3, каменка справа"/>
                </div>
				<br>
				<br>
				<a class="button brown" id="camin" href="#">Оставить заявку</a>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>

    <!-- block7 -->
    <div class="block7">
        <div class="limit">
            <ul class="bxslider">
                <li>
                    <div class="slide"><a class="fancybox" rel="pech2" href="images/slide/full-slide1.jpg"><img src="images/slide/slide1.png" alt="Печь для бани Горыныч-3 без стекла фото 1"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech2" href="images/slide/full-slide2.jpg"><img src="images/slide/slide2.png" alt="Печь для бани Горыныч-3 без стекла фото 2"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech2" href="images/slide/full-slide3.jpg"><img src="images/slide/slide3.png" alt="Печь для бани Горыныч-3 без стекла фото 3"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech2" href="images/slide/full-slide4.jpg"><img src="images/slide/slide4.png" alt="Печь для бани Горыныч-3 без стекла фото 4"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech2" href="images/slide/full-slide5.jpg"><img src="images/slide/slide5.png" alt="Печь для бани Горыныч-3 без стекла фото 5"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech2" href="images/slide/full-slide6.jpg"><img src="images/slide/slide6.png" alt="Печь для бани Горыныч-3 без стекла фото 6"/></a></div>
                </li>
            </ul>
        </div>
        <div class="bottom-box"></div>
    </div>

    <!-- block6 -->
    <div class="block6">
        <div class="limit">
            <div class="contejner">
                    <div class="left-side left">
                        <div class="headline">Горыныч-3</div>
                        <div class="name">дверь стекло, каменка слева</div>
                        <img src="images/content/img1_block8.png" alt="Горыныч 3 дверь стекло, каменка слева"/>
                    </div>
                    <div class="center-part">
                        Объем моечной 10-18 м<sup>3</sup><br />
                        Объем парной 8-18 м<sup>3</sup><br />
                        КПД печи 80-90%<br />
                        Размеры,   (Д*Ш*В)  1000*775*920 мм.<br />
                        Масса печи 200 кг. Масса камней 100 кг.<br />
                        Толщина топки 8 мм.<br />
                        бак для воды 100 литров
                        <div class="cost">Цена: печь 57 000 р. + бак 6 500 р.</div>
						<div class="cost">Итого: 63 500 р.</div>
                    </div>
                    <div class="right-side right">
                        <div class="headline">Горыныч-3</div>
                        <div class="name">дверь стекло, каменка справа</div>
                        <img src="images/content/img2_block8.png" alt="Горыныч 3 дверь стекло, каменка справа"/>
                    </div>
					<br>
					<br>
					<a class="button brown" id="camin" href="#">Оставить заявку</a>
                    <div style="clear: both;"></div>
            </div>
        </div>
    </div>

    <!-- block8 -->
    <div class="block8">
        <div class="limit">
            <ul class="bxslider1">
                <li>
                    <div class="slide"><a class="fancybox" rel="pech3" href="images/slider2/full-slide1.jpg"><img src="images/slider2/slide1.png" alt="Печь для бани Горыныч-3 со стеклом фото 1"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech3" href="images/slider2/full-slide2.jpg"><img src="images/slider2/slide2.png" alt="Печь для бани Горыныч-3 со стеклом фото 2"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech3" href="images/slider2/full-slide3.jpg"><img src="images/slider2/slide3.png" alt="Печь для бани Горыныч-3 со стеклом фото 3"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech3" href="images/slider2/full-slide4.jpg"><img src="images/slider2/slide4.png" alt="Печь для бани Горыныч-3 со стеклом фото 4"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech3" href="images/slider2/full-slide5.jpg"><img src="images/slider2/slide5.jpg" alt="Печь для бани Горыныч-3 со стеклом фото 5"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech3" href="images/slider2/full-slide6.jpg"><img src="images/slider2/slide6.jpg" alt="Печь для бани Горыныч-3 со стеклом фото 6"/></a></div>
                </li>
            </ul>
        </div>
        <div class="bottom-box"></div>
    </div>

    <!-- block6 -->
    <div class="block6 part">
        <div class="limit">
            <div class="contejner">
                    <div class="left-side left">
                        <div class="headline">Камин банный</div>
                        <div class="name">дверь стекло, каменка слева</div>
                        <img src="images/content/img16.png" alt="Камин банный дверь стекло, каменка слева"/>
                    </div>
                    <div class="center-part">
                        Объем моечной 10-18 м<sup>3</sup><br />
                        Объем парной 8-18 м<sup>3</sup><br />
                        Объем отапливаемой комнаты отдыха 50 м<sup>3</sup><br />
                        КПД печи 80-90%<br />
                        Размеры,   (Д*Ш*В)  1000*775*920 мм.<br />
                        Масса печи 260 кг. Масса камней 100 кг.<br />
                        Толщина топки 8 мм.<br />
                        бак для воды 100 литров
                        <div class="cost">Цена: печь 82 500 р. + бак 6 500 р.</div>
						<div class="cost">Итого: 89 000 р.</div>
                        <div class="headline">объем отапливаемой<br />
                            комнаты отдыха<br />50м<sup>3</sup>
                        </div>
                        <span style="font-size: 18px; font-weight: bold;">встроенная система воздушного отопления</span>

                    </div>
                    <div class="right-side right">
                        <div class="headline">Камин банный</div>
                        <div class="name">дверь стекло, каменка справа</div>
                        <img src="images/content/img17.png" alt="Камин банный дверь стекло, каменка справа"/>
                    </div>
                    <div style="clear: both;"></div>
                    <a class="button brown" id="camin" href="#">Оставить заявку</a>
            </div>

        </div>
    </div>

	<!-- block8 -->
    <div class="block8">
        <div class="limit">
            <ul class="bxslider1">
                <li>
                    <div class="slide"><a class="fancybox" rel="pech4" href="images/slider3/full-slide1.jpg"><img src="images/slider3/slide1.jpg" alt="Камин банный со стеклом фото 1"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech4" href="images/slider3/full-slide2.jpg"><img src="images/slider3/slide2.jpg" alt="Камин банный со стеклом фото 2"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech4" href="images/slider3/full-slide3.jpg"><img src="images/slider3/slide3.jpg" alt="Камин банный со стеклом фото 3"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech4" href="images/slider3/full-slide4.jpg"><img src="images/slider3/slide4.jpg" alt="Камин банный со стеклом фото 4"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech4" href="images/slider3/full-slide5.jpg"><img src="images/slider3/slide5.jpg" alt="Камин банный со стеклом фото 5"/></a></div>
                </li>
                <li>
                    <div class="slide"><a class="fancybox" rel="pech4" href="images/slider3/full-slide6.jpg"><img src="images/slider3/slide6.jpg" alt="Камин банный со стеклом фото 6"/></a></div>
                </li>
            </ul>
        </div>
        <div class="bottom-box"></div>
    </div>
	<br>
	<br>

    <!-- block10
    <div class="block10">
        <div class="limit">
            <div class="h1">схема фундамента</div>
            <div class="hr title"></div>
            <div class="scheme left"></div>
            <div class="scheme right"></div>
            <div style="clear: both;"></div>
            <a class="button brown" id="schema" href="#">Оставить заявку</a>
            <div class="hr"></div>
        </div>
        <div class="bottom-box">
            <div class="arrow"></div>
        </div>
    </div> -->

    <!-- block11 -->
	<!--noindex-->
    <div class="block11" id="about-us">
        <div class="limit">
            <div class="h1">Отзывы</div>
            <div class="hr title"></div>
            <!-- -->
            <div class="review left-side">
                <div class="photo"><img src="images/review/1.png" alt="Отзыв Анатолия Егорова о печи Горыныч 3"/></div>
                <div class="name">Анатолий Егоров</div>
                Печь работает замечательно. Экономия дров однозначно. Вся баня 5*3 м., при этом парная 3*2,5 м. абсолютно прогревается за 2 часа.
                Бачок с водой прогревается вовремя. Я полностью доволен. Печь сделана очень грамотно.
                <div class="border"></div>
            </div>
            <!-- -->
            <div class="review right-side">
                <div class="photo"><img src="images/review/2.png" alt="Отзыв Вадима Гильванова о печи Горыныч 3"/></div>
                <div class="name">Вадим Гильванов</div>
                В целом все отлично. Быстро греется парная и моечная. Приятно смотреть вечером на камин и слушать потрескивание.
                Со временем стекло пачкается и его приходиться чистить.  В моечной тепло, есть окно для проветривания.
                <div class="border"></div>
            </div>
            <!-- -->
            <div class="review left-side">
                <div class="photo"><img src="images/review/3.png" alt="Отзыв Рузиля Тазетдинова о печи Горыныч 3"/></div>
                <div class="name">Рузиль Тазетдинов</div>
                Пользуюсь печкой с 2009 года. Печка отличная, пар хороший. Быстро прогреваются камни и вода. Печку искал целый год, рассматривал много марок и случайно увидел печь Горыныч-3. Выбором очень доволен. В год 1 раз прочищаю дымоход от золы, чистить удобно есть люк.
                Печь топлю 2-3раза в неделю. Печку не где не повело, т.к. печь из толстой стали. Если планируете брать печь на долгий срок то советую Горыныч-3.
                <div class="border"></div>
            </div>
            <!-- -->
            <div class="review right-side">
                <div class="photo"><img src="images/review/4.png" alt="Отзыв Сергея Литвенчука о печи Горыныч 3"/></div>
                <div class="name">Сергей Литвенчук</div>
                Хорошая теплоотдача у печи.  Очень удобно, что полешки  заходят целиком, можно длинные дрова закладывать. За 2 часа баня 5*6 метров прогревается полностью.  Баня из профилированного бруса 150 мм. Топим баню каждую неделю. Вода греется вообще четко до 80 градусов, как рас во время, когда в парную идешь.
                Здорово, что у печи есть запас мощности. Для тех кто любит погорячее, подкидываешь и легко до 120 градусов температуру нагоняли.
                <div class="border"></div>
            </div>

			<br>
            <div class="teh-video">
				<iframe width="490" height="276" src="https://www.youtube-nocookie.com/embed/ggdIdPVjhqM?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<iframe style="float: right;" width="490" height="276" src="https://www.youtube-nocookie.com/embed/RV9Mk8TaqFo?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>


            <a class="button blue" id="reply" href="#">Заказать</a>
            <div class="hr"></div>
        </div>

    </div>
	<!--/noindex-->

    <!-- block12 -->
    <div class="block12" id="installation">
        <div class="bottom-box">
                <div class="arrow"></div>
        </div>
        <div class="limit">
            <div class="h1 color-brown">Монтаж печи.</div>
            <div class="hr title"></div>
            <a href="http://xn---3-glc4bem4c4ab.xn--p1ai/data/Instruction.pdf" target="_blank" class="load">скачать инструкцию по печи и ее монтажу</a>
            <div class="contejner">
                <div class="left column">
                     <a class="fancybox point" href="images/install/1.JPG" rel="gallery1">
                            <img src="images/install/1.JPG" alt="Монтаж печи горыныч-3"/>
                     </a>
                     <a class="fancybox point" href="images/install/4.JPG" rel="gallery1">
                            <img src="images/install/4.JPG" alt="Монтаж печи горыныч-3"/>
                     </a>
                     <a class="fancybox point" href="images/install/7.JPG" rel="gallery1">
                            <img src="images/install/7.JPG" alt="Монтаж печи горыныч-3"/>
                     </a>
                </div>
                <div class="center column">
                    <a class="fancybox point" href="images/install/2.JPG" rel="gallery1">
                            <img src="images/install/2.JPG" alt="Монтаж печи горыныч-3"/>
                     </a>
                     <a class="fancybox point" href="images/install/5.JPG" rel="gallery1">
                            <img src="images/install/5.JPG" alt="Монтаж печи горыныч-3"/>
                     </a>
                     <a class="fancybox point" href="images/install/8.JPG" rel="gallery1">
                            <img src="images/install/8.JPG" alt="Монтаж печи горыныч-3"/>
                     </a>
                </div>
                <div class="right column">
                    <a class="fancybox point" href="images/install/3.JPG" rel="gallery1">
                            <img src="images/install/3.JPG" alt="Монтаж печи горыныч-3"/>
                     </a>
                     <a class="fancybox point" href="images/install/6.JPG" rel="gallery1">
                            <img src="images/install/6.JPG" alt="Монтаж печи горыныч-3"/>
                     </a>
                     <a class="fancybox point" href="images/install/9.JPG" rel="gallery1">
                            <img src="images/install/9.JPG" alt="Монтаж печи горыныч-3"/>
                     </a>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>

    <!-- block13 -->
    <div class="block13">
        <div class="limit">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/946DYjxdlq8" frameborder="0" allowfullscreen></iframe>
            <a class="button brown" id="montag" href="#">Оставить заявку</a>
            <div class="hr"></div>
        </div>
        <div class="bottom-box">
                <div class="arrow"></div>
        </div>
    </div>

    <!-- block14 -->
    <div class="block14 map1" id="contact"> <!-- .map1 .map2 .map3 .map4-->
         <div class="first map_location">
         <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=M1_4r25xVLbY04DYRXntOh2jU3JHKG3l&width=100%&height=450"></script>
         </div>
         <div class="second map_location">
         <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=OgzwSP-qNZJYE0Nl3UokcLYQ7qEKnDlh&width=100%&height=450"></script>
         </div>
         <div class="third map_location">
         <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=CQn8cqUhiau4KeMKJicN14EvyBg08hre&width=100%&height=450"></script>
         </div>
         <div class="fourth map_location">
         <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=OtMgUT7Wkqq7QuaOMN7Fw8dn9K77OsNn&width=100%&height=450"></script>
         </div>
            <div class="background">
                <div class="contact-info">
                    <div class="limit">
                        <div class="h1">КОНТАКТНАЯ ИНФОРМАЦИЯ</div>
                        <div class="hr title"></div>
                    </div>
                </div>
                    <div class="limit">
                        <div class="adress first"><span></span>г. Новосибирск, магазин «Банька», ул. Мичурина 24</div>
                        <div class="adress second"><span></span>г. Челябинск, магазин Банькоff и Печка 74, г. Челябинск, ул. Индивидуальная 2А</div>
                        <div class="adress third"><span></span>Нижний Новгород, магазин «Дымоход 52», ул. Ореховская 52</div>
                        <div class="adress fourth"><span></span>Уфа, ул. Сарапульская, д. 73</div>
                    </div>
            </div>
    </div>


    <!-- FOOTER PUSH -->
            <div class="footer-push"></div>
</div>

    <!-- footer -->
    <footer>
        <div class="limit">
            <div class="social left">
                <ul>
                    <li><a class="icon1" href="#"></a></li>
                    <li><a class="icon2" href="#"></a></li>
                    <li><a class="icon3" href="#"></a></li>
                    <li><a class="icon4" href="#"></a></li>
                    <li><a class="icon5" href="#"></a></li>
                </ul>
                <div class="phone-info map1">  <!-- .map1 .map2 .map3 .map4-->
                    <!-- <div class="first">
                        8-800-2009-510<br />
                        г. Новосибирск, магазин «Банька», ул. Мичурина 24
                    </div>
                    <div class="second">
                        8-800-2009-510<br />
                        г. Челябинск, магазин Банькоff и Печка 74, г. Челябинск, ул. Индивидуальная 2А
                    </div>
                    <div class="third">
                        8-800-2009-510<br />
                        Нижний Новгород, магазин «Дымоход 52», ул. Ореховская 52
                    </div>
                    <div class="fourth">
                        8-347-275-09-32<br />
                        Уфа, ул. Сарапульская, д. 73
                    </div>-->
					<div>
                        <!--<span class="lptracker_phone"--><span class="roistat-phone-3">8 (905) 352-00-11</span><br />
                        Уфа, ул. Сарапульская, д. 73
					</div>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
        <ul class="nav">
                <li><a href="#main">Главная</a></li>
                <li><a href="/chertezhi/" title="Чертежи">Принцип работы</a></li>
                <li><a href="#cost">Цены</a></li>
                <li><a href="#installation">Монтаж</a></li>
                <li><a href="/otzyvy/">Отзывы</a></li>
				<li><a href="/video/">Видео</a></li>
                <li><a href="#contact">Контакты</a></li>
        </ul>
    </footer>

<!-- MODAL -->
<div id="modal" class="modal" style="display: none;">
     <div class="modal-title">
        <div class="h1">Оставьте заявку</div>
     </div>
     <div class="modal-content">
        и получите бесплатную консультацию
        <div class="orange-text"></div>
        <form method="post" onsubmit="return sendOrder('confirm',this)">
            <div class="field_set">
                <input type="text" class="name" name="name" placeholder="ваше имя"/>
                <div class="error">Поле запонено неверно</div>
            </div>
            <div class="field_set">
                <input type="text" id="input-phone" class="phone" name="phone" placeholder="телефон"/>
                <div class="error">Поле запонено неверно</div>
            </div>
            <input type="hidden" id="post_type" class="" name="post_type" value="" />
        </form>
        менеджер перезвонит вам в течение<br />
        15 минут и уточнит детали

        <a class="button brown" onclick="$(this).parents('.modal-content').find('form').submit();yaCounter43832879.reachGoal('callme');return true;" href="javascript:void(0)">Оставить заявку</a>
     </div>
</div>


<div id="modal1" class="modal" style="display: none;">
     <div class="modal-title">
        <div class="h1">Встроенная система воздушного отопления</div>
     </div>
     <div class="modal-content">
        <img src="images/vsvo.jpg" alt="Встроенная система воздушного отопления"/>
     </div>
</div>

<!-- End Document
================================================== -->



<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter43832879 = new Ya.Metrika({
                    id:43832879,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/43832879" style="position:absolute; left:-9999px;" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- ROISTAT BEGIN -->
<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
    var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', '8221a56d7360919e39ddd8da81f26de5');
</script>
<!-- ROISTAT END -->
<!-- <script async type="text/javascript">function loadscript(e,t){var n=document.createElement("script");n.src="//lptracker.net.ru/"+e;n.onreadystatechange=t;n.onload=t;document.head.appendChild(n);return 1}var init_lstats=function(){lstats.site_id=24500;lstats.vk_catched = true;lstats.referer()};var jquery_lstats=function(){jQstat.noConflict();loadscript("stats_auto.js",init_lstats)};loadscript("jquery-1.10.2.min.js",jquery_lstats);</script> -->
<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=3dbb75cf83f40a37fd0546cbdf47eb63" charset="UTF-8" async></script>

</body>
</html>
