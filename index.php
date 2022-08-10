<?php 
    get_header();
?>
<main>

    <section class="top-news">
        <h3 class="u-center">TIN TỨC MỚI NHẤT</h3>
        <div class="c-post">
            <?php
            $the_query = new WP_Query(array(
                'post_type'			=> 'post',
                'posts_per_page'	=> 9,
            ));
            if( $the_query->have_posts() ): 
                while( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="c-post__item">
                <a href="<?php echo get_permalink(); ?>" class="c-post__img">
                    <?php the_post_thumbnail(); ?>
                </a>
                <div class="c-post__info">
                    <span>Scam</span>
                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                </div>
            </div>

            <?php endwhile;
            endif;
            ?>
        </div>
        <div class="u-center">
            <a class="c-btn" href="<?php echo home_url('tin-tuc'); ?>">Xem tất cả</a>
        </div>
    </section>

</main>
<?php
    get_footer();
?>