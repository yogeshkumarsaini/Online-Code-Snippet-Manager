<?php include '../config/db.php';

if($_POST){
$email = $_POST['email'];
$pass = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if($user && password_verify($pass,$user['password'])){
$_SESSION['user_id'] = $user['id'];
header("Location: ../dashboard.php");
}
}
?>

<form method="POST" class="container mt-5">
<h3>Login</h3>
<input name="email" class="form-control mb-2" placeholder="Email">
<input name="password" type="password" class="form-control mb-2" placeholder="Password">
<button class="btn btn-primary">Login</button>
</form>