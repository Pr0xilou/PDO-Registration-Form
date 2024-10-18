<?php
$host = "localhost:3308";
$user = "root";
$password = "";
$dbname = "web_dev_dept";
$dsn = "mysql:host={$host};dbname={$dbname}";
$pdo = new PDO($dsn, $user, $password);
?>