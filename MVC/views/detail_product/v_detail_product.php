<main>
    <div class="container">
        <div class="head">
            <h2>
                <?= $product[0]->ten_hh; ?>
            </h2>
        </div>

        <!-- <hr> -->

        <div class="product">
            <img src="admin/public/layout/assets/img/<?= $product[0]->hinh; ?>" alt="">
        </div>

        <div class="infomation">
            <div class="color">
                <div>
                    <a href="#">
                        Xám
                    </a>
                </div>

                <div>
                    <a href="#">
                        Bạc
                    </a>
                </div>

                <div>
                    <a href="#">
                        Vàng
                    </a>
                </div>
            </div>
            
            <?php if (isset($_SESSION['user_admin'])) { ?>
                <form action="cart.php?id_user=<?= $_SESSION['user_admin']->id ?>&id=<?= $id_pro ?>&act=add" method="post">
                    <div class="price">
                        <strong>
                            
                            <?php foreach ($product as $key => $value) : ?>
                                <input type="hidden" name="price" id="" value="<?= $value->don_gia ?>">
                                <?= number_format($value->don_gia, 0, ",", ".") ?><sup>đ</sup>
                            <?php endforeach ?>
                        </strong>
                    </div>

                    <div class="detail-info">
                        <ul>
                            <li>
                                <p>
                                    Asus ROG Phone 5: Được tạo ra để chiến thắng các giới hạn
                                </p>
                            </li>

                            <li>
                                <p>Sở hữu vi xử lý Snapdragon 888 mạnh mẽ nhất</p>
                            </li>

                            <li>
                                <p>Trải nghiệm chạm vuốt tuyệt hảo với màn tần số 144Hz, độ trễ cực thấp</p>
                            </li>

                            <li>
                                <p>Gaming say đắm với hệ thống âm thanh GameFX và tản nhiệt CoolMate 5 thế hệ mới</p>
                            </li>

                            <li>
                                <p>Thời lượng pin khủng lên đến 6000mAh, hỗ trợ sạc nhanh 65W</p>
                            </li>
                        </ul>
                    </div>

                    <div class="quantity">
                        Số lượng:
                        <input type="number" name="quantity" value="1" step="1" min="1">
                    </div>

                    <div class="buy">
                        <button name="btn-add" type="submit" class="buy-now">Mua ngay</button>
                        <button class="installment">Trả góp</button>
                    </div>
                </form>
            <?php } ?>

            <?php if (isset($_SESSION['user_customer'])) { ?>
                <form action="cart.php?id_user=<?= $_SESSION['user_customer']->id ?>&id=<?= $id_pro ?>&act=add" method="post">
                    <div class="price">
                        <strong>
                            <?php foreach ($product as $key => $value) : ?>
                                <input type="hidden" name="price" id="" value="<?= $value->don_gia ?>">
                                <?= number_format($value->don_gia, 0, ",", ".") ?><sup>đ</sup>
                            <?php endforeach ?>
                        </strong>
                    </div>

                    <div class="detail-info">
                        <ul>
                            <li>
                                <p>
                                    Asus ROG Phone 5: Được tạo ra để chiến thắng các giới hạn
                                </p>
                            </li>

                            <li>
                                <p>Sở hữu vi xử lý Snapdragon 888 mạnh mẽ nhất</p>
                            </li>

                            <li>
                                <p>Trải nghiệm chạm vuốt tuyệt hảo với màn tần số 144Hz, độ trễ cực thấp</p>
                            </li>

                            <li>
                                <p>Gaming say đắm với hệ thống âm thanh GameFX và tản nhiệt CoolMate 5 thế hệ mới</p>
                            </li>

                            <li>
                                <p>Thời lượng pin khủng lên đến 6000mAh, hỗ trợ sạc nhanh 65W</p>
                            </li>
                        </ul>
                    </div>
                
                    <div class="quantity">
                        Số lượng:
                        <input type="number" name="quantity" value="1" step="1" min="1">
                    </div>

                    <div class="buy">
                        <button name="btn-add" type="submit" class="buy-now">Mua ngay</button>
                        <button class="installment">Trả góp</button>
                    </div>
                </form>
            <?php } ?>

            <?php if (!isset($_SESSION['user_customer']) && !isset($_SESSION['user_admin'])) { ?>
                <form action="cart.php" method="post">
                    <div class="price">
                        <strong>
                            <?php foreach ($product as $key => $value) : ?>
                                <input type="hidden" name="price" id="" value="<?= $value->don_gia ?>">
                                <?= number_format($value->don_gia, 0, ",", ".") ?><sup>đ</sup>
                            <?php endforeach ?>
                        </strong>
                    </div>

                    <div class="detail-info">
                        <ul>
                            <li>
                                <p>
                                    Asus ROG Phone 5: Được tạo ra để chiến thắng các giới hạn
                                </p>
                            </li>

                            <li>
                                <p>Sở hữu vi xử lý Snapdragon 888 mạnh mẽ nhất</p>
                            </li>

                            <li>
                                <p>Trải nghiệm chạm vuốt tuyệt hảo với màn tần số 144Hz, độ trễ cực thấp</p>
                            </li>

                            <li>
                                <p>Gaming say đắm với hệ thống âm thanh GameFX và tản nhiệt CoolMate 5 thế hệ mới</p>
                            </li>

                            <li>
                                <p>Thời lượng pin khủng lên đến 6000mAh, hỗ trợ sạc nhanh 65W</p>
                            </li>
                        </ul>
                    </div>

                    <div class="quantity">
                        Số lượng:
                        <input type="number" name="quantity" value="1" step="1" min="1">
                    </div>

                    <div class="buy">
                        <button name="btn-add" type="submit" class="buy-now">Mua ngay</button>
                        <button class="installment">Trả góp</button>
                    </div>
                </form>
            <?php } ?>
        </div>

        <div class="describe" style="clear: both;">
            <h2>Mô tả sản phẩm</h2>
            <div>
                <p>
                    <?= $product[0]->mo_ta ?>
                </p>
            </div>
        </div>

        <div class="related_products">
                <h2>Sản phẩm liên quan</h2>

                <ul>
                    <?php foreach ($related_product as $key => $value) { ?>
                        <li>
                            <a href="detail_product.php?id_product=<?= $value->id ?>&id_cate=<?= $value->id_cate ?>">
                                <div style="height: 25px;"></div>
                                <div class="item-img">
                                    <img src="admin/public/layout/assets/img/<?= $value->hinh ?>" width="180px" alt="">
                                </div>
                                <span>
                                    <h3><?= $value->ten_hh ?></h3>
                                    <strong><?= $value->don_gia ?></strong>
                                </span>
                            </a>
                        </li>
                    <?php } ?>

                </ul>

                <div class="viewAll">
                    <a href="category.php?id_cate=<?= $id_cate ?>">Xem thêm</a>
                </div>

            </div>

        <div class="feedback">
            <form class="cmt-wr" action="" method="POST">
                <h2>
                    Phản hồi
                </h2>

                Nội dung:
                <br>
                <br>
                <textarea name="cmt_content" id="" cols="30" rows="5" placeholder="Để lại bình luận của bạn..."></textarea>
                <button type="submit" name="btn_cmt">Gửi phản hồi</button>
                <?php if (isset($err['login']) || isset($err['cmt_content'])){?>
                    <span style="color: red; margin-left: 5px">
                        <?php if (isset($err['login'])) { ?>
                            <?= $err['login'] ?>
                        <?php } else { ?>
                            <?= $err['cmt_content'] ?>
                        <?php } ?>
                    </span>
                <?php } ?>
            </form>

            <hr>

            <?php foreach ($cmt_product as $key => $value) : ?>

                <div class="cmt-cus">
                    <div class="customer-info">
                        <div class="customer-img">
                            <img src="admin/public/layout/assets/img/<?= $value->hinh ?>" alt="" width="25px">
                        </div>

                        <strong style="margin-left: 10px;">
                            <?= $value->full_name ?>
                        </strong>
                    </div>

                    <div class="question">
                        <?= $value->noi_dung ?>

                    </div>

                    <div class="action">
                        <a href="">Trả lời</a>

                        <span><?= $value->ngay_bl ?></span>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
    </div>
</main>