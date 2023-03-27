<?php
session_start();
unset($_SESSION['user_id']);
session_destroy();
$_SERVER['HTTP_HOST'] . $home_url = 'vhod.php';
 header('Location: ' . $home_url);
?>