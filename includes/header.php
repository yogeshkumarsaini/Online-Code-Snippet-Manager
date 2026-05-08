<!DOCTYPE html>
<html>
<head>
<title>Snippet Manager</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>

</head>
<body class="bg-dark text-light">

<nav class="navbar navbar-dark bg-black px-3">
<h4>Snippet Manager</h4>

<?php if(isset($_SESSION['user_id'])): ?>
<a href="auth/logout.php" class="btn btn-danger">Logout</a>
<?php endif; ?>
</nav>

<div class="container mt-4">