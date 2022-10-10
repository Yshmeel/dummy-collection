<?php

try {
    $_GLOBALS['pdo'] = new PDO('mysql:host=localhost;dbname=d15;charset=utf8', 'root', '', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch(PDOException $e) {
    die('Could not connect to MySQL Database');
}