<?php 
    get_header('sub');
?>

<main class="p-search">
    <div id="page-banner-program" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Chương trình</h2>
            </div>
        </div>
    </div>
    <div class="c-form">
        <?php echo do_shortcode( '[mwform_formkey key="83"]' ); ?>
    </div>
</main>


<?php
    get_footer();
?>