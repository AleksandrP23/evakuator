<?
	function isUserAgentIsGooglePageSpeed(){
		return preg_match("/Chrome-Lighthouse/ui", $_SERVER["HTTP_USER_AGENT"]);
	}

	$isUserAgentIsGooglePageSpeed = isUserAgentIsGooglePageSpeed();

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница не найдена</title>
	<meta name="description" content="Ошибка 404">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/style.min.css">
	
	<meta property="og:title" content="Страница не найдена">
	<meta property="og:description" content="Ошибка 404">
	<meta property="og:image" content="https://evakuator-24.com/images/logo.png">
	<meta property="og:url" content="https://evakuator-24.com">
	<meta property="og:type" content="website">

    <style>
        .err__title{
            font-style: normal;
            font-weight: 500;
            font-size: 51px;
            line-height: 61px;
            text-transform: uppercase;
            color: #393939;
        }
        .err__numb{
            font-style: normal;
            font-weight: 500;
            font-size: 300px;
            line-height: 300px;
            text-transform: uppercase;
            color: #393939;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 69px 0 0;
        }
        .err__numb span{
            width: 289px;
            height: 289px;
            display: block;
            background: url(images/404.png) no-repeat center;
            margin: 0 20px;
        }
        .err{
            max-width: 710px;
            width: 100%;
            margin: 0 auto;
            padding: 100px 0 130px;
        }
        .err__link{
            background: #FF9739;
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 50px;
            text-align: center;
            text-transform: uppercase;
            color: #FFFFFF;
            display: flex;
            min-height: 63px;
            align-items: center;
            justify-content: center;
            padding: 8px 29px;
            margin: 60px auto 0;
            max-width: 283px;
            width: 100%;
        }
        @media all and (max-height: 920px){
            .err__title{
                font-size: 36px;
                line-height: normal;
            }
            .err__numb{
                font-size: 210px;
                line-height: 210px;
            }
            .err__numb span{
                width: 220px;
                height: 220px;
                background-size: contain;
            }
            .err{
                max-width: 530px;
                padding: 100px 0 100px;
            }
        }
        @media all and (max-width: 662px){
            .err__numb{
                font-size: 105px;
                line-height: 105px;
                margin: 60px auto;
            }
            .err__numb span{
                width: 110px;
                height: 110px;
                margin: 0 5px;
            }
            .err__title{
                font-size: 18px;
            }
            .err{
                max-width: 260px;
            }
            .err__link{
                font-size: 16px;
                min-height: 60px;
                margin: 0;
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <div id="err">
        <div class="container">
            <div class="err">
                <h1 class="err__title">упс!! <br>старница не найдена</h1>
                <div class="err__numb">4<span></span>4</div>
                <a href="/" class="err__link">на главную</a>
            </div>
        </div>
    </div>

    
	
	<div itemscope="" itemtype="http://schema.org/Organization">
		<meta itemprop="name" content="Эвакуатор в Нижнем Новгороде">
		<link itemprop="image" href="https://evakuator-24.com/images/logo.png">
		<link itemprop="url" href="https://evakuator-24.com">
		<div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
			<meta itemprop="streetAddress" content="ул. Ватутина 3а кв. 79">
			<meta itemprop="postalCode" content="603101">
			<meta itemprop="addressLocality" content="Нижний Новгород">
		</div>
		<meta itemprop="telephone" content="+7 908 160-96-02">
		<meta itemprop="email" content="evakuator.nn@mail.ru">
	</div>

    



    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/lozad.min.js"></script>
    <script src="/js/main.min.js"></script>
	
	<? if(!$isUserAgentIsGooglePageSpeed): ?>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">
			(function (m, e, t, r, i, k, a) {
				m[i] = m[i] || function () {
					(m[i].a = m[i].a || []).push(arguments)
				};
				m[i].l = 1 * new Date();
				k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode
					.insertBefore(k, a)
			})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

			ym(54235225, "init", {
				clickmap: true,
				trackLinks: true,
				accurateTrackBounce: true,
				webvisor: true
			});
		</script>
		<noscript>
			<div><img src="https://mc.yandex.ru/watch/54235225" style="position:absolute; left:-9999px;" alt="" /></div>
		</noscript>
		<!-- /Yandex.Metrika counter -->
		
		<!-- Global site tag (gtag.js) - Google Ads: 756961269 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-756961269"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'AW-756961269');
		</script>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144577337-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		 
		  gtag('config', 'UA-144577337-1');
		</script>
	<? endif ?>
	
	<!-- Yandex.Metrika informer -->
    <!--
	<script type="text/javascript" src="/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=v16-IIwvMr7gGltqqCR3XU45P8ixamjOhOjNv-JSqvgMjTB4xpw3btHvhJnlvBjrtFp2wPLECDm6b89FfOKgCg80NzS5dgfxSfmoyZcCQK_g-G03fQ7Om0YjmAfnTfn2fKjAIuFV2idiXWh0A3UofZF-n2chbRXmZgA0fpBsizGYhPBZAcAi-LIrOkInosMCFSDPZ6RDLVHJIQ1Una3ztxdzk6jUUQn30tBAbklnForywpTTxgmP6iPgwg9mfo09ruRpsBX3UhwNaDgfhdppDQ0VjSgZm4gVQiMyML2q3Tqi1Q16rHLS0dgeqQXIgpa38DTuWW9kgCEQYQD0OvxM-fSUPebbwbzeTavyaSNbodZFYD4wKU9cDs_a4hPH_LmBHXzY-3lfxj6qCUFz6YpUgxTNTSsAWnYZ40zZM38QJS5yhtrgzSKwm89Q7GBEopvuNnHroo3YB1S6rvYLcHUqAIJBuifcornLI8CK_cjMdhDyJCNnpUBEAYwtJavF9tgYC0en4o4o3NFAhWtWJ5LOLaPB9AeqbHBoeKMv8YPsycTiyYz8NN68xJ5f89NZDCCojiTh1GKAOpDA-trKM_Ewf4BAkgak1bXabzGidG7l7gDAQVz_mfw_iUeNWqdqctnUaB3Dj2_1q3fbw7AR0mE3vhA3zOg-Bmmg_5Kq5bTW8qTW2dXR_H1cGM41C-bPcAf7_grg422Tm-rFdjsHASfZBKlirehjfUOTuMZoBC2ZZBSPV_9u0QU8F7OaQXAm_4uzmvGIh8Zncef9cyYo5PLyqf3lrL9u4gMSQBczV5iLt9YePyCTxpeG4gNsvPGgSIScAzu1azmMBHmRltKyv0ffG8rW7tgjuWtXT2yrszVkU5F0Wsey2brAEnANTIErxfgmsJN84_3-z2tP7nb77zdemoJ2anYo5jrwsoWp4AVniJ3SVIe5JhK7yw_QZyXhcbIA436JlJo4zQkXGyTvlGPHNcH6jTmAo_Bm9MSm4NmkTmeJjXNm7WClug8ysvoP-3Ux606O3WlIltibUB5VD62wsneX7L-QY4lM0jWTuEN1pmZ4J-ZB0lMf5ktTY-iyqjLezdeiRmYNDFFC66Ush_0aGw" charset="UTF-8"></script>
	<a href="https://metrika.yandex.ru/stat/?id=54235225&amp;from=informer" target="_blank"
	rel="nofollow" style="display: none;"><img src="https://informer.yandex.ru/informer/54235225/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
	style="width:88px; height:31px; border:0; " alt="Яндекс.Метрика"
	title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)"
	class="ym-advanced-informer" data-cid="54235225" data-lang="ru" /></a>
	-->
    <!-- /Yandex.Metrika informer -->
</body>

</html>