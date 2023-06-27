<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php global $product;
  $queried_object = get_queried_object(); 
?>
<main id="main" class="main">
    <section class="slide-banner">
        <div class="owl-carousel owl-load" data-autoheight="false" data-items="1" data-desktop="1"
            data-desktop-small="1" data-tablet="1" data-mobile="1" data-nav="false" data-margintb="0" data-dots="false"
            data-loop="true" data-autoplay="true" data-speed="1500" data-autotime="6000">
            <div class="owl-carousel-item">
                <img src="<?php bloginfo('template_url');?>/assets/images/Property 1=Variant4.jpg" alt="banner" />
            </div>
            <div class="owl-carousel-item">
                <img src="<?php bloginfo('template_url');?>/assets/images/Property 1=Variant3.jpg" alt="banner" />
            </div>
        </div>
    </section>
    <section class="support">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="support-box  d-flex align-items-center">
                        <img src="<?php bloginfo('template_url');?>/assets/images/box1.png" alt="" srcset="">
                        <div class="support-box__txt ps-2">
                            <p class="fw-bold mb-1">Sản phẩm chính hãng</p>
                            <p>Cam kết sản phẩm được phân phối chính hãng từ nhà cung cấp</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="support-box  d-flex align-items-center">
                        <img src="<?php bloginfo('template_url');?>/assets/images/box2.png" alt="" srcset="">
                        <div class="support-box__txt ps-2">
                            <p class="fw-bold mb-1">Giao hàng toàn quốc</p>
                            <p>Nhanh chóng trên phạm vi toàn quốc với chất lượng tốt nhất</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="support-box  d-flex align-items-center">
                        <img src="<?php bloginfo('template_url');?>/assets/images/box3.png" alt="" srcset="">
                        <div class="support-box__txt ps-2">
                            <p class="fw-bold mb-1">Hỗ trợ lắp đặt</p>
                            <p>Hỗ trợ việc lắp đặt sản phẩm 1 cách thuận tiện và nhanh chóng</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="support-box  d-flex align-items-center">
                        <img src="<?php bloginfo('template_url');?>/assets/images/box4.png" alt="" srcset="">
                        <div class="support-box__txt ps-2">
                            <p class="fw-bold mb-1">Bảo hành chính hãng</p>
                            <p>Bảo hành sản phẩm theo đúng yêu cầu và cam kết bảo hành </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="category">
        <div class="container">
            <div class="row d-none d-lg-flex">
                <div class="col-lg-4">
                    <div class="category__box">
                        <h3 class="category__box--title">Khám phá thêm về các dòng sản phẩm khác</h3>
                        <p class="category__box--docs">Hãy là người tiêu dùng thông thái và lựa chọn cho mình những sản phẩm chất lượng nhất cho mái ấm của bạn</p>
                        <a href="<?php echo get_home_url()?>/cua-hang" class="category__box--btn">Tìm hiểu thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                        <?php
                        $terms = get_terms( array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            ) );
                            $term = get_term( 50 );
                        ?>
                        <a href="<?php echo get_home_url()?>/danh-muc-san-pham/cac-san-pham-dieu-hoa/" class="img__box">
                            <?php
                                // echo '<h5 class="image__box--image text-center">'.$term->name.'</h5>';
                                $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                                $image = wp_get_attachment_url( $thumbnail_id );
                                echo '<img class="images-3"  src="'.$image.'"/>';
                            ?>
                        </a>
                    <?php
                        $terms = get_terms( array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                        ) );
                        $term = get_term( 51 );
                    ?>
                    <a href="<?php echo get_home_url()?>/danh-muc-san-pham/may-giat-may-say/" class="img__box">
                        <?php
                            // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                            $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                            $image = wp_get_attachment_url( $thumbnail_id );
                            echo '<img class="images-4"  src="'.$image.'"/>';
                        ?>
                    </a>
                    <?php
                        $terms = get_terms( array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                        ) );
                        $term = get_term( 52 );
                    ?>
                    <a href="<?php echo get_home_url()?>/danh-muc-san-pham/do-gia-dung-bep-lo-nuong-bep-tu-may-hut-bui/" class="img__box">
                        <?php
                            // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                            $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                            $image = wp_get_attachment_url( $thumbnail_id );
                            echo '<img class="images-5"  src="'.$image.'"/>';
                        ?>
                    </a>
                </div>
                <div class="col-lg-4">
                    <?php
                        $terms = get_terms( array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                        ) );
                        $term = get_term( 54 );
                    ?>
                    <a href="<?php echo get_home_url()?>/danh-muc-san-pham/san-pham-cham-soc-suc-khoe-may-loc-khong-khi-hut-am/" class="img__box">
                        <?php
                            // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                            $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                            $image = wp_get_attachment_url( $thumbnail_id );
                            echo '<img class="images-6"  src="'.$image.'"/>';
                        ?>
                    </a>
                    <?php
                    $terms = get_terms( array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                        ) );
                        $term = get_term( 53 );
                    ?>
                    <a href="<?php echo get_home_url()?>/danh-muc-san-pham/tu-dong-tu-da-tu-sieu-thi-tu-mat-tu-ruou-vang/" class="img__box">
                        <?php
                            // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                            $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                            $image = wp_get_attachment_url( $thumbnail_id );
                            echo '<img class="images-6"  src="'.$image.'"/>';
                        ?>
                    </a>
                    <?php
                        $terms = get_terms( array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                        ) );
                        $term = get_term(55);
                    ?>
                    <a href="<?php echo get_home_url()?>/danh-muc-san-pham/cac-dong-san-pham-khac/" class="img__box">
                        <?php
                            // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                            $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                            $image = wp_get_attachment_url( $thumbnail_id );
                            echo '<img class="images-1" src="'.$image.'"/>';
                        ?>
                    </a>
                </div>
                <div class="col-lg-4">
                     <?php
                     $terms = get_terms( array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                        ) );
                        $term = get_term( 57 );
                     ?>
                    <a href="<?php echo get_home_url()?>/danh-muc-san-pham/binh-nuoc-nong-tam-binh-nuoc-nong-lanh-uong/" class="img__box">
                        <?php
                        // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                        $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                        echo '<img class="images-0"  src="'.$image.'"/>';
                        ?>
                    </a>
                    <?php
                        $terms = get_terms( array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                        ) );
                        $term = get_term(56);
                    ?>
                    <a href="<?php echo get_home_url()?>/danh-muc-san-pham/cac-loai-quat-quat-chan-gio-quat-cay/" class="img__box">
                        <?php
                            // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                            $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                            $image = wp_get_attachment_url( $thumbnail_id );
                            echo '<img class="images-2"  src="'.$image.'"/>';
                        ?>
                    </a>
                 </div>
            </div>
            <div class="row d-block d-lg-none d-xl-none">
                    <div class="category__box">
                        <h3 class="category__box--title">Khám phá thêm về các dòng sản phẩm khác</h3>
                        <p class="category__box--docs">Hãy là người tiêu dùng thông thái và lựa chọn cho mình những sản phẩm chất lượng nhất cho mái ấm của bạn</p>
                        <a href="#" class="category__box--btn">Tìm hiểu thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                <div class="owl-carousel owl-load " data-autoheight="false" data-desktop="1"
                data-desktop-small="1" data-tablet="1" data-mobile="1" data-nav="false" data-margintb="20" data-dots="false"
                data-loop="true" data-autoplay="true" data-speed="1500" data-autotime="6000">
                    <div class="owl-carousel-item">
                        <?php
                        $terms = get_terms( array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            ) );
                            $term = get_term( 50 );
                        ?>
                        <a href="<?php echo get_home_url()?>/danh-muc-san-pham/cac-san-pham-dieu-hoa/" class="img__box">
                            <?php
                                // echo '<h5 class="image__box--image text-center">'.$term->name.'</h5>';
                                $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                                $image = wp_get_attachment_url( $thumbnail_id );
                                echo '<img class="images-3"  src="'.$image.'"/>';
                            ?>
                        </a>
                    </div>
                    <div class="owl-carousel-item">
                        <?php
                            $terms = get_terms( array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            ) );
                            $term = get_term( 51 );
                        ?>
                        <a href="<?php echo get_home_url()?>/danh-muc-san-pham/may-giat-may-say/" class="img__box">
                            <?php
                                // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                                $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                                $image = wp_get_attachment_url( $thumbnail_id );
                                echo '<img class="images-4"  src="'.$image.'"/>';
                            ?>
                        </a>
                    </div>
                    <div class="owl-carousel-item">
                        <?php
                            $terms = get_terms( array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            ) );
                            $term = get_term( 52 );
                        ?>
                        <a href="<?php echo get_home_url()?>/danh-muc-san-pham/do-gia-dung-bep-lo-nuong-bep-tu-may-hut-bui/" class="img__box">
                            <?php
                                // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                                $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                                $image = wp_get_attachment_url( $thumbnail_id );
                                echo '<img class="images-5"  src="'.$image.'"/>';
                            ?>
                        </a>
                    </div>
                    <div class="owl-carousel-item">
                        <?php
                            $terms = get_terms( array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            ) );
                            $term = get_term( 54 );
                        ?>
                        <a href="<?php echo get_home_url()?>/danh-muc-san-pham/san-pham-cham-soc-suc-khoe-may-loc-khong-khi-hut-am/" class="img__box">
                            <?php
                                // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                                $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                                $image = wp_get_attachment_url( $thumbnail_id );
                                echo '<img class="images-6"  src="'.$image.'"/>';
                            ?>
                        </a>
                    </div>
                    <div class="owl-carousel-item">
                        <?php
                        $terms = get_terms( array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            ) );
                            $term = get_term( 53 );
                        ?>
                        <a href="<?php echo get_home_url()?>/danh-muc-san-pham/tu-dong-tu-da-tu-sieu-thi-tu-mat-tu-ruou-vang/" class="img__box">
                            <?php
                                // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                                $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                                $image = wp_get_attachment_url( $thumbnail_id );
                                echo '<img class="images-6"  src="'.$image.'"/>';
                            ?>
                        </a>
                    </div>
                    <div class="owl-carousel-item">
                        <?php
                            $terms = get_terms( array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            ) );
                            $term = get_term(55);
                        ?>
                        <a href="<?php echo get_home_url()?>/danh-muc-san-pham/cac-dong-san-pham-khac/" class="img__box">
                            <?php
                                // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                                $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                                $image = wp_get_attachment_url( $thumbnail_id );
                                echo '<img class="images-1" src="'.$image.'"/>';
                            ?>
                        </a>
                    </div>
                    <div class="owl-carousel-item">
                        <?php
                        $terms = get_terms( array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            ) );
                            $term = get_term( 57 );
                        ?>
                        <a href="<?php echo get_home_url()?>/danh-muc-san-pham/binh-nuoc-nong-tam-binh-nuoc-nong-lanh-uong/" class="img__box">
                            <?php
                            // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                            $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                            $image = wp_get_attachment_url( $thumbnail_id );
                            echo '<img class="images-0"  src="'.$image.'"/>';
                            ?>
                        </a>
                    </div>
                    <div class="owl-carousel-item">
                        <?php
                            $terms = get_terms( array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            ) );
                            $term = get_term(56);
                        ?>
                        <a href="<?php echo get_home_url()?>/danh-muc-san-pham/cac-loai-quat-quat-chan-gio-quat-cay/" class="img__box">
                            <?php
                                // echo '<h5 href="#" class="image__box--image text-center">'.$term->name.'</h5>';
                                $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true );
                                $image = wp_get_attachment_url( $thumbnail_id );
                                echo '<img class="images-2"  src="'.$image.'"/>';
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>        
    </section>
    <section class="video position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <video controls muted autoplay loop playsinline>
                        <source src="<?php the_field('video')?>" type="video/mp4">
                    </video>
                    <img class="position-absolute"
                        src="<?php bloginfo('template_directory')?>/assets/images/chungchi.png" alt="">

                </div>
            </div>
        </div>
    </section>
    <section class="blog-home">
        <div class="container">
            <div class="row">
                <div class="project-outing__title d-flex justify-content-between">
                    <h4 class="mb-0">TIN TỨC - BÀI VIẾT</h4>
                    <a href="<?php echo get_home_url();?>/tin-tuc" class="text-white">Xem thêm <i
                            class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="row blog-list">
                <?php
                $args = array(
                    'post_status'     => 'publish', 
                    'post_type'       => 'post', 
                    'posts_per_page' => 4, 
                    'paged'           => get_query_var('paged')
                );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php if ($getposts->have_posts()) : ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="blog-item ">
                        <a href="<?php the_permalink();?>">
                            <img class="blog-item__img" src="<?php the_post_thumbnail_url('full')?>" alt="">
                            <div class="blog-item__info">
                                <h3><?php the_title();?></h3>
                                <span></span>
                               <?php the_excerpt();?>
                                <a>Xem Chi Tiết ></a>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endwhile;wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="service__box d-flex">
                        <img class="service__box--img" src="<?php bloginfo('template_directory')?>/assets/images/baohanh.png" alt="">
                        <p>Bán hàng (08h00 - 21h30)<br>0905.293.668</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="service__box d-flex">
                        <img class="service__box--img" src="<?php bloginfo('template_directory')?>/assets/images/suachua.png" alt="">
                        <p>Bảo hành sữa chữa (08h00 - 18h00)<br>0905.293.668</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="service__box d-flex">
                        <img class="service__box--img" src="<?php bloginfo('template_directory')?>/assets/images/tuvan.png" alt="">
                        <p>Góp ý, khiếu nại<br>0905.293.668</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>