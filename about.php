<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <link rel="stylesheet" href="/WebTest2/css/main.css">
</head>
<body>
    <div class="wrapper">
    <?php require_once "blocks/header.php"?>
        <div class="hero-about container">
            <div class="info">
                <h1>Яхтенная верфь полного цикла «World yachts»</h1>
                <p>Компания занимается проектированием и строительством лодок и яхт малого класса на заказ с 1996 года на собственной верфи в Санкт-Петербурге и с 2003 года на подрядных верфях в Голландии и Испании.</p>
                <button class="btn">Продолжить</button>
            </div>
            <img src="images/aboutpic.png" alt="">
        </div>

        <div class="container work">
            <h2>В чём польза сотрудничать с нами?</h2>
            <div class="blocks">
                <div class="block">
                    <span class="badge purple">Гарантия!</span>
                    <h3>Гарантия качества</h3>
                    <p>Мы даём гарантию в 25 лет с момента приобретения нашей продукции.</p>
                </div>
                <div class="block">
                    <span class="badge brown">Огромный ассортимент!</span>
                    <h3>Ассортимент нашей продукции</h3>
                    <p>Мы проектируем и продаём лодки строго под Ваши требовани.</p>
                </div>
                <div class="block">
                    <span class="badge green">На рынке больше 15 лет!</span>
                    <h3>Мы торгуем с 1996 года</h3>
                    <p>За такое время у нас было свыше 100.000 покупателей и все остались довольны.</p>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "blocks/footer.php"?>
</body> 
</html>