<?php include '../config/db.php';

$title = $_POST['title'];
$lang = $_POST['language'];
$code = $_POST['code'];

$stmt = $pdo->prepare("INSERT INTO snippets(title,language,code,user_id) VALUES(?,?,?,?)");
$stmt->execute([$title,$lang,$code,$_SESSION['user_id']]);

echo "success";