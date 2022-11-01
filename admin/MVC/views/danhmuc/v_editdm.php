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
            Thêm danh mục
        </div>

        <div>
            <form action="" method="post">
                <div class="mb10">
                    <label for="">Mã loại</label><br>
                    <input type="text" name="maloai" disabled value="<?= $category[0]->id_cate ?>">
                </div>

                <div class="mb10">
                    <label for="">Tên loại</label><br>
                    <input type="text" name="tenloai" value="<?= $category[0]->ten_loai ?>">

                    <?php if (isset($err['tenloai'])) { ?>
                        <div class="error">
                            <svg style="color: red; background-color: #fff;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                            </svg>

                            <span><?= $err['tenloai'] ?></span>
                        </div>
                    <?php } ?>
                </div>

                <div class="mb10">
                    <button type="submit" name="btn_edit">SỬA</button>
                    <button type="reset">NHẬP LẠI</button>
                    <a href="danhmuc.php"><button type="button">DANH SÁCH</button></a>
                </div>

            </form>
        </div>

    </div>
</main>