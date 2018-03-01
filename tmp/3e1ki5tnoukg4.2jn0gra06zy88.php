<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>
<nav class = "navbar bg-light navbar-light">
    <div class="navbar-nav">
        <a class="nav-item nav-link" href="/328/dating/">My Dating Website</a>
        <a class="nav-item nav-link" href="admin">Admin</a>
    </div>
</nav>
<div class="container" id="maindiv">
    <h1 id="head">Membership</h1>
    <?= ($member['fname'])."
" ?>
    <table style="width:85%">
    <tr id="headrow">
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Email</th>
        <th>State</th>
        <th>Seeking</th>
        <th>Bio</th>
        <th>Premium</th>
        <th>Interests</th>

    </tr>
        <?php foreach (($members?:[]) as $member): ?>
        <tr>
            <td><?= ($member['member_id']) ?></td>
            <td><?= ($member['fname']) ?> <?= ($member['lname']) ?></td>
            <td><?= ($member['age']) ?></td>
            <td><?= ($member['gender']) ?></td>
            <td><?= ($member['phone']) ?></td>
            <td><?= ($member['email']) ?></td>
            <td><?= ($member['state']) ?></td>
            <td><?= ($member['seeking']) ?></td>
            <td><?= ($member['bio']) ?></td>
            <td><?= ($member['premium']) ?></td>
            <td><?= ($member['interests']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>