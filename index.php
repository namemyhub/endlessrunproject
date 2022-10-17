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
    <link rel="shortcut icon" href="img/banner.png">
    <link rel="stylesheet" href="style.css">
    <title>HyperBoi | HomePage</title>
</head>

<body>
    <?php require_once('php/header.php'); ?>
    <div class="card">
        <marquee direction="left" class="text-dark">สวัสดีครับ ผม endless run เล่นได้ขำๆ อิิออิอิอิอิอิอิอิอิอิอิอิ</marquee>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="card-header text-center text-white bg-dark">
                    New Feed
                </div>
                <?php

                $select_posts = "SELECT * FROM posts";

                $run_posts = mysqli_query($conn, $select_posts);

                while ($row = mysqli_fetch_array($run_posts)) {

                    $post_id = $row['post_id'];
                    $post_date = $row['post_date'];
                    $post_author = $row['post_author'];
                    $post_title = $row['post_title'];
                    $post_image = $row['post_image'];
                    $post_content = substr($row['post_content'], 0, 300);

                ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <img width="10%" height="10%" src="images/<?php echo $post_image; ?>" class="mr-3" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="pages.php?id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h5>
                                    <p>Posted By <strong><?php echo $post_author; ?></strong> | Published on <strong><?php echo $post_date; ?></strong></p>
                                    <p><?php echo $post_content; ?></p>
                                    <a href="pages.php?id=<?php echo $post_id; ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="card-footer text-center bg-dark text-white">
                    
                </div>
            </div>
            <div class="col-3">
                <div class="card text-left">
                    <img class="card-img-top" src="#" alt="">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <br><br>
    
    <?php include("php/footer.php"); ?>

</body>

</html>