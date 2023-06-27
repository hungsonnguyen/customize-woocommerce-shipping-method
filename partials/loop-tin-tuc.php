<?php 
    get_header(); 
    $queried_object = get_queried_object(); 
    global $post;
?>
<div class="page-blogs page-abouts">
    <div class="page-content page-blog">
        <div class="container">
            <div class="title">
                <h2>TIN TỨC - BÀI VIẾT</h2>
                <p>Cùng Điều Hòa Miền Trung cập nhật tin tức và kiến thức mới nhé!</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="blog-list list-unstyled">

                        <?php
                        $args = array(
                            'post_status'     => 'publish', 
                            'post_type'       => 'post', 
                            'posts_per_paged' => 6, 
                            // 'category_name'   => 'blog',
                            'paged'           => get_query_var('paged')
                        );
                        ?>
                        <?php $getposts = new WP_query($args); ?>
                        <?php if ($getposts->have_posts()) : ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <li class="blog-item">
                            <a href="<?php the_permalink();?>">
                                <img class="blog-item__img" src="<?php the_post_thumbnail_url('full')?>" alt="">
                                <div class="blog-item__info">
                                    <p class="mb-1">Daily Blog</p>
                                    <h3><?php the_title();?></h3>
                                    <span></span>
                                    <?php the_excerpt();?>
                                    <button>Xem Chi Tiết ></button>
                                </div>
                            </a>
                        </li>
                        <?php endwhile;wp_reset_postdata(); ?>
                        <?php endif; ?>
                        <?php if (function_exists('prw_wp_corenavi')) prw_wp_corenavi($getposts, $paged); ?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<?php get_footer(); ?>