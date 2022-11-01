<main style="margin: 20px 0;">
    <div class="container">
        <div class="table-left">
            <div class="heading">
                Trang chủ
            </div>

            <div>
                <a href="danhmuc.php">
                    Danh mục
                </a>
            </div>

            <div>
                <a href="hanghoa.php">
                    Hàng hóa
                </a>
            </div>

            <div>
                <a href="user.php">
                    Khách hàng
                </a>
            </div>

            <div>
                <a href="comments.php">
                    Bình luận
                </a>
            </div>

            <div>
                <a href="thongke.php">
                    Thống kê
                </a>
            </div>

        </div>
    </div>

    <div class="table-right">
        <div class="heading">
            Thống kê người dùng theo tháng
        </div>

        <form action="" method="post">
            <select name="month" id="">
                <option value="">Chọn tháng</option>
                <option value="1" <?= ($month == 1) ? 'selected' : "" ?> >Tháng 1</option>
                <option value="2" <?= ($month == 2) ? 'selected' : "" ?> >Tháng 2</option>
                <option value="3" <?= ($month == 3) ? 'selected' : "" ?> >Tháng 3</option>
                <option value="4" <?= ($month == 4) ? 'selected' : "" ?> >Tháng 4</option>
                <option value="5" <?= ($month == 5) ? 'selected' : "" ?> >Tháng 5</option>
                <option value="6" <?= ($month == 6) ? 'selected' : "" ?> >Tháng 6</option>
                <option value="7" <?= ($month == 7) ? 'selected' : "" ?> >Tháng 7</option>
                <option value="8" <?= ($month == 8) ? 'selected' : "" ?> >Tháng 8</option>
                <option value="9" <?= ($month == 9) ? 'selected' : "" ?> >Tháng 9</option>
                <option value="10" <?= ($month == 10) ? 'selected' : "" ?> >Tháng 10</option>
                <option value="11" <?= ($month == 11) ? 'selected' : "" ?> >Tháng 11</option>
                <option value="12" <?= ($month == 12) ? 'selected' : "" ?> >Tháng 12</option>
            </select>

            <button name="btn_month" type="submit">Chọn</button>
        </form>

        <div>
            <div class="mb10">
                <table>
                    <tr>
                        <td colspan="3"><a href="thongke.php">Thống kê người dùng</a></td>
                        <td colspan="3"><a href="thongke_hh.php">Thống kê sản phẩm</a></td>
                    </tr>

                    <tr>
                        <th>STT</th>
                        <th>Mã TK</th>
                        <th>Họ tên</th>
                        <th>Tên tài khoản</th>
                        <th>Địa chỉ</th>
                        <th>Thời gian tạo</th>
                    </tr>

                    <?php foreach ($thongke_user as $key => $value) : ?>
                        <tr>
                            <td><?= $stt ?></td>
                            <td><?php echo $value->id ?></td>
                            <td><?php echo $value->full_name ?></td>
                            <td><?php echo $value->user_name ?></td>
                            <td><?php echo $value->diachi ?></td>
                            <td><?php echo $value->created_time ?></td>
                        </tr>
                    <?php $stt++;
                    endforeach ?>
                </table>
            </div>

            <div class="mb10">
                <a href="bieudo_user.php"><button type="button">Xem biểu đồ</button></a>
            </div>
        </div>

    </div>
</main>