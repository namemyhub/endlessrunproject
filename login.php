<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Comparible" content="ie-edge">
    <title>HyperBoi | Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="style.css"> 
</head>

<body>
    <?php include("php/header.php") ?>
    <?php
    include_once('connect.php');

    if (isset($_POST['submit'])) {
        $username =  $_POST['username'];
        $password = $conn->real_escape_string($_POST['password']);

        $sql = "SELECT * FROM `tbl_members` WHERE `username` = '" . $username . "' AND `password` = '" . $password . "'";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['userlevel'] = $row['userlevel'];

            if ($_SESSION['userlevel'] == 'a') {
                header("Location: admin_page.php");
            }
            if ($_SESSION['userlevel'] == '') {
                header("Location: index.php");
            }
        } else {
            echo "<script>";
            echo "alert(\"Username หรือ Password ของคุณไม่ถูกต้อง\");";
            echo "window.history.back()";
            echo "</script>";
        }
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-4 ">
                <div class="card">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-header text-center bg-primary text-white">
                            เข้าสู่ระบบ
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">ชื่อผู้ใช้</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">รหัสผ่าน</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-center bg-primary text-white">
                            <input type="submit" name="submit" class="btn btn-success" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <?php include("php/footer.php"); ?>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>

</html>