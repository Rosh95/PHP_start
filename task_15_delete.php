<?php
session_start();

unset($_SESSION['number']);

header('Location: /task_15.php');
?>
