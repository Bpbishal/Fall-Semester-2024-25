<?php
session_start();
if (!isset($_SESSION['userid']) || $_SESSION['user'] !== 'admin') {
    header('Location: logincheck.php');
}
?>

<html>
    <head>
        <title>Admin</title>
    </head>
    <body>
        <fieldset style="width:400;">
        <h1>Welcome <?= $_SESSION['name'] ?> !</h1>
        <a href="view_user.php">View Users</a><br>
        <a href="profile.php">Profile</a><br>
        <a href="change_password.php">Change Password</a><br>
        <a href="logout.php">Logout</a>    
        </fieldset>
    </body>
</html>
