<?php
// Create connection
$conn;

function getConnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dokyo_users"; // Change 'db_user' to 'dokyo_users'

    // Create a new mysqli connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Close connection
function closeConnection($conn)
{
    $conn->close();
}
?>
