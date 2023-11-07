<?php
include_once("../included/dbaccess/DBUtil.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $announcement = $_POST["announcement"];

    $conn = getConnection();

    // Insert the announcement into the database
    $sql = "INSERT INTO announcement (announcement) VALUES ('$announcement')";
    
    if ($conn->query($sql) === TRUE) {
       header("Location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
