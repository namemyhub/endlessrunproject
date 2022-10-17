<!doctype html>
<html lang="en">

<header>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="top-bar_sub_w3layouts container-fluid">
			<div class="col navbar-collapse">
				<div class="navbar-nav logo mr-auto">
					<a class="navbar-brand" href="index.php">
                    <img src="img/banner.png" width="50">
					HyperBoi | Endless Run</a>
				</div>
				    <div class="navbar-nav top-forms ml-auto">
						<?php if (isset($_SESSION['id'])) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html" target="_blank">เริ่มเกมส์</a>
                            </li>
							<ul class="navbar mt-1 mb-1">
								<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								ยินดีต้อนรับ คุณ <?php echo $_SESSION['name']; ?>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
								</div>
							</ul>
						<?php }else { ?>
							<li class="nav-item">
                                <a class="nav-link" href="register.php"><i class="	far fa-user-circle"></i> สมัครสมาชิก</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php"><i class="	fa  fa-id-card"></i> เข้าสู่ระบบ</a>
                            </li>
						<?php } ?>
			        </div>
			</div>
		</div>
    </nav>
    <div class="header_top mt-1 mb-1" id="home">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">หน้าหลัก</a>
                            </li>
                        </ul>
                    </div>
                </ul>

            </div>
        </nav>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</header>