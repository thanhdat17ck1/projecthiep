<?php
get_header('sub');
?>

<main class="p-search">
    <div id="page-banner-program" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2><?php single_cat_title(); ?></h2>
            </div>
        </div>
    </div>
    <div class="c-breadcrumb l-container">
        <ul>
            <li><a href="<?php echo home_url(); ?>" class="home"><i class="fa-solid fa-house"></i>Trang chủ</a></li>
            <span>></span>
            <li>Phân tích kỹ thuật</li>
        </ul>
    </div>
    <div class="promotions l-container">
        <div class="p-search__left">
            <section class="category-post">
                <!-- Get category -->
                <!-- Get post News Query -->
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=kien-thuc&cat=20'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <article>
                    <a href="<?php echo get_permalink(); ?>" class="image">
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <div class="description">
                        <h5>
                            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                        </h5>
                        <div class="short-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>
                <?php endwhile; wp_reset_postdata(); ?>
                <!-- Get post News Query -->
                <!-- Get category -->


            </section>
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