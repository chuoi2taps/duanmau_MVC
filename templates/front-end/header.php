<?php
    if (isset($view_header_cart)) {
        include ($view_header_cart);
    } else {
?>

<header class="header">
    <div class="container">
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
                            <li><a href="admin/user.php?id_user=<?= $_SESSION['user_admin']->id ?>">Trang quản trị</a></li>
                            <li><a href="admin/edit_user.php?id_user=<?= $_SESSION['user_admin']->id ?>">Profile</a></li>
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
                            <li><a href="admin/edit_user.php?id_user=<?= $_SESSION['user_customer']->id ?>">Profile</a></li>
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

        <div class="header-main">
            <a href="index.php">
                <img class="logo" height="" src="admin/public/layout/assets/img/logo3.jpg" alt="">
            </a>
            <div class="search">
                <input placeholder="Bạn muốn tìm sản phẩm gì...." type="text">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>
            <?php if (isset($_SESSION['user_customer'])) { ?>
                <div class="cart">
                    <a href="cart.php?id_user=<?= $_SESSION['user_customer']->id ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg>
                    </a>
                </div>
            <?php } ?>

            <?php if (isset($_SESSION['user_admin'])) { ?>
                <div class="cart">
                    <a href="cart.php?id_user=<?= $_SESSION['user_admin']->id ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg>
                    </a>
                </div>
            <?php } ?>

            <?php if (!isset($_SESSION['user_customer']) && !isset($_SESSION['user_admin'])) { ?>
                <div class="cart">
                    <a href="cart.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</header>

<nav class="nav-main">
    <div class="container">
        <ul class="menu">
            <li>
                <a href="index.php">
                    <div style="float: left;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                        </svg>
                    </div>
                    <span>
                        Trang chủ
                    </span>
                </a>
            </li>

            <li>
                <a href="products.php">
                    <div style="float: left;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                        </svg>
                    </div>
                    <span>
                        Sản phẩm
                    </span>
                </a>
            </li>

            <li>
                <a href="contact.php">
                    <div style="float: left;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                    </div>
                    <span>
                        Liên hệ
                    </span>
                </a>
            </li>

            <li>
                <a href="">
                    <div style="float: left;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                        </svg>
                    </div>
                    <span>
                        Hỏi đáp
                    </span>
                </a>
            </li>

        </ul>
    </div>
</nav>

<?php
    }
?>