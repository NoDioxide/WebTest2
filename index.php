<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="/WebTest2/css/main.css">
</head>
<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php"?>
        <div class="hero container">
            <div class="hero--info">
                <h2>Проектирование и строительство лодок.</h2>
                <h1>Работаем, проектируем и строим для Вас лодку под Ваши требования.</h1>
                <p>Яхтенная верфь полного цикла «World yachts» основана в 1995 году. Компания занимается проектированием и строительством лодок и яхт малого класса на заказ с 1996 года на собственной верфи в Санкт-Петербурге и с 2003 года на подрядных верфях в Голландии и Испании.</p>
                <button class = "btn" onclick="launchExe()">Нажмите, чтобы увидеть ассортимент нашей продукции</button>
            </div>
        </div>
    </div>
        <div class="container email">
            <h3>Подпишитесь на нашу рассылку!</h3>
            <p>Чтобы узнавать об изменении цен и появления скидок - подпишитесь на нас!</p>
            <div class="block">
                <div>
                    <h4>Оставайтесь с нами</h4>
                    <p>Подпишитесь, чтобы получать последние новости об изменении цен и скидок по поводу наших товаров.
                        Обещаем обойдётся без спама! </p>
                </div>
                <div>
                    <input type="email" id="emailField" placeholder="Введите электронный почтовый адрес">
                    <button onclick="checkemail()">Дальше</button>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "blocks/footer.php"?>

    <script>
        function checkemail() {
            let email = document.querySelector('#emailField').value;
            if(!email.includes('@')) alert('Адрес электронной почты неверный!');
            else alert('Вы успешно подписались на нашу рассылку. Спасибо!');
        }
        function launchExe() {
            fetch('http://localhost:3000/launch-exe', { method: 'POST' })
                .then(response => response.text())
                .then(data => alert(data))
                .catch(error => console.error('Error:', error));
        }
    </script>
</body> 
</html>