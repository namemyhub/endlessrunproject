<?php
session_start();

include_once 'controllers/Member.php';

$com = new Member();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($name) || empty($username) || empty($password)) {
        echo "<span style='color: red; font-size: 20px;'> Field must not be empty </span>";
    } else {
        $chkusername = $com->verify($username);
        if($chkusername){
            $com->setData($name, $username, $password);
            if ($com->create()) {
                echo "<script>alert('Record Inserted Successfully!');</script>";
                echo "<script>window.location.href='index.php'</script>";
            } else {
                echo "<script>alert('Something went wrong! Please try again!');</script>";
                echo "<script>window.location.href='register.php'</script>";
            }
        } else {
            echo "<script>alert('This username already exist!');</script>";
            echo "<script>window.location.href='register.php'</script>";
        } 
    } 
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HyperBoi | Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include("php/header.php"); ?>
    <?php
    if (isset($_POST['submit'])) {
        echo $_POST['name'] . '<br>';
        echo $_POST['username'] . '<br>';
        echo $_POST['password'] . '<br>';
    }


    ?>

<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-4">
                <div class="card">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-header text-center bg-primary text-white">
                            สมัครสมาชิก
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">ชื่อ : </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">ชื่อผู้ใช้ :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">รหัสผ่าน :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center bg-primary text-white">
                            <input type="submit" name="submit" class="btn btn-success" value="Resgister">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <?php include("php/footer.php"); ?>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>

</body>

</html>