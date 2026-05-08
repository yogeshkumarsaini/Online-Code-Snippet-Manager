<?php include 'config/db.php';
if(!isset($_SESSION['user_id'])) header("Location: auth/login.php");
include 'includes/header.php';
?>

<h3>Add Snippet</h3>

<input id="title" class="form-control mb-2" placeholder="Title">

<select id="language" class="form-control mb-2">
<option value="php">PHP</option>
<option value="javascript">JavaScript</option>
<option value="python">Python</option>
<option value="html">HTML</option>
</select>

<textarea id="code" class="form-control mb-2" rows="5" placeholder="Write code"></textarea>

<button onclick="addSnippet()" class="btn btn-success">Save</button>

<hr>

<h3>Your Snippets</h3>
<div id="snippetList"></div>

<?php include 'includes/footer.php'; ?>