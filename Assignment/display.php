<?php

require_once 'dbConnect.php';
require_once 'User.php';

$db = new Database();
$connection = $db->connect();

$user = new User($connection);

$users = $user->readAll();

foreach($users as $user) {
    echo "Name: " . $user['name'] . ", Email: " . $user['email'] . "<br>";
}
?>
