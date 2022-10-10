<?php

session_start();

require('./db.php');
$isGuest = !isset($_SESSION['user_id']);

$statement = $_GLOBALS['pdo']->prepare('SELECT * FROM users WHERE id = ?');
$statement->execute([$_SESSION['user_id']]);
$user = $statement->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>
<body>
    <div class="header">
        <h1>Some site</h1>
        <a href="/login.php">Auth</a>
    </div>

    <div class="wrapper">
        Content

        <?php if(!$isGuest): ?>
            <?php echo 'Hello, ' . $user['login']; ?>
        <?php endif; ?> 
    </div>
</body>
</html>