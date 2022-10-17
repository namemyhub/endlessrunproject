<?php 

    require_once "connect.php";

    if (isset($_GET['del'])) {
        $delete_member = $_GET['del'];

        $delete_query = "DELETE FROM tbl_members WHERE id = '$delete_member'";

        if (mysqli_query($conn, $delete_query)) {
            echo "<script>alert('Post Has been Deleted')</script>";
            header("location: view_user.php");
        }
    }

?>