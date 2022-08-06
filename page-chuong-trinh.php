<?php 
    get_header('sub');
?>

<main class="p-search">
    <div id="page-banner-program" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Chương trình</h2>
            </div>
        </div>
    </div>
    <div class="promotions l-container">
        <ol class="promotions__list">
            <li class="promotions__item">
                <div class="promotions__info">
                    <h3>Tham gia ZFX Cashback 6$ – Nhân đôi nguồn tiền</h3>
                    <p>Tham gia ngay chương trình HOÀN TIỀN CÙNG ZFX và nhận đến 6 USD/lot nếu bạn đang giao dịch Tiền
                        Tệ, Vàng, Bạc, Dầu và Chỉ số.</p>
                    <a href="<?php echo home_url('tham-gia'); ?>">THAM GIA NGAY</a>
                </div>
                <div class="promotions__img">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>\/assets/img/chuong-trinh/img.png" alt="#">
                </div>
            </li>
        </ol>
    </div>
</main>


<?php
    get_footer();
?>