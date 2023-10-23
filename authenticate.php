<?php
session_start();
include_once("Included/dbaccess/DBUtil.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = getConnection();
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        $_SESSION["id"] = $user["id"];
        $_SESSION["role"] = $user["role"];

        if ($user["role"] === "admin") {
            header("Location: connect-plus-1.0.0/index.html");
            exit;
        } elseif ($user["role"] === "user") {
            header("Location: user.php");
            exit;
        }
    } else {
        $error_message = "Incorrect username or password!";
    }
}
?>

