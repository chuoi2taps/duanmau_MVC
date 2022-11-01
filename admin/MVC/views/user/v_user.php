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
            Quản lý Khách hàng
        </div>

        <div>
            <form action="" method="post">
                <div class="mb10">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã TK</th>
                            <th>Tên đăng nhập</th>
                            <th>Họ tên</th>
                            <th>Ngày tạo</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Ảnh đại diện</th>
                            <th>Kích hoạt</th>
                            <th>Vai trò</th>
                            <th></th>
                        </tr>

                        <?php foreach ($user_limit as $key => $value) { ?>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?php echo $value->id ?></td>
                                <td><?php echo $value->user_name ?></td>
                                <td><?php echo $value->full_name ?></td>
                                <td><?php echo $value->created_time ?></td>
                                <td><?php echo $value->sdt ?></td>
                                <td><?php echo $value->diachi ?></td>
                                <td><img src="public/layout/assets/img/<?php echo $value->hinh ?>" width="100" alt=""></td>
                                <td><?php echo $value->kich_hoat ?></td>
                                <td><?php echo $value->vai_tro ?></td>
                                <td>
                                    <a href="edit_user.php?id_user=<?php echo $value->id ?>">
                                        <button class="btsx" type="button">Sửa</button>
                                    </a>

                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng <?php echo $value->full_name ?> ')" href="delete_user.php?id_user=<?php echo $value->id ?>">
                                        <button class="btsx" type="button">Xóa</button>
                                    </a>

                                </td>
                            </tr>

                        <?php } ?>

                        <tr>
                            <td colspan="11">Tổng số người dùng là : <?= count($user) ?></td>
                        </tr>
                    </table>
                </div>

                <div class="page-number">
                    <ul>
                        <?php if ($current_page > 1) { ?>
                            <li>
                                <a href="?perpage=<?= $limit ?>&page=<?= $current_page - 1 ?>">
                                    < </a>
                            </li>
                        <?php } ?>

                        <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                            <?php if ($current_page != $i) { ?>
                                <?php if ($i > $current_page - 3 && $i < $current_page + 3) { ?>
                                    <li>
                                        <a href="?perpage=<?= $limit ?>&page=<?= $i ?>"><?= $i ?></a>
                                    </li>
                                <?php } ?>
                            <?php } else { ?>
                                <li>
                                    <strong><?= $i ?></strong>
                                </li>
                            <?php } ?>
                        <?php endfor ?>

                        <?php if ($current_page < $total_pages) { ?>
                            <li>
                                <a href="?perpage=<?= $limit ?>&page=<?= $current_page + 1 ?>">></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>


                <div class="mb10">
                    <button type="button">Chọn tất cả</button>
                    <button type="button">Bỏ chọn tất cả</button>
                    <button type="button">Xóa các mục đã chọn</button>
                </div>

            </form>
        </div>

    </div>
</main>