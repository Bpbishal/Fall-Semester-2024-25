<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = trim($_POST['userid']);
    $name = trim($_POST['name']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if(isset($_POST['user']))
            {
                $user_type=$_POST['user'];
            }

    if (empty($userid) || empty($name) || empty($password) || empty($confirm_password) || empty($user_type)) {
        echo "All fields are required.";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    $data = "$userid|$password|$name|$user_type\n";
    if (file_put_contents('users.txt', $data, FILE_APPEND)) {
        echo "Registration successful! <a href='login.html'>Login here</a>";
    } else {
        echo "Failed to register. Please try again.";
    }
}
?>
