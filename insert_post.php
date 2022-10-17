<?php
require_once "connect.php";
if (isset($_POST['submit'])) {
    $post_title = $_POST['title'];
    $post_author = $_POST['author'];
    $post_keywords = $_POST['keywords'];
    $post_content = $_POST['content'];
    $post_image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($image_tmp, "images/$post_image");

    $insert_query = "INSERT INTO posts (post_title, post_author, post_image, post_keywords, post_content) 
                        VALUES ('$post_title','$post_author','$post_image','$post_keywords','$post_content')";

    if (mysqli_query($conn, $insert_query)) { 
        echo "<script>alert('Post published successfully');</script>";
        echo "<script>location.href='admin_page.php'</script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>shopping</title>
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
    <div class="container">
        <form method="post" action="insert_post.php" enctype="multipart/form-data">

            <table width="100%" align="center" border="2">

                <tr>
                    <td align="center" colspan="6">
                        <h3>Insert New Post Here</h3>
                    </td>
                </tr>

                <tr>
                    <td align="right">Post Title:</td>
                    <td><input type="text" name="title" size="50"></td>
                </tr>

                <tr>
                    <td align="right">Post Author : </td>
                    <td><input type="text" name="author" size="50"></td>
                </tr>

                <tr>
                    <td align="right">Post Keywords:</td>
                    <td><input type="text" name="keywords" size="50"></td>
                </tr>

                <tr>
                    <td align="right">Post Image:</td>
                    <td><input type="file" name="image"></td>
                </tr>

                <tr>
                    <td align="right">Post Content:</td>
                    <td><textarea name="content" cols="50" rows="15"></textarea></td>
                </tr>

            </table>
            <div class="card-footer text-center">
                <input type="submit" name="submit" class="btn btn-dark" value="Publish Now">
            </div>
        </form>
    </div>





</body>

</html>

</body>

</html>