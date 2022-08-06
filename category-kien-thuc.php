<?php
    if(isset($_GET['cate'])) {
        $param = $_GET['cate'];
        $tagarray = array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'kien_thuc',
                'field' => 'slug',
                'terms' => $param
            )
        );
        $relate = $param ? $tagarray : '';
    }
?>
<?php get_header('sub'); ?>
<!--▼ Content area ▼-->
<main class="p-construction">
    <div class="l-wrap bread">
        <div class="c-breadcrumb">
            <ol>
                <li>
                    <a href="<?php echo home_url(); ?>">
                        <span>HOME</span>
                    </a>
                </li>
                <li>
                    <p>
                        <span>住まいの実例</span>
                    </p>
                </li>
            </ol>
        </div>
    </div>
    <div class="c-hero1">
        <h2 class="c-ttl2">
            住まいの実例
        </h2>
        <nav>
            <ul>
                <li class="<?php if(!$param){echo 'is-active';}?>"><a href="<?php echo home_url('/works'); ?>">すべて</a>
                </li>
                <?php
                        $cats = get_terms('kien_thuc', array(
                            'hide_empty' => false,
                            'orderby' => 'slug',
                            'order' => 'ASC',
                        ));
                        foreach ($cats as $cat) :
                    ?>
                <li class="<?php echo $cat->slug;
                        if ($param == $cat->slug) {
                            echo ' is-active';
                        } ?>">
                    <a href="<?php echo esc_url(get_home_url()); ?>/works/?cate=<?php echo $cat->slug; ?>"><?php echo $cat->name; ?><?php if($cat->slug !== 'o-hiraya'){?>事例<?php } ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
    <section class="p-construction1">
        <div class="l-wrap">
            <?php
                $current_page = get_query_var('paged') ? get_query_var('paged') : 1;
                parse_str($query_string, $args);
                $args += array(
                    'post_type'      => 'works',
                    'posts_per_page' 		=> 12,
                    'tax_query'		 => $relate,
                    'paged' 		 => $current_page
                );
                $querys = new WP_Query($args);
                if ($querys->have_posts()) :?>
            <div class="c-list5">
                <?php 
                    while($querys->have_posts()):$querys->the_post();
                    $terms = get_the_terms($post->ID,'kien_thuc');
                ?>
                <a href="<?php the_permalink();?>" class="c-list5__item">
                    <div class="c-card1">
                        <div class="c-card1__img">
                            <?php //$image = get_field('works_img'); ?>
                            <?php 
                                $images = get_field('gallery');
                                $image_0 = $images[0]; 
                            ?>
                            <?php if($images){ ?>
                            <img src="<?php echo esc_url($image_0['url']); ?>"
                                alt="<?php echo esc_attr($image_0['alt']); ?>" />
                            <?php }else{ ?>
                            <img src="/assets/img/default.jpg" alt="">
                            <?php } ?>
                        </div>
                        <div class="c-card1__detail">
                            <div class="ttl">
                                <?php foreach ($terms as $term) : ?>
                                <span class="<?php echo $term->slug;?>"><?php echo $term->name; ?></span>
                                <?php endforeach; ?>
                            </div>
                            <p class="c-text2">
                                <?php the_title(); ?>
                            </p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata();?>
                </a>
            </div>
            <?php endif;?>
            <div>
                <?php wp_pagenavi( array( 'query' => $querys));?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
</main>
<!--▲ Content are ▲-->
<?php get_footer(); ?>