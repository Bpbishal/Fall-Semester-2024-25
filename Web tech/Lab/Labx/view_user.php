<?php
session_start();
if (!isset($_SESSION['userid']) || $_SESSION['user'] !== 'admin') {
    header('Location: login.php');
}

$users = file('users.txt', FILE_IGNORE_NEW_LINES);
?>

<html>
<head>
    <title>View Users</title>
</head>
<body>
    <table border="1">
    <tr>
        <td colspan="3" align="center"><h3>Profile</h3></td>
    </tr>
        <tr>
            <td>UserID</td>
            <td>Name</td>
            <td>Type</td>
        </tr>
        <?php foreach ($users as $user): 
            list($userID, , $name, $type) = explode('|', $user);
        ?>
        <tr>
            <td><?= $userID ?></td>
            <td><?= $name ?></td>
            <td><?=$type ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="admin.php">Back</a>
</body>
</html>
