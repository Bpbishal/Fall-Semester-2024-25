<?php
session_start();
if (!isset($_SESSION['userid']) || $_SESSION['user'] !== 'user') {
    header('Location: logincheck.php');
}
?>

<html>
    <head>
        <title>User</title>
    </head>
    <body>
        <fieldset style="width:400;">
        <h1>Welcome <?= $_SESSION['name'] ?> !</h1>
        <a href="profile.php">Profile</a><br>
        <a href="change_pass.php">Change Password</a><br>
        <a href="logout.php">Logout</a>    
        </fieldset>
    </body>
</html>
