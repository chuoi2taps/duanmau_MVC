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
            Biểu đồ thống kê sản phẩm theo danh mục
        </div>

        <div id="piechart"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
            // Load google charts
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng sản phẩm'],
                    <?php
                    $total_cate = count($thongke_product);
                    foreach ($thongke_product as $key => $value) {
                        $stt == $total_cate ? $dauphay = "" : $dauphay = ",";

                        echo "['$value->ten_loai', $value->total_product]" . $dauphay;

                        $stt++;
                    }
                    ?>
                ]);

                // Optional; add a title and set the width and height of the chart
                var options = {
                    'title': '',
                    'width': 660,
                    'height': 480
                };

                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
        </script>

        <div class="mb10">
            <a href="thongke_hh.php"><button type="button">Bảng thống kê</button></a>
        </div>

    </div>
</main>