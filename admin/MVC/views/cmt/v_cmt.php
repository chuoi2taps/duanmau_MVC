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
            Quan lý bình luận
        </div>

        <div>
            <form action="" method="post">
                <div class="mb10">
                    <table>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>ID_KH</th>
                            <th>Tên khách hàng</th>
                            <th>ID_HH</th>
                            <th>Ngày bình luận</th>
                            <th></th>
                        </tr>

                        <?php foreach ($comment as $key => $value) { ?>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?php echo $value->id ?></td>
                                <td><?php echo $value->noi_dung ?></td>
                                <td><?php echo $value->id_kh ?></td>
                                <td><?php echo $value->ten_kh ?></td>
                                <td><?php echo $value->id_hh ?></td>
                                <td><?php echo $value->ngay_bl ?></td>
                                <td>
                                    <a href="./delete_cmt.php?id_cmt=<?php echo $value->id ?>" onclick="return confirm('Bạn chắc chắn muốn xóa comment của <?php echo $value->ten_kh ?> vào <?php echo $value->ngay_bl ?>')">
                                        <button class="btsx" type="button">Xóa</button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                        <tr>
                            <td colspan="11">Tổng số bình luận là : <?= count($comments) ?></td>
                        </tr>
                    </table>

                    <div class="page-number">
                        <ul>
                            <?php if ($current_page > 1) { ?>
                                <li>
                                    <a href="?perpage=<?= $limit ?>&page=<?= $current_page - 1 ?>">
                                        <
                                    </a>
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