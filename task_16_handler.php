<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$pdo = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
$sql = 'SELECT * FROM users WHERE email =:email';
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if (empty($user)) {
  $messsage = 'неверный логин или пароль';
  $_SESSION['danger'] = $messsage;

  header('Location: /task_16.php');
  exit();
}
if (!password_verify($password, $user['password'])) {
  $messsage = 'неверный логин или пароль';
  $_SESSION['danger'] = $messsage;

  header('Location: /task_16.php');
  exit();
}

$_SESSION['user'] = ['email' => $user['email'], 'id' => $user['id']];
/* $sql = 'INSERT INTO users (email, password) VALUES(:email, :password)';
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email, 'password' => $hashed_password]);

$message = 'Добавлен новый пользователь в таблицу.';
$_SESSION['success'] = $message; */

header('Location: /task_17.php');
exit();
