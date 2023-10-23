<?php
include_once('login/included/dbaccess/DBUtil.php');
$conn = getConnection();

session_start(); // Start the session
// Check the connection

if (isset($_POST['loginBtn'])) {
    echo $email = $_POST['email'];
    echo $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result) {
        $user = $result->fetch_assoc();

        if ($user) {
            echo $user['email'];

            if ($user['role'] == 'admin') {
                header('Location: connect-plus-1.0.0/index.php');
            } else if ($user['role'] == 'user') {
                header('Location: user.php');
            }
            $_SESSION['id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Error executing the query: " . $conn->error;
    }
}

$conn->close();