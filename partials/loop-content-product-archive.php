<?php 
global $product;
$product_cats_ids = wc_get_product_term_ids( $product->get_id(), 'product_cat' );
?>
<div class="col-lg-4 col-6 d_flex mb-3 product">
    <div class="product-item">
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
                echo ' <img class="gif-new" style="width:65px;" src="'. get_field('hot',51) .'" />';
            }
            ?>
        <?php do_action('gif_sale'); ?>
        <div class="content text-center mt-0 mt-md-3">
            <a href="<?php the_permalink() ;?>"
                class="product-item__name text-decoration-none text-end"><?php the_title() ;?></a>
            <p class="product-item__price mt-3 mb-4"><?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
            </p>
            <a href="<?php the_permalink() ;?>" class="product-item__detail mt-5">Xem chi tiết</a>
        </div>
    </div>
</div>