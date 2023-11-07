<?php
include_once("login\included/dbaccess/DBUtil.php");

$conn = getConnection();

$sql = "SELECT * from activ_table ";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <style>
        /* Your existing styles here */

        /* New styles for the activity table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        @media screen and  (max-width: 767px),
        (min-width: 767px) and (max-width:1023px,(min-width:1024px))  {
            ... {
              
            }
        }

        /* Modal styles */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
}

.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 50%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover {
    color: black;
    text-decoration: none;
    cursor: pointer;
}



.scrollable-container {
    max-height: 300px; /* Adjust the height as needed */
    overflow: auto;
    border: 1px solid #ccc;
    padding: 10px;
}

#btn {
            position: absolute;
            left: 94%;
            bottom: 93%;
            
        }



    </style>

    <script>
        // JavaScript function to show a confirmation message
        function confirmDoneActivity() {
            if (confirm("Good job! Is this activity really done?")) {
                // If the user confirms, you can redirect to "done_act.php" here.
                // For example, you can use window.location.href.
                window.location.href = "done_act.php?id<?php echo $row["id"]; ?>"
            }
        }
        function openEditModal(id) {
        var modal = document.getElementById("editModal");
        modal.style.display = "block";

        // You can use JavaScript to set the form's action to include the activity ID
        var form = modal.querySelector('form');
        form.action = "update_activity.php?id=" + id;
    }

    function closeEditModal() {
        var modal = document.getElementById("editModal");
        modal.style.display = "none";
    }
    </script>
</head>

<body>
    <button id="btn"><a href="logout.php">Logout</a></button>
    <center>
        <h2>ALL ACTIVITIES OF THE USERS</h2>
    </center>
    <table style="height: 50vh;overflow:auto;">
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>OOTD</th>
            <th>STATUS</th>
            <th>Cancel</th>
            <th>Remark As Done</th>
            <th>Edit</th> <!-- New Edit column -->

        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <form action="">
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["title"]; ?></td>
                    <td><?php echo $row["date"]; ?></td>
                    <td><?php echo $row["time"]; ?></td>
                    <td><?php echo $row["location"]; ?></td>
                    <td><?php echo $row["ootd"]; ?></td>
                    <td><?php echo $row["status"]; ?></td>
                    <td><a href="delete_act.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                    <td><a href="done_act.php?id=<?php echo $row["id"]; ?>" onclick="confirmDoneActivity()">Marked As Done</a></td>
                    <td><a href="edit_act.php?id=<?php echo $row["id"]; ?>">Edit</a></td> <!-- Edit link -->
                   
                </form>
            </tr>
        <?php
        }
    

        ?>
    </table>
    <section style=" width: 100%;height: 50vh; margin-top: 5vh ;display: inline-flex;">
        <div class="left" style="width:50%;background-color: gray;">
            <h1 style="margin-left:30vh;margin-top: 25vh;">ANNOUNCEMENT</h1>
        </div>
        <div class="right" style="width:50%;overflow:auto;padding:5vh;">
                <?php
                $conn = getConnection();
                $sql = "SELECT * FROM announcement";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div style="border:2px solid black;margin-top: 2vh;">
                            <h1 style="margin-left: 5vh;">From: Admin</h1>
                            <h1 style="margin-left: 5vh;">Subject: <?php echo $row["announcement"];?></h1>
                        </div>
                    <?php
                }
                ?>
        </div>
    </section>
</body>

</html>
