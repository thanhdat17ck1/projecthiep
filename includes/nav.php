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
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <?php if ( is_home() ) : ?>
                <li class="nav-item active">
                    <?php else: ?>
                <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link" href="<?php echo home_url(); ?>">
                        Trang chủ
                    </a>
                </li>



                <?php if ( is_category( 'khoa-hoc' )
                || is_category( 'kien-thuc-can-ban' ) 
                || is_category( 'kien-thuc-dau-tu' ) 
                || is_category( 'phan-tich-ky-thuat' ))
                : ?>
                <li class="nav-item dropdown active">
                    <?php else: ?>
                <li class="nav-item dropdown">
                    <?php endif; ?>
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Kiến thức <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo home_url('/category/khoa-hoc'); ?>">Khóa học</a>
                        <a class="dropdown-item" href="<?php echo home_url('/category/kien-thuc-can-ban'); ?>">Kiến thức
                            căn
                            bản</a>
                        <a class="dropdown-item" href="<?php echo home_url('/category/kien-thuc-dau-tu'); ?>">Kiến thức
                            đầu
                            tư</a>
                        <a class="dropdown-item" href="<?php echo home_url('/category/phan-tich-ky-thuat'); ?>">Phân
                            tích kỹ
                            thuật</a>
                    </div>
                </li>
                <?php global $wp;
                $current_slug = $wp->request; 
                ?>
                <?php if(is_archive('tin-tuc') && ($current_slug == "tin-tuc")): ?>
                <li class="nav-item active">
                    <?php else: ?>
                <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link" href="<?php echo home_url('tin-tuc'); ?>">
                        Tin tức
                    </a>
                </li>

                <?php if(is_page('chuong-trinh')): ?>
                <li class="nav-item active">
                    <?php else: ?>
                <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link" href="<?php echo home_url('chuong-trinh'); ?>">
                        Chương trình
                    </a>
                </li>

                <!-- <?php if(is_page('coppy-trade')): ?>
                <li class="nav-item active">
                    <?php else: ?>
                <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link" href="<?php echo home_url('ve-chung-toi'); ?>">
                        Coppy trade
                    </a>
                </li> -->

                <?php if(is_page('ve-chung-toi')): ?>
                <li class="nav-item active">
                    <?php else: ?>
                <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link" href="<?php echo home_url('ve-chung-toi'); ?>">
                        Về chung tôi
                    </a>
                </li>
            </ul>
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