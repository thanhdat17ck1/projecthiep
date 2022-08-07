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
            <li>Kiến thức đầu tư</li>
        </ul>
    </div>
    <div class="promotions l-container">
        <div class="p-search__left">
            <section class="category-post">
                <!-- Get category -->
                <!-- Get post News Query -->
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=kien-thuc&cat=19'); ?>
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
            <?php include( get_template_directory() . '/includes/sidebar.php' ); ?>
        </div>
    </div>
</main>


<?php
get_footer();
?>