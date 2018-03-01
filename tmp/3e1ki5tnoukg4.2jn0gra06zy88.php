<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
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
    <table>
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
            <td><input type="checkbox" <?php if ($member['premium'] == 1): ?>checked<?php endif; ?>> disabled</td>
            <td><?= ($member['interests']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>