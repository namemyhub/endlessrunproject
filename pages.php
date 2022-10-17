<?php
session_start();
require_once "connect.php";

if (!isset($_SESSION['id'])) {
    header("location:login.php");
}

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>HyperBoi | Board</title>
</head>

<body>
    <?php include("php/header.php"); ?>
    <div class="container">
        <?php

        if (isset($_GET['id'])) {

            $page_id = $_GET['id'];

            $select_posts = "SELECT * FROM posts WHERE post_id = '$page_id'";

            $run_posts = mysqli_query($conn, $select_posts);

            while ($row = mysqli_fetch_array($run_posts)) {

                $post_id = $row['post_id'];
                $post_date = $row['post_date'];
                $post_author = $row['post_author'];
                $post_title = $row['post_title'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];

        ?>
                <br>
                <div class="card">
                    <div class="card-header text-center">
                        <h3><?php echo $post_title; ?></3>
                    </div>
                    <div class="card-body text-center">
                        <img width="30%" height="30%" src="images/<?php echo $post_image; ?>" alt="">

                        <p>Posted By <strong><?php echo $post_author; ?></strong> | Published on <strong><?php echo $post_date; ?></strong></p>
                        <h4>
                            <p><?php echo $post_content; ?></p>
                        </h4>
                    </div>
                    <div class="card-footer">
                        
                    </div>
                </div>
    </div>

<?php
            }
        }
?>

</body>
<br>
<?php include("php/footer.php"); ?>

</html>