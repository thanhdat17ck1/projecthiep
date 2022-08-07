<?php 
    get_header('sub');
?>

<main class="p-search p-detail">
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Kiến thức</h2>
            </div>
        </div>
    </div>
    <div class="c-breadcrumb l-container">
        <ul>
            <li><a href="<?php echo home_url(); ?>" class="home"><i class="fa-solid fa-house"></i>Trang chủ</a></li>
            <span>></span>
            <li><a href="<?php echo home_url('tin-tuc'); ?>">Kiến thức</a>
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
            <?php
                $categories = get_the_category($post->ID);
                
                if ($categories) 
                {
                    $category_ids = array();
                    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                    $args=array(
                    'category__in' => $category_ids,
                    'post__not_in' => array($post->ID),
                    'showposts'=> 5, // Số bài viết bạn muốn hiển thị.
                    'caller_get_posts'=>1
                    );
                    $my_query = new wp_query($args);
                    
                    // var_dump($individual_category);
                    if( $my_query->have_posts() ) 
                    {
                        
                        echo '<h3>Bài viết liên quan</h3><ul class="list-news">';
                        while ($my_query->have_posts())
                        {
                            $my_query->the_post();
                            ?>
            <li>
                <div class="new-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(85, 75)); ?></a>
                </div>
                <div class="item-list">
                    <h4><a href="<?php the_permalink() ?>"
                            title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                </div>
            </li>
            <?php
                        }
                        echo '</ul>';
                    }
                }
            ?>
        </div>
        <div class="p-search__right">
            <?php include( get_template_directory() . '/includes/sidebar.php' ); ?>
        </div>
    </div>

</main>


<?php
    get_footer();
?>