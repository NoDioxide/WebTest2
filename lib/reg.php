<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
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
if(strlen($username) < 3)
{
    echo "Username too short";
    exit;
}
if(strlen($username) > 51)
{
    echo "Username too big";
    exit;
}
if(strlen($email) < 4 && !str_contains($email, '@'))
{
    echo "Email too short";
    exit;
}
if(strlen($email) > 71 && !str_contains($email, '@'))
{
    echo "Email too big";
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
$pdo = new PDO('mysql:host=localhost;dbname=websitetest;port=3306', 'root');

// INSERT
$sql = "INSERT INTO users (login, username, email, password) VALUES (?, ?, ?, ?)";
$query = $pdo->prepare($sql);
$query->execute([$login, $username, $email, $password]);

header('Location: /');