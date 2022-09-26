<?php
$type_file_name = pathinfo($_FILES['image']['name']);
$image_name = uniqid() . '.' . $type_file_name['extension'];
move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $image_name);

$image = $image_name;
$pdo = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
$sql = 'INSERT INTO images (image) VALUES (:image)';
$statement = $pdo->prepare($sql);
$statement->execute(['image' => $image]);
$images = $statement->fetch(PDO::FETCH_ASSOC);

header('Location: /task_19.php');
