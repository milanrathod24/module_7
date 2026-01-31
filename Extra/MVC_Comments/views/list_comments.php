<h2>Comments</h2>
<a href="index.php?action=add">Add Comment</a><br><br>

<?php foreach ($comments as $c): ?>
<p>
<?= $c['comment'] ?>
<a href="index.php?action=edit&id=<?= $c['id'] ?>">Edit</a>
<a href="index.php?action=delete&id=<?= $c['id'] ?>">Delete</a>
</p>
<?php endforeach; ?>
