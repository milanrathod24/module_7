<h2>Edit Post</h2>
<form method="post" action="index.php?action=update">
<input type="hidden" name="id" value="<?= $post['id'] ?>">
Title:<br>
<input type="text" name="title" value="<?= $post['title'] ?>"><br><br>
Content:<br>
<textarea name="content"><?= $post['content'] ?></textarea><br><br>
<button>Update</button>
</form>
