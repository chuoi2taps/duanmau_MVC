<main style="margin: 20px 0;">
    <div class="container">
        <div class="table-left">
            <div class="heading">
                Trang chủ
            </div>

            <div>
                <a href="./danhmuc.php">
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
            Quan lý loại hàng
        </div>

        <div>
            <form action="" method="post">
                <div class="mb10">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th></th>
                        </tr>

                        <?php foreach ($category_limit as $key => $value) : ?>

                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?php echo $value->id_cate ?></td>
                                <td><?php echo $value->ten_loai ?></td>
                                <td>
                                    <a href="edit_dm.php?id=<?php echo $value->id_cate ?>"><button class="btsx" type="button">Sửa</button></a>
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa loại hàng <?php echo $value->ten_loai ?> ')" href="deletedm.php?id=<?php echo $value->id_cate ?>"><button class="btsx" type="button">Xóa</button></a>
                                </td>
                            </tr>
                        <?php endforeach ?>

                        <tr>
                            <td colspan="11">Tổng số danh mục là : <?= count($category) ?></td>
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
                    <a href="adddm.php"><button type="button">Thêm mới</button></a>
                </div>

            </form>
        </div>

    </div>
</main