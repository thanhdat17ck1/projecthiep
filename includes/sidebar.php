<div class="c-sidebar">
    <h3>BÀI VIẾT MỚI NHẤT</h3>

    <div class="list-topic">

        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=7&post_type=post'); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <div class="list-topic__item">
            <a href="<?php the_permalink();?>" class="list-topic__img">
                <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                        } else { ?>
                <img src="https://placehold.jp/80x80.png" alt="<?php the_title(); ?>">
                <?php } ?>
            </a>
            <div class="list-topic__info">
                <span>SCAM</span>
                <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <!-- <h3>Popular tags</h3>
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
    </div> -->
</div>