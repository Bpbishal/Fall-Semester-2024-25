<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header('Location: logincheck.php');
}
?>
<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
    <table border="1">
    <tr>
        <td colspan="2" align="center">Profile</td>
    </tr>
    <tr>
        <td>UserID</td>
        <td><?= $_SESSION['userid'] ?></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><?= $_SESSION['name'] ?></td>
    </tr>
    <tr>
        <td>Type</td>
        <td><?= $_SESSION['user'] ?></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: right;">
            <?php
                if ($_SESSION['user'] === 'admin') {
                    $a = 'admin.php';
                } else {
                    $a = 'user.php';
                }
            ?>
            <a href="<?= $a ?>">Go Home</a>
        </td>
    </tr>
</table>


    </body>
</html>
