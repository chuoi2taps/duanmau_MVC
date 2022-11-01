<main>
    <div class="container">
        <div class="form-login">
            <form action="login_cus.php" method="post">
                <h2>Đăng nhập người dùng</h2>
                <div class="input">
                    <input name="username" type="text" class="user_id" placeholder="Tên đăng nhập">
                    <br>

                    <div class="space"></div>

                    <input name="password" type="password" placeholder="Mật khẩu" value="">
                    <?php if (isset($_COOKIE['error_login'])) { ?>
                        <div class="space"></div>

                        <div class="error">
                            <svg style="color: red; background-color: #fff; padding: 3px" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                            </svg>
                            <span><?= $_COOKIE['error_login'] ?></span>
                        </div>
                    <?php } ?>
                    <br>



                    <div class="space"></div>

                    <button name="btn-login" class="btn">ĐĂNG NHẬP</button>

                    <a href="" class="forget">
                        Quên mật khẩu
                    </a>

                    <hr style="height: 1px; border: 0; background-color: #fff;">

                    <div class="sign-up-you">
                        Bạn chưa có tài khoản? <a class="sign-up" href="sign_up.php">Đăng ký</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>