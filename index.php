<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestWork</title>
    <link rel="stylesheet" href="/WebTest2/css/main.css">
</head>
<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php"?>
        <div class="hero container">
            <div class="hero--info">
                <h2>3D game Dev</h2>
                <h1>Work that we produce for our clients</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                <button class="btn">Get more details</button>
            </div>
            <img src="images/joystick.svg" alt="">
        </div>

        <div class="container trending">
            <a href="/WebTest2/trending.php" class="see-all">SEE ALL</a>
            <h3>Currently Trending Games</h3>

            <div class="games">
                <?php
                    //DB
                    require_once "lib/db.php";

                    //SQL
                    $sql = 'SELECT * FROM trending ORDER BY id DESC LIMIT 4';
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $games = $query->fetchAll(PDO::FETCH_OBJ);

                    foreach($games as $el)
                        echo 
                        '<div class="block">
                        <img src="/images/'.$el->image.'" alt="">
                        <span><img src="/images/fire.svg" alt="">'.$el->followers.' Followers</span>
                        </div>';
                ?>
            </div>
        </div>

        <div class="container big-text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="container banner">
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <img src="images/spiderman.svg" alt="">
        </div>
    </div>

    <div class="features">
        <div class="container">
            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <div class="info">
                <div class="block">
                    <img src="images/feature1.png" alt="">
                    <p>Mobile Game Development</p>
                    <img src="images/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="images/feature2.png" alt="">
                    <p>PC Game Development</p>
                    <img src="images/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="images/feature3.png" alt="">
                    <p>PS4 Game Development</p>
                    <img src="images/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="images/feature4.png" alt="">
                    <p>AR/VR Solutions</p>
                    <img src="images/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="images/feature5.png" alt="">
                    <p>AR/ VR design</p>
                    <img src="images/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="images/feature6.png" alt="">
                    <p>3D Modelings</p>
                    <img src="images/arrow.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container projects">
            <h3>Our Recent Projects</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <div class="images">
                <img src="images/pr1.png" alt="">
                <img src="images/pr2.png" alt="">
                <img src="images/pr3.png" alt="">
            </div>
            <div class="images">
                <img src="images/pr4.png" alt="">
                <img src="images/pr5.png" alt="">
                <img src="images/pr6.png" alt="">
            </div>
            <a href="" class="see-all">SEE ALL</a>
        </div>

        <div class="container email">
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <div class="block">
                <div>
                    <h4>Stay in the loop</h4>
                    <p>Subscribe to receive the latest news and updates about TDA.
                        We promise not to spam you! </p>
                </div>
                <div>
                    <input type="email" id="emailField" placeholder="Enter email adress">
                    <button onclick="checkemail()">Continue</button>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "blocks/footer.php"?>

    <script>
        function checkemail() {
            let email = document.querySelector('#emailField').value;
            if(!email.includes('@')) alert('Адрес электронной почты неверный!');
            else alert('Всё отлично!');
        }
    </script>
</body> 
</html>