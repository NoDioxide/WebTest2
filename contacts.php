<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestWork</title>
    <link rel="stylesheet" href="/WebTest2/css/main.css">
</head>
<body>
    <?php require_once "blocks/header.php"?>
    <div class="container hero-contacts">
        <h1>Мы работаем по всему миру</h1>
        <p>У нас свыше 20 партнёров из разных стран и 20 точек по всему миру в крупных городах!</p>
        <img src="images/Huge Global.png" alt="">
    </div>
    
    <div class="feedback">
        <div class="container">
            <h2>Скажите привет</h2>
            <p>Заполнив поля снизу, вы поможете нашему проекту стать лучше!</p>

            <form onsubmit="return validateForm()">
                <div class="inline">
                    <div>
                        <label>Имя</label>
                        <input type="text" id="firstName">
                    </div>
                    <div>
                        <label>Фамилия</label>
                        <input type="text" id="lastName">
                    </div>
                </div>
                <label>Почтовый адрес</label>
                <input type="email" id="emailField" class="one-line">

                <label>Сообщение</label>
                <textarea id="messageField" class="one-line"></textarea>

                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php"?>

    <script>
        function validateForm() {
            let firstName = document.getElementById('firstName').value;
            let lastName = document.getElementById('lastName').value;
            let email = document.getElementById('emailField').value;
            let message = document.getElementById('messageField').value;

            if (firstName === '' || lastName === '' || email === '' || message === '') {
                alert('Пожалуйста, заполните все поля.');
                return false;
            }

            if (!email.includes('@')) {
                alert('Адрес электронной почты неверный!');
                return false;
            }

            alert('Спасибо! Ваше мнение очень многое значит для нас!');
            return true;
        }
    </script>
</body> 
</html>