<?php

session_start();

require('./db.php');

if(!isset($_POST['login']) || !isset($_POST['password'])) {
    header('Location: /login.php?error=All fields are required!');
    die();
}

$statement = $_GLOBALS['pdo']->prepare('SELECT * FROM users WHERE login = ?');
$statement->execute([$_POST['login']]);
$user = $statement->fetch();

if(empty($user)) {
    header('Location: /login.php?error=Invalid login or password');
    die();
}

if(!password_verify($_POST['password'], $user['password'])) {
    header('Location: /login.php?error=Invalid login or password');
    die();
}

$_SESSION['user_id'] = $user['id'];
$_SESSION['auth_date'] = time();

header('Location: /');
die();
