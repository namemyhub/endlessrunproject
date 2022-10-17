<?php
require "connect.php";


if (isset($_GET['edit'])) {
    $edit_member = $_GET['edit'];

    $edit_query = "SELECT * FROM tbl_members WHERE id = '$edit_member'";

    $run_edit = mysqli_query($conn, $edit_query);

    while ($edit_row = mysqli_fetch_array($run_edit)) {
        $id = $edit_row['id'];
        $name = $edit_row['name'];
        $username = $edit_row['username'];
        $password = $edit_row['password'];
        $userlevel = $edit_row['userlevel'];
    }
}


if (isset($_POST['submit'])) {
    $update_id = $_GET['edit_form'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userlevel = $_POST['userlevel'];

    $update_query = "UPDATE tbl_members SET name = '$name', username = '$username', password = '$password', userlevel = '$userlevel' WHERE id = '$update_id'";

    if (mysqli_query($conn, $update_query)) {
        echo "<script>alert('Profile has been updated');</script>";
        header("location: view_user.php");
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
    <?php include("php/header.php"); ?>

    <form method="post" action="edit_member.php?edit_form=<?php echo $id; ?>" enctype="multipart/form-data">

        <table width="100%" align="center" border="1">

            <tr>
                <td align="center" colspan="6">
                    <h1>Edit Profile</h1>
                </td>
            </tr>

            <tr>
                <td align="right">name :</td>
                <td><input type="text" name="name" size="50" value="<?php echo $name; ?>"></td>
            </tr>

            <tr>
                <td align="right">username:</td>
                <td><input type="text" name="username" size="50" value="<?php echo $username; ?>"></td>
            </tr>

            <tr>
                <td align="right">password:</td>
                <td><input type="password" name="password" size="50" value="<?php echo $password; ?>"></td>
            </tr>
            <tr>
                <td align="right">userlevel:</td>
                <td><input type="text" name="userlevel" size="50" value="<?php echo $userlevel; ?>"></td>
            </tr>

        </table>

        <div class="card-footer text-center">
            <input type="submit" name="submit" class="btn btn-dark" value="Update Now">
        </div>
    </form>

    <?php include("php/footer.php"); ?>
</body>

</html>