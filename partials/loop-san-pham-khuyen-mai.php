<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header pb-3">
    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
    <!-- <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1> -->
    <?php endif; ?>

    <?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<div class="row">
    <div class="col-md-4 col-lg-3 ">
        <div class="header-arc-pr d-block d-md-none d-flex flex-column justify-content-between mb-2">
            <h2 class="mb-3">Danh mục sản phẩm</h2>
            <?php do_action( 'boloc' ); ?>
        </div>
        <?php //dynamic_sidebar('shop-sidebar'); ?>
        <?php get_template_part('partials/loop','sidebar-pr'); ?>
    </div>
    <div class="col-md-8 col-lg-9 ">
        <!-- custom -->
        <div class="feature-product products mt-0">
            <div class="d-none d-md-block">
                <div class="header-arc-pr d-flex justify-content-between mb-2 mb-lg-4 ">
                    <h2>Sản phẩm Khuyến mãi</h2>
                    <div>
                        <?php do_action( 'boloc' ); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $args = array( 
                    'post_type' => 'product',
                    'posts_per_page' => 10, 
                    'meta_query'     => array(
                        'relation' => 'OR',
                        array(
                            'key'           => '_sale_price',
                            'value'         => 0,
                            'compare'       => '>',
                            'type'          => 'numeric'
                        )
                    )
                ); ?>
                <?php $getposts = new WP_query( $args);?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php global $product; ?>
                <div class="col-lg-4 col-6 d_flex mb-3 product">
                    <div class="product-item position-relative">
                        <div class="img ">
                            <a href="<?php the_permalink() ;?>">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt=" ">
                            </a>
                        </div>
                        <?php 
							foreach($product_cats_ids as $product_cats_id){
								if($product_cats_id == 43){
									echo ' <img class="gif-new" src="'. get_field('new',51) .'" />';
								}
							}
							if($product->featured == 'yes'){
								echo ' <img class="gif-new" src="'. get_field('hot',51) .'" />';
							}
							?>
                        <?php do_action('gif_sale'); ?>
                        <div class="content text-center mt-0 mt-md-3">
                            <a href="<?php the_permalink() ;?>"
                                class="product-item__name text-decoration-none text-end"><?php the_title() ;?></a>
                            <p class="product-item__price mt-3 mb-4">
                                <?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
                            </p>
                            <a href="<?php the_permalink() ;?>" class="product-item__detail mt-5">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata();?>
                
                <div
                    class="arc-pr-bot d-flex flex-column flex-md-row justify-content-center justify-content-md-between pt-4 pb-4">

                    <?php
						/**
						 * Hook: woocommerce_after_shop_loop.
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
						?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php 
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );
?>
</div>
<?php get_footer( 'shop' );?>