<?php 
    if (isset($view_header_sign_up)) {
        include ($view_header_sign_up);
    } else if (isset($view_header_profile)){
        include ($view_header_profile);
    } else {
?>

<div class="header-admin">
    <div class="container">
        <div class="connect">
            <?php if (!isset($_SESSION['user_customer']) && !isset($_SESSION['user_admin'])) { ?>

                <div class="chua_login">
                    <a href="./user.php">Kênh người bán</a>
                </div>
            <?php } ?>

            <?php if (isset($_SESSION['user_admin'])) { ?>

                <div class="da_login_admin">
                    <a href=""><img src="public/layout/assets/img/<?php echo $_SESSION['user_admin']->hinh ?>" width="26px" height="26px" alt=""></a>
                    <a href=""><?php echo $_SESSION['user_admin']->full_name ?></a>

                    <div class="info">
                        <img src="public/layout/assets/img/<?php echo $_SESSION['user_admin']->hinh ?>" width="64px" height="64px" alt="">
                        <ul>
                            <li><strong><?php echo $_SESSION['user_admin']->full_name ?></strong></li>
                            <li><a href="../admin/edit_user.php?id_user=<?php echo $_SESSION['user_admin']->id ?>">Profile</a></li>
                            <li><a href="user.php">Trang quản trị</a></li>
                            <li><a href="log_out.php">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>

            <div></div>

            <?php if (isset($_SESSION['user_customer'])) { ?>

                <div class="da_login_customer">
                    <a href=""><img src="public/layout/assets/img/<?php echo $_SESSION['user_customer']->hinh ?>" width="26px" height="26px" alt=""></a>
                    <a href=""><?php echo $_SESSION['user_customer']->full_name ?></a>

                    <div class="info">
                        <img src="public/layout/assets/img/<?php echo $_SESSION['user_customer']->hinh ?>" width="64px" height="64px" alt="">
                        <ul>
                            <li><strong><?php echo $_SESSION['user_customer']->full_name ?></strong></li>
                            <li><a href="../admin/edit_user.php?id_user=<?php echo $_SESSION['user_customer']->id ?>">Profile</a></li>

                            <li><a href="log_out.php">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>

            <?php if (!isset($_SESSION['user_customer']) && !isset($_SESSION['user_admin'])) { ?>

                <div class="chua_login">
                    <a href="login_cus.php">Đăng nhập</a>
                    <div style="opacity: 0.5; margin: 0 5px;border-left: 2px solid #fff; display: inline"></div>
                    <a href="sign_up.php">Đăng ký</a>
                </div>
            <?php } ?>
        </div>

        <div style="display: flex; align-items: center; padding: 0 1.125rem 1.125rem;">
            <div class="admin-page">
                <a href="../index.php" class="admin-logo">
                    <img src="public/layout/assets/img/logo3.jpg" alt="">

                    <?php if (!isset($_SESSION['user_customer']) && !isset($_SESSION['user_admin'])) { ?>
                        <div class="page-name">
                            Đăng nhập
                        </div>
                    <?php } ?>

                    <?php if (isset($_SESSION['user_admin'])) { ?>
                        <div class="page-name">
                            Trang Quản trị
                        </div>
                    <?php } ?>
                </a>
            </div>

            <div class="you-help">
                <a href="">
                    Bạn cần giúp đỡ?
                </a>
            </div>
        </div>
    </div>
</div>

<?php } ?>
