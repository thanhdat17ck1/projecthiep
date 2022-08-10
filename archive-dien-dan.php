<?php
get_header('sub');
?>


<div id="page-banner-program" class="page-banner">
    <div class="page-banner-title">
        <div class="text-center">
            <h2>Diễn đàn</h2>
        </div>
    </div>
</div>

<?php include( get_template_directory() . '/includes/breadcrumb.php' ); ?>
<div class="promotions l-container">
    <div class="c-post">
        <div class="c-post__item">
            <a href="<?php echo home_url('/category/chuyen-vang'); ?>" class="c-post__img">
                <img src="https://placehold.jp/450x270.png" alt="chuyên vàng">
                <button>Xem chi tiết</button>
            </a>
            <div class="c-post__info">
                <a href="<?php echo home_url('/category/chuyen-vang'); ?>">Chuyên vàng</a>
            </div>
        </div>
        <div class="c-post__item">
            <a href="<?php echo home_url('/category/chuyen-forex'); ?>" class="c-post__img">
                <img src="https://placehold.jp/450x270.png" alt="chuyên forex">
                <button>Xem chi tiết</button>
            </a>
            <div class="c-post__info">
                <a href="<?php echo home_url('/category/chuyen-forex'); ?>">chuyên forex</a>
            </div>
        </div>
        <div class="c-post__item">
            <a href="<?php echo home_url('/category/chuyen-crypto'); ?>" class="c-post__img">
                <img src="https://placehold.jp/450x270.png" alt="chuyên Crypto">
                <button>Xem chi tiết</button>
            </a>
            <div class="c-post__info">
                <a href="<?php echo home_url('/category/chuyen-crypto'); ?>">chuyên Crypto</a>
            </div>
        </div>
        <div class="c-post__item">
            <a href="<?php echo home_url('/category/chuyen-co-phieu'); ?>" class="c-post__img">
                <img src="https://placehold.jp/450x270.png" alt="chuyên cổ phiếu">
                <button>Xem chi tiết</button>
            </a>
            <div class="c-post__info">
                <a href="<?php echo home_url('/category/chuyen-co-phieu'); ?>">chuyên cổ phiếu</a>
            </div>
        </div>
    </div>
</div>
</main>


<?php
get_footer();
?>