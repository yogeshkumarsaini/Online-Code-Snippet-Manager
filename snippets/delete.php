<?php include '../config/db.php';

$id = $_POST['id'];

$stmt = $pdo->prepare("DELETE FROM snippets WHERE id=? AND user_id=?");
$stmt->execute([$id,$_SESSION['user_id']]);

echo "deleted";