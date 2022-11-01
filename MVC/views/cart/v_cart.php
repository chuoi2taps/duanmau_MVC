<main>
    <div class="container">
        <div class="heading">
            <div class="checkbox">
                <input type="checkbox" name="" id="">
            </div>

            <div class="sp_column">
                Sản phẩm
            </div>

            <div class="price_cloumn">
                Đơn giá
            </div>

            <div class="quantity_cloumn">
                Số lượng
            </div>

            <div class="money">
                Thành tiền
            </div>

            <div class="action">
                Thao tác
            </div>

        </div>

        <?php foreach ($cart_detail as $key => $value) { ?>

            <div class="product1">
                <div class="checkbox">
                    <input type="checkbox" name="" id="">
                </div>

                <div class="sp_column">
                    <img src="admin/public/layout/assets/img/<?= $value->hinh ?>" width="80px" height="80px" alt="">
                    <p><?= $value->ten_hh ?></p>
                </div>

                <div class="price_cloumn">
                    <?= number_format($value->price, 0, ",", ".") ?><sup>đ</sup>
                </div>

                <div class="quantity_column">
                    <input type="number" name="" id="" min="1" value="<?= $value->quantity ?>">
                </div>

                <div class="money">
                    <?= number_format($value->quantity * $value->price, 0, ",", ".") ?><sup>đ</sup>
                </div>

                <div class="action">
                    <a href="./delete_cart.php?id_cart=<?= $value->id_cart ?>&id_user=<?= $value->id ?>">Xóa</a>
                </div>
            </div>
        <?php } ?>

        <div class="cash">
            <div class="checkbox">
                <input type="checkbox" name="" id="">
                <span style="margin-left: 5px;">Chọn tất cả</span>
            </div>



            <div class="pay">
                Tổng thanh toán:
                <?php
                $tong = 0;
                for ($i = 0; $i < count($cart_detail); $i++) {
                    $tong += (int)$cart_detail[$i]->quantity * (int)$cart_detail[$i]->price;
                }
                ?>

                <?php
                echo number_format($tong, 0, ",", ".");
                ?>
                <sup>đ</sup>
            </div>

            <div class="buy">
                <button>
                    Mua hàng
                </button>
            </div>
        </div>
    </div>
</main>