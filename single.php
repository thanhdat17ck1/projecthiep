<?php 
    get_header('sub');
?>

<main class="p-search p-detail">
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Tin tức</h2>
            </div>
        </div>
    </div>
    <div class="c-breadcrumb l-container">
        <ul>
            <li><a href="<?php echo home_url(); ?>" class="home"><i class="fa-solid fa-house"></i>Trang chủ</a></li>
            <span>></span>
            <li><a href="<?php echo home_url('tin-tuc'); ?>">Tin tức</a>
            </li>
            <span>></span>
            <li><?= the_title(); ?></li>
        </ul>
    </div>
    <div class="l-container">
        <div class="p-search__left">
            <div class="single-content">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
        </div>
        <div class="p-search__right">
            <div class="c-sidebar">
                <h3>Xem nhiều nhất</h3>

                <div class="list-topic">
                    <div class="list-topic__item">
                        <a href="#" class="list-topic__img">
                            <img src="https://placehold.jp/80x80.png" alt="#">
                        </a>
                        <div class="list-topic__info">
                            <span>SCAM</span>
                            <a href="#">Lorem Ipsum is simply dummy text of the printing</a>
                        </div>
                    </div>
                    <div class="list-topic__item">
                        <a href="#" class="list-topic__img">
                            <img src="https://placehold.jp/80x80.png" alt="#">
                        </a>
                        <div class="list-topic__info">
                            <span>SCAM</span>
                            <a href="#">Lorem Ipsum is simply dummy text of the printing</a>
                        </div>
                    </div>
                    <div class="list-topic__item">
                        <a href="#" class="list-topic__img">
                            <img src="https://placehold.jp/80x80.png" alt="#">
                        </a>
                        <div class="list-topic__info">
                            <span>SCAM</span>
                            <a href="#">Lorem Ipsum is simply dummy text of the printing</a>
                        </div>
                    </div>
                </div>
                <h3>Popular tags</h3>
                <div class="list-tags">
                    <span>Crypto</span>
                    <span>Virtual Land</span>
                    <span>Metaverse</span>
                    <span>NFT Marketplace</span>
                    <span>Token</span>
                    <span>NFTs</span>
                    <span>Bitcoin</span>
                    <span>Arts</span>
                    <span>Wallet</span>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
    get_footer();
?>