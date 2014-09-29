<h1>User '<?=$user['username'] ?>'</h1>
<table class="table-bordered">
    <tr>
        <th>Username</th>
        <td><?= $user['username'] ?></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><?= $user['password'] ?></td>
    </tr>
    <tr>
        <th>Deleted</th>
        <td><?= $user['deleted'] ?></td>
    </tr>
</table>
<form action="users/edit/<?= $user['user_id'] ?>">
    <button class="btn btn-info">
        Edit <?=$user['username']?>
    </button>
</form>