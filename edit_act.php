<?php
// Include necessary files and establish a database connection
include_once("login\included/dbaccess/DBUtil.php");
$conn = getConnection();

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Fetch the activity details based on the provided 'id'
    $sql = "SELECT * FROM activ_table WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Activity with the specified ID found, fetch its details
        $activity = mysqli_fetch_assoc($result);
    } else {
        // Activity with the specified ID not found
        echo "Activity not found.";
        exit;
    }
} else {
    // 'id' parameter is not set in the URL
    echo "Please provide an 'id' parameter.";
    exit;
}

// Handle form submission for updating the activity details
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize the updated details from the form
    $updatedTitle = mysqli_real_escape_string($conn, $_POST['title']);
    $updatedDate = mysqli_real_escape_string($conn, $_POST['date']);
    $updatedTime = mysqli_real_escape_string($conn, $_POST['time']);
    $updatedLocation = mysqli_real_escape_string($conn, $_POST['location']);
    $updatedOOTD = mysqli_real_escape_string($conn, $_POST['ootd']);

    // Update the activity details in the database
    $updateQuery = "UPDATE activ_table SET title = '$updatedTitle', date = '$updatedDate', time = '$updatedTime', location = '$updatedLocation', ootd = '$updatedOOTD' WHERE id = '$id'";
    if (mysqli_query($conn, $updateQuery)) {
        echo "Activity updated successfully!";
    } else {
        echo "Error updating activity: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE, edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Activity</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center; /* Center align the form elements */
        }

        h2 {
            color: #007bff;
        }

        form {
            width: 300px;
            margin: 0 auto;
            padding: 50px;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius:1px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block; /* Display labels on separate lines */
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 7px 0;
            border: 2px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 3px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Edit Activity</h2>
    
    <form method="POST">
    <label for="title">Title:</label>

        
        <input type="text" id="title" name="title" value="<?php echo $activity['title']; ?>"><br><br>

        <label for="date">Date:</label>
        <input type="text" id="date" name="date" value="<?php echo $activity['date']; ?>"><br><br>

        <label for "time">Time:</label>
        <input type="text" id="time" name="time" value="<?php echo $activity['time']; ?>"><br><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="<?php echo $activity['location']; ?>"><br><br>

        <label for="ootd">OOTD:</label>
        <input type="text" id="ootd" name="ootd" value="<?php echo $activity['ootd']; ?>"><br><br>

        <input type="submit" value="Update">
        
        <br>
    </br>

   

    <br>
    </br>   
        


    
    </form>
</body>
</html>
