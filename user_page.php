<img src="img/banner.png" width="50">
        <a class="navbar-brand" href="index.php">Two Thousand</a>
        <div class="navbar-nav ml-auto">
		<?php if (isset($_SESSION['id'])) { ?>
                <ul class="navbar mt-1">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ยินดีต้อนรับ <?php echo $_SESSION['name']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
                    </div>
                </ul>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="register.php"><i class="	far fa-user-circle"></i> สมัครสมาชิก</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="	fa  fa-id-card"></i> เข้าสู่ระบบ</a>
                </li>
            <?php } ?>
        </div>

