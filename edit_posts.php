<?php
require "connect.php";


if (isset($_GET['edit'])) {
    $edit_id = $_GET['edit'];

    $edit_query = "SELECT * FROM posts WHERE post_id = '$edit_id'";

    $run_edit = mysqli_query($conn, $edit_query);

    while ($edit_row = mysqli_fetch_array($run_edit)) {
        $post_id = $edit_row['post_id'];
        $post_title = $edit_row['post_title'];
        $post_author = $edit_row['post_author'];
        $post_keywords = $edit_row['post_keywords'];
        $post_image = $edit_row['post_image'];
        $post_content = $edit_row['post_content'];
    }
}


if (isset($_POST['submit'])) {
    $update_id = $_GET['edit_form'];
    $post_title = $_POST['title'];
    $post_author = $_POST['author'];
    $post_keywords = $_POST['keywords'];
    $post_content = $_POST['content'];
    $post_image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($image_tmp, "images/$post_image");

    $update_query = "UPDATE posts SET post_title = '$post_title', post_author = '$post_author',
                     post_image = '$post_image', post_keywords = '$post_keywords', post_content = '$post_content' WHERE post_id = '$update_id'";

    if (mysqli_query($conn, $update_query)) {
        echo "<script>alert('Post has been updated');</script>";
        header("location: view_posts.php");
    } else {
        echo "<script>alert('Something wrong!');</script>";
    }
}
?> 
<!doctype html>
<html lang="en">

<head>
    <title>HyperBoi | Manage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include("php/headeradmin.php"); ?>

    <form method="post" action="edit_posts.php?edit_form=<?php echo $post_id; ?>" enctype="multipart/form-data">

        <table width="100%" align="center" border="1">

            <tr>
                <td align="center" colspan="6">
                    <h1>Edit The Post Here</h1>
                </td>
            </tr>

            <tr>
                <td align="right">Post Title:</td>
                <td><input type="text" name="title" size="50" value="<?php echo $post_title; ?>"></td>
            </tr>

            <tr>
                <td align="right">Post Author :</td>
                <td><input type="text" name="author" size="50" value="<?php echo $post_author; ?>"></td>
            </tr>

            <tr>
                <td align="right">Post Keywords:</td>
                <td><input type="text" name="keywords" size="50" value="<?php echo $post_keywords; ?>"></td>
            </tr>

            <tr>
                <td align="right">Post Image:</td>
                <td><input type="file" name="image"><img src="images/<?php echo $post_image; ?>" width="100" height="100" alt=""></td>
            </tr>

            <tr>
                <td align="right">Post Content:</td>
                <td><textarea name="content" cols="50" rows="15"><?php echo $post_content; ?>"</textarea></td>
            </tr>

        </table>

        <div class="card-footer text-center">
            <input type="submit" name="submit" class="btn btn-dark" value="Update Now">
        </div>
    </form>

    <?php include("php/footer.php"); ?>
</body>

</html>