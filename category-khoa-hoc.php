<?php 
    get_header('sub');
?>
<main class="p-search">
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>khóa học</h2>
            </div>
        </div>
    </div>
    <div class="c-breadcrumb l-container">
        <ul>
            <li><a href="<?php echo home_url(); ?>" class="home"><i class="fa-solid fa-house"></i>Trang chủ</a></li>
            <span>></span>
            <li>Khóa học</li>
        </ul>
    </div>
    <section class="">
        <div class="c-heading">
            <h2>Danh sách khóa học</h2>
        </div>
        <div class="c-post">
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=kien-thuc&cat=17'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="c-post__item">
                <a href="<?php echo get_permalink(); ?>" class="c-post__img">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                        } else { ?>
                    <img src="https://placehold.jp/450x270.png" alt="<?php the_title(); ?>">
                    <?php } ?>
                    <button>Xem khóa học</button>
                </a>
                <div class="c-post__info">
                    <span>Scam</span>
                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </section>
</main>
<?php
    get_footer();
?>