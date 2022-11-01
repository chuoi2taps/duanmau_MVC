<main>
    <div class="banner">
        <div class="container">
            <div class="slider__">
                <div class="slider">
                    <a href="">
                        <img src="admin/public/layout/assets/img/flash-sale-trong-ngay-pc-banner-22.jpg" alt="">
                    </a>
                </div>

                <div class="side-banner">
                    <div>
                        <img width="100%" height="100%" src="admin/public/layout/assets/img/flash-sale-trong-ngay-pc-banner-22.jpg" alt="">
                    </div>
                    <div>
                        <img width="100%" height="100%" src="admin/public/layout/assets/img/flash-sale-trong-ngay-pc-banner-22.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-main">
        <div class="container">

            <div class="special ">
                <h2>SẢN PHẨM ĐẶC BIỆT</h2>

                <ul>
                    <?php foreach ($product_special as $key => $value) { ?>
                        <li>
                            <a href="detail_product.php?id_product=<?= $value->id ?>&id_cate=<?= $value->id_loai ?>">
                                <div style="height: 25px;"></div>
                                <div class="item-img">
                                    <img src="admin/public/layout/assets/img/<?= $value->hinh ?>" width="180" alt="">
                                </div>
                                <span>
                                    <h3><?= $value->ten_hh ?></h3>
                                    <strong><?= number_format($value->don_gia, 0, ",", ".") ?><sup>đ</sup></strong>
                                </span>
                            </a>
                        </li>
                    <?php } ?>

                </ul>
            </div>

            <div class="flex">
                <div class="product" style="width: 100%;">
                    <div class="list">
                        <?php foreach ($products as $key => $value) : ?>
                            <div class="sp">
                                <a href="detail_product.php?id_product=<?= $value->id ?>&id_cate=<?= $value->id_loai ?>">
                                    <img src="admin/public/layout/assets/img/<?= $value->hinh ?>" alt="" width="180">
                                    <div class="spcontent">
                                        <?= $value->ten_hh ?>
                                        <div class="gia"><?= number_format($value->don_gia, 0, ',', '.') ?><sup>đ</sup></div>
                                    </div>
                                </a>

                            </div>
                        <?php endforeach ?>

                    </div>

                    <div class="viewAll">
                        <a href="products.php" role="button">Xem thêm</a>
                    </div>
                </div>

                <div class="category">
                    <!---->
                    <div class="row mb">
                        <div class="boxtitle">DANH MỤC</div>
                        <div class="boxcontent2 menudoc">
                            <ul>
                                <?php foreach ($categories as $key => $value) : ?>
                                    <li><a href="category.php?id_cate=<?= $value->id_cate ?>"><?= $value->ten_loai ?></a></li>
                                <?php endforeach ?>

                            </ul>
                        </div>
                        <div class="boxfooter">
                            <form action="" class="searbox">
                                <input type="text" placeholder="Tìm kiếm">
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                        <div class="boxcontent row bg-w pt">
                            <?php foreach ($products_top_10 as $key => $value) : ?>
                                <div class="row top10 mb10">
                                    <img src="admin/public/layout/assets/img/<?= $value->hinh ?>" alt="">
                                    <a href="detail_product.php?id_product=<?= $value->id ?>&id_cate=<?= $value->id_loai ?>"><?= $value->ten_hh ?></a>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>
</main>