<?php
// done_act_confirm.php

if (isset($_GET['id'])) {
    $activityId = $_GET['id'];
} else {
    // Handle the case where 'id' is not set or invalid
    // You can redirect or display an error message.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Activity Completion</title>
</head>
<body>
    <h2>Confirm Activity Completion</h2>
    <p>Are you sure you want to mark this activity as done?</p>
    <form action="done_act.php" method="GET">
        <input type="hidden" name="id" value="<?php echo $activityId; ?>">
        <button type="submit">Yes, Mark as Done</button>
        <a href="show_all.activity.php"></a>
        <td><a href="#" onclick="confirmDoneActivity(<?php echo $row["id"]; ?>">Done Activity</a></td>

    </form>
</body>
</html>
