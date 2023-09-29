<?php
require_once 'dbConnect.php';
require_once 'User.php';

$db = new Database();
$connection = $db->connect();

$user = new User($connection);

$name = $_POST['name'];
$email = $_POST['email'];

$user->store($name, $email);
echo "User stored successfully!";
?>
