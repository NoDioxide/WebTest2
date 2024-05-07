<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if(strlen($login) < 3)
{
    echo "Login too short";
    exit;
}
if(strlen($login) > 51)
{
    echo "Login too big";
    exit;
}
if(strlen($password) < 3)
{
    echo "Password too short";
    exit;
}
if(strlen($password) > 131)
{
    echo "Password too big";
    exit;
}

// PASSWORD
$salt = '56s89_)(hghdhjsjgj$f5)';
$password = md5($salt . $password);

// DB
require "db.php";

// Login user
$sql = 'SELECT id FROM users WHERE login = ? AND password = ?';
$query = $pdo->prepare($sql);
$query->execute([$login, $password]);

if($query->rowCount() == 0)
    echo "User can't be found!";
else{
    setcookie('login', $login, time() + 3600 * 24 * 30, "/WebTest2");
    header('Location: /WebTest2/user.php');
}