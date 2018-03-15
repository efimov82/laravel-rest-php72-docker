<?php
$user = 'laravel-user';
$pass = '123456';

try {
    $dbh = new PDO('mysql:host=db;dbname=laravel-rest3', $user, $pass);
    echo 'Database connection Ok';
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
