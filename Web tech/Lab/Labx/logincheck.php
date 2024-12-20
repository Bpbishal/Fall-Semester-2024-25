<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userID = $_POST['userid'];
    $password = $_POST['password'];

    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($storedUserID, $storedPassword, $storedName, $storedType) = explode('|', $user);
        if ($storedUserID === $userID && $storedPassword === $password) {
            // Start session
            $_SESSION['userid'] = $storedUserID;
            $_SESSION['name'] = $storedName;
            $_SESSION['user'] = $storedType;

            // Redirect based on type
            if ($storedType === 'admin') {
                header('Location: admin.php');
            } elseif($storedType === 'user') {
                header('Location: user.php');
            }
        }
    }
    echo "Error occured";
}
?>