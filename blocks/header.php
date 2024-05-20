<header class="container">
    <span class="logo">World yachts</span>
    <nav>
        <ul>
            <li class="active"><a href="/WebTest2">Главная страница</a></li>
            <li><a href="/WebTest2/about.php">О нас</a></li>

            <?php
                if(isset($_COOKIE['login']))
                    echo '<li><a href="/WebTest2/user.php">User Account</a></li>';
                else
                    '<li><a href="/WebTest2/reg.php">Registration</a></li>
                    <li><a href="/WebTest2/log.php">LogIn</a></li>';
            ?>
            <li class="btn"><a href="/WebTest2/contacts.php">Связь с нами</a></li>
        </ul>
    </nav>
</header>