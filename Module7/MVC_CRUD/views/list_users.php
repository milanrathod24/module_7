<h2>User List</h2>
<a href="index.php?action=add">Add User</a>

<table border="1">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>

<?php foreach ($users as $u): ?>
<tr>
<td><?= $u['id'] ?></td>
<td><?= $u['name'] ?></td>
<td><?= $u['email'] ?></td>
<td>
<a href="index.php?action=edit&id=<?= $u['id'] ?>">Edit</a>
<a href="index.php?action=delete&id=<?= $u['id'] ?>">Delete</a>
</td>
</tr>
<?php endforeach; ?>
</table>
