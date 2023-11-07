<?php
include_once("../included/dbaccess/DBUtil.php");
$conn = getConnection();

if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    // Update the status to 'inactive' in your database
    $sql = "UPDATE users SET status = 'de-active' WHERE id = $user_id";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the main page after deactivation
        header("Location: index.php");
    } else {
        echo "Error deactivating user: " . $conn->error;
    }
}

$conn->close();
?>
