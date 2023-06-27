<?php get_header(); ?>

<div class="search w-100">
	<div class="container">
        <h2 class="search-title mt-5 mb-3">Search Results For: <?php echo get_search_query(); ?></h2>
            <ul class="product row product-layout list-unstyled">  
            <?php 
            $args = array(
                'posts_per_page'     => 12,
                'post_type'          => 'product',
                'orderby'            => 'date',            
                'order'              => 'DESC',
                'paged'             => get_query_var( 'paged' ),
                's'                  => get_search_query()
                );
                $wp_query = new WP_Query($args);?>
                <?php if ($wp_query->have_posts()) :?>
                <?php while ($wp_query->have_posts()) : $wp_query->the_post();?>
                <li class="product col-6 col-md-6 col-lg-3 mt-4">
                    <div class="item-products woocommerce">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );?>
                    <a href="<?php the_permalink();?>" class="woocommerce-loop-product__link">
                        <div class="product-top">
                            <?php echo wc_get_rating_html($product->get_average_rating(), $product->get_rating_count()); ?>
                            <img src="<?php echo $image ? $image[0] : wc_placeholder_img_src('full'); ?> "
								class="mx-auto d-block attachment-shop_catalog size-shop_catalog wp-post-image size-woocommerce_thumbnail">
                            <span class="d-flex price"><?php echo $product->get_price_html();?></span>
                        </div>	
                        <strong class="woocommerce-loop-product__title limit-text-1 "><?php echo get_the_title();?></strong>
						<p class="am-woocommerce-excerpt limit-text-2"><?php echo get_the_excerpt();?></p>
                        <?php woocommerce_template_loop_add_to_cart($wp_query->post, $product); ?>
                    </a>
                    </div>
                </li>
                <?php endwhile;?>
                <?php else : "No Results Found"; endif; ?>
                <?php prw_wp_corenavi( $wp_query ); ?>
                <?php wp_reset_postdata();?>
            </ul>
        
    </div>				
</div>
<div class="clear"></div>
<?php get_footer(); ?>