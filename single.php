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
            <?php include( get_template_directory() . '/includes/sidebar.php' ); ?>
        </div>
    </div>
</main>


<?php
    get_footer();
?>