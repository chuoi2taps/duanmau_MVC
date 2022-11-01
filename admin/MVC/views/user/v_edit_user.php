<main>
    <div class="container">
        <div class="sign_up">
            <h2>Tài khoản của tôi</h2>

            <main>
                <div class="container">

                    <form action="" method="post" enctype="multipart/form-data">
                        <table style="border-spacing: 10px">
                            <tr>
                                <td>
                                    <label for="">Họ tên:</label>
                                </td>
                                <td><input type="text" name="full_name" id="full_name" placeholder="Họ tên..." value="<?= $user[0]->full_name ?>"></td>
                            </tr>

                            <?php if (isset($err['full_name'])) { ?>
                                <tr class="error">
                                    <td colspan="2">
                                        <svg style="color: red; background-color: #fff;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                                        </svg>

                                        <span><?= $err['full_name'] ?></span>
                                    </td>
                                    <td></td>
                                </tr>
                            <?php } ?>

                            <tr>
                                <td>
                                    <label for="user_name">Tên tài khoản:</label>
                                </td>
                                <td><input type="text" name="user_name" id="user_name" placeholder="Tên tài khoản..." value="<?= $user[0]->user_name ?>"></td>
                            </tr>

                            <?php if (isset($err['username'])) { ?>
                                <tr class="error">
                                    <td colspan="2">
                                        <svg style="color: red; background-color: #fff;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                                        </svg>

                                        <span><?= $err['username'] ?></span>
                                    </td>
                                    <td></td>
                                </tr>
                            <?php } ?>

                            <tr>
                                <td>
                                    <label for="password">Mật khẩu:</label>

                                </td>
                                <td><input type="password" name="password" id="password" placeholder="Mật khẩu..." value="<?= $user[0]->mat_khau ?>"></td>
                            </tr>

                            <?php if (isset($err['password'])) { ?>
                                <tr class="error">
                                    <td colspan="2">
                                        <svg style="color: red; background-color: #fff;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                                        </svg>

                                        <span><?= $err['password'] ?></span>
                                    </td>
                                    <td></td>
                                </tr>
                            <?php } ?>

                            <tr>
                                <td>
                                    <label for="repass">Nhập lại mật khẩu:</label>
                                </td>
                                <td><input type="password" name="re_password" id="repass" placeholder="Nhập lại mật khẩu..." value="<?= $user[0]->mat_khau ?>"></td>
                            </tr>

                            <?php if (isset($err['repassword'])) { ?>
                                <tr class="error">
                                    <td colspan="2">
                                        <svg style="color: red; background-color: #fff;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                                        </svg>

                                        <span><?= $err['repassword'] ?></span>
                                    </td>
                                    <td></td>
                                </tr>
                            <?php } ?>

                            <tr>
                                <td>
                                    <label for="sdt">Số điện thoại:</label>

                                </td>
                                <td><input type="text" name="sdt" id="sdt" placeholder="Số điện thoại..." value="<?= $user[0]->sdt ?>"></td>
                            </tr>

                            <?php if (isset($err['sdt'])) { ?>
                                <tr class="error">
                                    <td colspan="2">
                                        <svg style="color: red; background-color: #fff;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                                        </svg>

                                        <span><?= $err['sdt'] ?></span>
                                    </td>
                                    <td></td>
                                </tr>
                            <?php } ?>

                            <tr>
                                <td colspan="2"><img src="public/layout/assets/img/<?= $user[0]->hinh ?>" width="100px" alt=""></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="avatar">Ảnh đại diện:</label>
                                    <input type="hidden" name="avatar" id="avatar" value="<?= $user[0]->hinh ?>">
                                </td>

                                <td><input type="file" name="avatar" id="avatar"></td>
                            </tr>

                            <?php if (isset($err['img'])) { ?>
                                <tr class="error">
                                    <td colspan="2">
                                        <svg style="color: red; background-color: #fff;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                                        </svg>

                                        <span><?= $err['img'] ?></span>
                                    </td>
                                    <td></td>
                                </tr>
                            <?php } ?>

                            <tr>
                                <td>
                                    <label for="address">Địa chỉ:</label>
                                </td>

                                <td><textarea name="address" id="address" cols="15" rows="5" placeholder="Địa chỉ..." ><?= $user[0]->diachi ?></textarea></td>
                            </tr>

                            <?php if (isset($err['diachi'])) { ?>
                                <tr class="error">
                                    <td colspan="2">
                                        <svg style="color: red; background-color: #fff;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                                        </svg>

                                        <span><?= $err['diachi'] ?></span>
                                    </td>
                                    <td></td>
                                </tr>
                            <?php } ?>

                            <tr>
                                <td colspan="2"><button type="submit" name="btn_edit">Sửa</button></td>
                                <td></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </main>
        </div>
</main>