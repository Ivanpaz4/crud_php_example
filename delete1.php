<?php
include 'config1.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM libros WHERE id = ?");
$stmt->execute([$id]);

header('Location: index1.php');
exit;
