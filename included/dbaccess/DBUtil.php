<?php

// Create connection
function getConnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dokyo_users";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

?>