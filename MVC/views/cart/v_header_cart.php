<header class="header">
    <div class="connect">
        <?php if (!isset($_SESSION['user_customer']) && !isset($_SESSION['user_admin'])) { ?>

            <div class="chua_login">
                <a href="admin/user.php">Kênh người bán</a>
            </div>
        <?php } ?>

        <?php if (isset($_SESSION['user_admin'])) { ?>

            <div class="da_login_admin">
                <a href=""><img src="admin/public/layout/assets/img/<?= $_SESSION['user_admin']->hinh ?>" width="26px" height="26px" alt=""></a>
                <a href=""><?= $_SESSION['user_admin']->full_name ?></a>

                <div class="info">
                    <img src="admin/public/layout/assets/img/<?= $_SESSION['user_admin']->hinh ?>" width="64px" height="64px" alt="">
                    <ul>
                        <li><strong><?= $_SESSION['user_admin']->full_name ?></strong></li>
                        <li><a href="admin/user.php">Trang quản trị</a></li>
                        <li><a href="admin/log_out.php">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        <?php } ?>



        <div></div>

        <?php if (isset($_SESSION['user_customer'])) { ?>

            <div class="da_login_customer">
                <a href=""><img src="admin/public/layout/assets/img/<?= $_SESSION['user_customer']->hinh ?>" width="26px" height="26px" alt=""></a>
                <a href=""><?= $_SESSION['user_customer']->full_name ?></a>

                <div class="info">
                    <img src="admin/public/layout/assets/img/<?= $_SESSION['user_customer']->hinh ?>" width="64px" height="64px" alt="">
                    <ul>
                        <li><strong><?= $_SESSION['user_customer']->full_name ?></strong></li>
                        <li><a href="admin/log_out.php">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        <?php } ?>

        <?php if (!isset($_SESSION['user_customer']) && !isset($_SESSION['user_admin'])) { ?>

            <div class="chua_login">
                <a href="admin/login_cus.php">Đăng nhập</a>
                <div style="opacity: 0.5; margin: 0 5px;border-left: 2px solid #fff; display: inline"></div>
                <a href="admin/sign_up.php">Đăng ký</a>
            </div>
        <?php } ?>


    </div>

    <div class="header-cart">
        <div class="container">
            <div style="display: flex; align-items: center; border-bottom: 1px solidrgba(0,0,0,.09);">
                <div class="cart-page">
                    <a href="index.html" class="cart-logo">
                        <img src="admin/public/layout/assets/img/logo4-b-white.png" alt="">

                        <div class="page-name">
                            Giỏ hàng
                        </div>
                    </a>
                </div>

                <div class="cart-search">
                    <div class="search-bar">
                        <div class="search-bar-main">
                            <form action="">
                                <input type="text" placeholder="Tìm kiếm">
                            </form>
                        </div>

                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>