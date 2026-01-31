<h2>Blog Posts</h2>
<a href="index.php?action=add">Add New Post</a><br><br>

<?php foreach ($posts as $p): ?>
<h3><?= $p['title'] ?></h3>
<p><?= $p['content'] ?></p>
<a href="index.php?action=edit&id=<?= $p['id'] ?>">Edit</a> |
<a href="index.php?action=delete&id=<?= $p['id'] ?>">Delete</a>
<hr>
<?php endforeach; ?>
