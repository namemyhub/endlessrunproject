    <?php 
    require_once "connect.php";
?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>HyperBoi | Post</title>
    </head>

    <body>
        <?php include("php/headeradmin.php"); ?>
        <div class="showinfo text-center">
            <div class="container">
                <h3>View All Post</h3>
                <!-- <table class="table"> -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Post No</th>
                            <th>Post Date</th>
                            <th>Post Author</th>
                            <th>Post Title</th>
                            <th>Post Post image</th>
                            <th>Post Content</th>
                            <th>Delete Post</th>
                            <th>Edit Post</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php

                        $select_post = "SELECT * FROM posts order by 1 DESC";

                        $query_post = mysqli_query($conn, $select_post);

                        while ($row = mysqli_fetch_array($query_post)) {
                            $post_id = $row['post_id'];
                            $post_date = $row['post_date'];
                            $post_author = $row['post_author'];
                            $post_title = $row['post_title'];
                            $post_image = $row['post_image'];
                            $post_content = substr($row['post_content'], 0, 100);
                        ?>

                            <tr>
                                <td><?php echo $post_id; ?></td>
                                <td><?php echo $post_date; ?></td>
                                <td><?php echo $post_author; ?></td>
                                <td><?php echo $post_title; ?></td>
                                <td><img width="80" height="80" src="images/<?php echo $post_image; ?>"></td>
                                <td><?php echo $post_content; ?></td>
                                <td><a href="delete.php?del=<?php echo $post_id; ?>">Delete</a></td>
                                <td><a href="edit_posts.php?edit=<?php echo $post_id; ?>">Edit</a></td>
                            </tr>


                        <?php } ?>


                </table>
            </div>
        </div>
        <?php include("php/footer.php"); ?>
    </body>

    </html>