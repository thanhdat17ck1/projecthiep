<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-menu"></span>
                <span class="icon-menu"></span>
                <span class="icon-menu"></span>
            </button>
            <a href="<?php echo home_url(); ?>" class="navbar-brand"><img
                    src="<?php bloginfo('stylesheet_directory'); ?>\assets\img\logo.svg" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
            <?php wp_nav_menu( 
                array( 
                    'theme_location' => 'header-main', 
                    'container' => 'false', 
                    'menu_id' => 'header-menu', 
                    'menu_class' => 'header-menu',
                    'sub_menu' => true,
                    'show_parent' => true, 
                    'direct_parent' => true
                ) 
            ); ?>
        </div>
    </div>

    <ul class="mobile-menu">
        <li>
            <a href="#">
                Trang chủ
            </a>
        </li>
        <li>
            <a href="about.html">Kiến thức</a>
        </li>
        <li>
            <a class="active" href="#">
                Speakers
            </a>
            <ul class="dropdown">
                <li>
                    <a class="active" href="speakers.html">Speakers</a>
                </li>
                <li>
                    <a href="schedule.html">Schedule</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                Pages
            </a>
            <ul class="dropdown">
                <li>
                    <a href="about.html">About Us</a>
                </li>
                <li>
                    <a href="gallery.html">Gallery</a>
                </li>
                <li>
                    <a href="pricing.html">Pricing Tables</a>
                </li>
                <li>
                    <a href="speakers.html">Speakers</a>
                </li>
                <li>
                    <a href="404.html">404</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                Sponsors
            </a>
            <ul class="dropdown">
                <li>
                    <a href="sponsors.html">Sponsors</a>
                </li>
                <li>
                    <a href="testimonial.html">Testimonial</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="about.html">
                Blog
            </a>
            <ul class="dropdown">
                <li>
                    <a href="blog.html">Blog Page</a>
                </li>
                <li>
                    <a href="blog-single.html">Blog Single Page</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Contact Us</a>
        </li>
    </ul>

</nav>