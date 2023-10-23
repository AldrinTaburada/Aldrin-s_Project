<?php
session_start();

include_once("login\included/dbaccess/DBUtil.php");

$conn = getConnection();

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $query = "DELETE FROM activ_table WHERE id = '$id'";
    mysqli_query($conn, $query);

    header("Location: show_all_act.php");
}

closeConnection($conn);
?>
