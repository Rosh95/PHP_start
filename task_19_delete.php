<?php
$id = $_GET['id'];

$pdo = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
$sql = 'SELECT * FROM images WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->execute(['id' => $id]);
$result = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($result)) {
  unlink('uploads/' . $result['image']);
}

$statement = $pdo->prepare('DELETE FROM images WHERE id=:id');
$statement->execute(['id' => $id]);
header('Location: /task_19.php');
