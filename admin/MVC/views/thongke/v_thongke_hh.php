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
            Thống kê sản phẩm theo danh mục
        </div>

        <div>
            <div class="mb10">
                <table>
                    <tr>
                        <td colspan="3"><a href="thongke.php">Thống kê người dùng</a></td>
                        <td colspan="3"><a href="thongke_hh.php">Thống kê sản phẩm</a></td>
                    </tr>

                    <tr>
                        <th>STT</th>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Giá nhỏ nhất</th>
                        <th>Giá lớn nhất</th>
                        <th>Giá trung bình</th>
                    </tr>

                    <?php foreach ($thongke_product as $key => $value) : ?>
                        <tr>
                            <td><?= $stt ?></td>
                            <td><?php echo $value->id_cate ?></td>
                            <td><?php echo $value->ten_loai ?></td>
                            <td><?php echo $value->total_product ?></td>
                            <td><?php echo number_format($value->min_price, 0, ",", ".") ?><sup>đ</sup></td>
                            <td><?php echo number_format($value->max_price, 0, ",", ".") ?><sup>đ</sup></td>
                            <td><?php echo number_format($value->avg_price, 0, ",", ".") ?><sup>đ</sup></td>
                        </tr>
                    <?php $stt++;
                    endforeach ?>
                </table>
            </div>

            <div class="mb10">
                <a href="bieudo_hh.php"><button type="button">Xem biểu đồ</button></a>
            </div>

        </div>

    </div>
</main>