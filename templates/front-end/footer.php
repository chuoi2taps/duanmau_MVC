<footer style="clear: both; margin-top: 50px;">
        <div class="footer-main">
            <div class="container">
                <div class="footer-top">
                    <ul class="list-footer">
                        <li>
                            <a href="">
                                <img src="public/layout/assets/img/vanchuyen.png" alt="">
                                <span>Vận chuyển toàn quốc</span>
                            </a>
                        </li>
    
                        <li>
                            <a href="">
                                <img src="public/layout/assets/img/1doi1.png" alt="">
                                <span>1 đổi 1 trong 30 ngày</span>
                            </a>
                        </li>
    
                        <li>
                            <a href="">
                                <img src="public/layout/assets/img/baogia.png" alt="">
                                <span>Giá chuẩn, không sốc giá</span>
                            </a>
                        </li>
    
                        <li>
                            <a href="">
                                <img src="public/layout/assets/img/baohiem.png" alt="">
                                <span>Bảo hành máy 12 tháng</span>
                            </a>
                        </li>
    
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-mid">
            <div class="container">
                <div class="content">
                    <div>
                        <h2>Chăm sóc khách hàng</h2>
                        <a href="">Chính sách giao hàng tận nơi</a>
                        <a href="">Hướng dẫn mua trả góp</a>
                        <a href="">Hướng dẫn đặt hàng</a>
                        <a href="">Hướng dẫn thanh toán</a>
                    </div>
    
                    <div>
                        <h2>Về FourSmart</h2>
                        <a href="">Chính sách giao hàng tận nơi</a>
                        <a href="">Hướng dẫn mua trả góp</a>
                        <a href="">Hướng dẫn đặt hàng</a>
                        <a href="">Hướng dẫn thanh toán</a>
                    </div>

                    <div>
                        <h2>Liên hệ nhanh</h2>
                        <a href="">- Địa chỉ: Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</a>
                        <a href="">Hotline: 0334590019</a>
                    </div>
    
                    <div>
                        <h2>HỖ TRỢ THANH TOÁN</h2>
                        <a href="">Tiền mặt</a>
                        <a href="">Chuyển khoản</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="store">
                    <hr>

                    <p>Tùng và Vinh</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop()) {
                    $('nav').addClass('unshadow');
                } else {
                    $('nav').removeClass('unshadow');
                }
            })
        })

        // document.location.reload(true);

        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });
 
        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>