
<?php
require 'config.php';
$users=$conn->query("SELECT * FROM users")->fetchAll();
?>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Created</th><th>Last Login</th><th>Edit</th><th>Delete</th></tr>
<?php foreach($users as $u): ?>
<tr>
<td><?= $u['id'] ?></td>
<td><?= $u['full_name'] ?></td>
<td><?= $u['email'] ?></td>
<td>Encrypted</td>
<td><?= $u['created_at'] ?></td>
<td><?= $u['last_login'] ?></td>
<td><a href="#">Edit</a></td>
<td><a href="#">Delete</a></td>
</tr>
<?php endforeach; ?>
</table>
