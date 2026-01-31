<h2>Edit User</h2>
<form method="post" action="index.php?action=update">
<input type="hidden" name="id" value="<?= $user['id'] ?>">
Name: <input name="name" value="<?= $user['name'] ?>"><br><br>
Email: <input name="email" value="<?= $user['email'] ?>"><br><br>
<button>Update</button>
</form>
