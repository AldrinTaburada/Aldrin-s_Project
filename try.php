<center>
        <h2>ALL ACTIVITIES</h2>
    </center>
    <table>
        <tr>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>gender</th>
            <th>role</th>
            

              <?php 
                  while($row = mysqli_fetch_assoc($result)){
                ?>
                    
                <tr>
                    <form action="">
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><?php echo $row["role"]; ?></td>
                    
                       </form
                  </tr>

                  <?php
                    }
                  ?>
            