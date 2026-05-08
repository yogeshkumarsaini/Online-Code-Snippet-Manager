<?php include '../config/db.php';

if($_POST){
$name = $_POST['name'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?)");
$stmt->execute([$name,$email,$pass]);

header("Location: login.php");
}
?>

<form method="POST" class="container mt-5">
<h3>Register</h3>
<input name="name" class="form-control mb-2" placeholder="Name">
<input name="email" class="form-control mb-2" placeholder="Email">
<input name="password" type="password" class="form-control mb-2" placeholder="Password">
<button class="btn btn-success">Register</button>
<a href="login.php">Login</a>
</form>