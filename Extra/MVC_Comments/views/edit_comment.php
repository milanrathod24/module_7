<h2>Edit Comment</h2>
<form method="post" action="index.php?action=update">
<input type="hidden" name="id" value="<?= $comment['id'] ?>">
<textarea name="comment"><?= $comment['comment'] ?></textarea><br><br>
<button>Update</button>
</form>
