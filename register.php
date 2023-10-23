<?php
$servername = "localhost";
include_once('login/included/dbaccess/DBUtil.php');
$conn = getConnection();

if (isset($_POST['registerBtn'])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $role = 'user';


    $stmt = $conn->prepare("INSERT INTO users (username, email, password, gender,role) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $email, $password, $gender, $role);

    if ($stmt->execute()) {
        $sql = "SELECT * FROM users WHERE email = '$email' ";
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();

        echo "<script>alert('Registration completed successfully');
        window.location.href = 'user.php'</script>";

        $_SESSION['userId'] = $user['id'];
        $_SESSION['role'] = $user['role'];

    } else {
        echo "failure";
    }


    $stmt->close();
    $conn->close();
}
?>