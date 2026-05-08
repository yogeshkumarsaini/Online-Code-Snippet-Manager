<?php include '../config/db.php';

$stmt = $pdo->prepare("SELECT * FROM snippets WHERE user_id=? ORDER BY id DESC");
$stmt->execute([$_SESSION['user_id']]);

foreach($stmt as $row){
echo '
<div class="card bg-secondary p-3 mb-2">
<h5>'.$row['title'].'</h5>

<pre><code class="language-'.$row['language'].'">'
.htmlspecialchars($row['code']).'
</code></pre>

<button onclick="deleteSnippet('.$row['id'].')" class="btn btn-danger btn-sm">Delete</button>
</div>';
}