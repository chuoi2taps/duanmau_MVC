<main>

    <div class="banner">
        <div class="container">
            <img src="admin/public/layout/assets/img/flash-sale-trong-ngay-pc-banner-22.jpg" alt="" width="100%">
        </div>
    </div>

    <div class="container">
        <div class="head">
            <h1>
                Sản phẩm
            </h1>
        </div>

        <div class="content-main">
            <div class="container">
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

                        <div class="page-number">
                            <ul>
                                <?php if ($current_page > 1) { ?>
                                    <li>
                                        <a href="?perpage=<?= $limit ?>&page=<?= $current_page - 1 ?>"><</a>
                                    </li>
                                <?php } ?>

                                <?php for($i = 1; $i <= $total_pages; $i++): ?>
                                    <?php if ($current_page != $i ) { ?>
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

                    <div class="category">
                        <!---->
                        <div class="row mb">
                            <div class="boxtitle">DANH MỤC</div>
                            <div class="boxcontent2 menudoc">
                                <ul>
                                    <?php foreach($categories as $key=>$value) : ?>
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
                            <div class="boxcontent row bg-w">
                                <?php foreach ($products_top_10 as $key=>$value) : ?>
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
    </div>
</main>