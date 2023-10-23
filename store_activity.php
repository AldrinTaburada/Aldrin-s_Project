<?php
include_once("login\included/dbaccess/DBUtil.php");

// Assuming getConnection() connects to your database and returns a valid connection
$conn = getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $ootd = $_POST['ootd'];
    $remarks = $_POST['remarks'];// New "Remarks" field
    $status = "pending";

    $sql = "INSERT INTO activ_table (title, date, time, location, ootd, status ,remarks)
            VALUES ('$title', '$date', '$time', '$location', '$ootd','$status' ,'$remarks')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header("Location: show_all_act.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection when you're done
closeConnection($conn);
?>





