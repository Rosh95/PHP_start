<?php
session_start();
$text = $_POST['text'];
$_SESSION['success'] = $text;

header('Location: /task_14.php');
?>
