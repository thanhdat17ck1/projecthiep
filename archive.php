<?php 
    get_header('sub');
?>

<main class="p-search">
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Tin tức</h2>
            </div>
        </div>
    </div>
    <div class="l-container">
        <div class="p-search__left">
            <form action="" class="c-form-search">
                <input type="text" placeholder="Search post" class="search">
                <button type="submit"><img
                        src="<?php bloginfo('stylesheet_directory'); ?>\assets\img\icon-search.svg"" width=" 15"
                        alt="#"></button>
            </form>
            <div class="p-search__left__content">
                <!-- <p class="results">About 25,270,000,000 Results</p> -->
                <div class="c-news">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="c-news__box">
                        <div class="c-news__item">
                            <a href="<?php echo get_permalink(); ?>" class="c-news__img">
                                <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                            } else { ?>
                                <img src="https://placehold.jp/240x176.png" alt="<?php the_title(); ?>">
                                <?php } ?>
                            </a>
                            <div class="c-news__info">
                                <span>SCAM</span>
                                <a class="link" href="<?php echo get_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                                <p><?php echo get_field( "description" ); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php 
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => '<span class="prev-page">«</span>',
                    'next_text' => '<span class="next-page">»</span>',
                    'screen_reader_text' => ' ',
                    'before_page_number' => '',
                ));
                ?>
            </div>
        </div>
        <div class="p-search__right">
            <?php include( get_template_directory() . '/includes/sidebar.php' ); ?>
        </div>
    </div>
</main>


<?php
    get_footer();
?>