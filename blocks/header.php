<header class="container">
    <span class="logo">logo</span>
    <nav>
        <ul>
            <li class="active"><a href="/WebTest2">Home</a></li>
            <li><a href="/WebTest2/about.php">About us</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">News</a></li>
<<<<<<< Updated upstream

            <?php
                if(isset($_COOKIE['login']))
                    echo '<li><a href="/WebTest2/user.php">User Account</a></li>';
                else
                    '<li><a href="/WebTest2/reg.php">Registration</a></li>
                    <li><a href="/WebTest2/log.php">LogIn</a></li>';
            ?>
=======
            <li><a href="/WebTest2/reg.php">Registration</a></li>
            <li><a href="/WebTest2/log.php">LogIn</a></li>
>>>>>>> Stashed changes
            <li class="btn"><a href="/WebTest2/contacts.php">Contacts</a></li>
        </ul>
    </nav>
</header>