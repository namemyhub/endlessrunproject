<?php require("connect.php"); ?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>HyperBoi | member</title>
    </head>

    <body>
        <?php include("php/headeradmin.php"); ?>
        <div class="showinfo text-center">
            <div class="container">
                <h3>View All member</h3>
                <!-- <table class="table"> -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>member No</th>
                            <th>member name</th>
                            <th>member username</th>
                            <th>member password</th>
                            <th>member userlevel</th>
                            <th>Delete member</th>
                            <th>Edit member</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $select_member = "SELECT * FROM tbl_members order by 1 DESC";

                        $query_member = mysqli_query($conn, $select_member);

                        while ($row = mysqli_fetch_array($query_member)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $username = $row['username'];
                            $password = $row['password'];
                            $userlevel = $row['userlevel'];
                        ?>

                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $username; ?></td>
                                <td><?php echo $password; ?></td>
                                <td><?php echo $userlevel; ?></td>
                                <td><a href="delete_member.php?del=<?php echo $id; ?>">Delete</a></td>
                                <td><a href="edit_member.php?edit=<?php echo $id; ?>">Edit</a></td>
                            </tr>


                        <?php } ?>


                </table>
            </div>
        </div>
        <?php include("php/footer.php"); ?>
    </body>

    </html>