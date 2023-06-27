<?php
/*
* Add quick buy button go to checkout after click
*/
add_action('woocommerce_after_add_to_cart_button','devvn_quickbuy_after_addtocart_button');
function devvn_quickbuy_after_addtocart_button(){
    global $product;
    ?>
    <style>
        .devvn-quickbuy button.single_add_to_cart_button.loading:after {
            display: none;
        }
        .devvn-quickbuy button.single_add_to_cart_button.button.alt.loading {
            color: #fff;
            pointer-events: none !important;
        }
        .devvn-quickbuy button.buy_now_button {
            position: relative;
            color: rgba(255,255,255,0.05);
        }
        .devvn-quickbuy button.buy_now_button:after {
            animation: spin 500ms infinite linear;
            border: 2px solid #fff;
            border-radius: 32px;
            border-right-color: transparent !important;
            border-top-color: transparent !important;
            content: "";
            display: block;
            height: 16px;
            top: 50%;
            margin-top: -8px;
            left: 50%;
            margin-left: -8px;
            position: absolute;
            width: 16px;
        }
    </style>
    <button type="button" class="button buy_now_button">
        <?php _e('Mua ngay', 'devvn'); ?>
    </button>
    <input type="hidden" name="is_buy_now" class="is_buy_now" value="0" autocomplete="off"/>
    <script>
        jQuery(document).ready(function(){
            jQuery('body').on('click', '.buy_now_button', function(e){
                e.preventDefault();
                var thisParent = jQuery(this).parents('form.cart');
                if(jQuery('.single_add_to_cart_button', thisParent).hasClass('disabled')) {
                    jQuery('.single_add_to_cart_button', thisParent).trigger('click');
                    return false;
                }
                thisParent.addClass('devvn-quickbuy');
                jQuery('.is_buy_now', thisParent).val('1');
                jQuery('.single_add_to_cart_button', thisParent).trigger('click');
            });
        });
    </script>
    <?php
}
add_filter('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');
function redirect_to_checkout($redirect_url) {
    if (isset($_REQUEST['is_buy_now']) && $_REQUEST['is_buy_now']) {
        $redirect_url = wc_get_checkout_url(); //or wc_get_cart_url()
    }
    return $redirect_url;
}

// custom field cho tab giá trong sản phẩm
// Display Fields
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );
 
// Save Fields
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

// function woo_add_custom_general_fields() {

//     global $woocommerce, $post;
    
//     echo '<div class="options_group">';
//     woocommerce_wp_text_input( 
//         array( 
//             'id'          => '_congsuat', 
//             'label'       => __( 'Công suất', 'woocommerce' ), 
//         )
//     );
//     woocommerce_wp_text_input( 
//         array( 
//             'id'          => '_gas', 
//             'label'       => __( 'Gas', 'woocommerce' ), 
//         )
//     );
//     woocommerce_wp_text_input( 
//         array( 
//             'id'          => '_inverter', 
//             'label'       => __( 'Inverter', 'woocommerce' ), 
//         )
//     );
//     woocommerce_wp_text_input( 
//         array( 
//             'id'          => '_xuatxu', 
//             'label'       => __( 'Xuất xứ', 'woocommerce' ), 
//         )
//     );
//     woocommerce_wp_text_input( 
//         array( 
//             'id'          => '_hang', 
//             'label'       => __( 'Hãng', 'woocommerce' ), 
//         )
//     );
//     woocommerce_wp_text_input( 
//         array( 
//             'id'          => '_baohanh', 
//             'label'       => __( 'Bảo hành', 'woocommerce' ), 
//         )
//     );
//     echo '</div>';
      
//   }

// // hàm này dùng để lưu vào data
// function woo_add_custom_general_fields_save( $post_id ){
//     // Text Field
// 	$woocommerce_text_field = $_POST['_congsuat'];
// 	if( !empty( $woocommerce_text_field ) )
// 		update_post_meta( $post_id, '_congsuat', esc_attr( $woocommerce_text_field ) );
//     // Text Field
// 	$woocommerce_text_field = $_POST['_gas'];
// 	if( !empty( $woocommerce_text_field ) )
// 		update_post_meta( $post_id, '_gas', esc_attr( $woocommerce_text_field ) );
//         // Text Field
// 	$woocommerce_text_field = $_POST['_inverter'];
// 	if( !empty( $woocommerce_text_field ) )
// 		update_post_meta( $post_id, '_inverter', esc_attr( $woocommerce_text_field ) );
//         // Text Field
// 	$woocommerce_text_field = $_POST['_xuatxu'];
// 	if( !empty( $woocommerce_text_field ) )
// 		update_post_meta( $post_id, '_xuatxu', esc_attr( $woocommerce_text_field ) );
//         // Text Field
// 	$woocommerce_text_field = $_POST['_hang'];
// 	if( !empty( $woocommerce_text_field ) )
// 		update_post_meta( $post_id, '_hang', esc_attr( $woocommerce_text_field ) );
//         // Text Field
// 	$woocommerce_text_field = $_POST['_baohanh'];
// 	if( !empty( $woocommerce_text_field ) )
// 		update_post_meta( $post_id, '_baohanh', esc_attr( $woocommerce_text_field ) );
// }

// ----------------gallery full size img product
// change woocommerce gallery image size 
add_filter( 'woocommerce_get_image_size_single', 'override_woocommerce_image_size_single' );
function override_woocommerce_image_size_single( $size ) {
    // Single product image size
    return array(
        'width'  => 1000,
        'height' => 800,
        'crop'   => 0,
    );
}

// change woocommerce thumbnail image size
add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'override_woocommerce_image_size_gallery_thumbnail' );
function override_woocommerce_image_size_gallery_thumbnail( $size ) {
    // Gallery thumbnails: proportional, max width 200px
    return array(
		'width'  => '200',
        'height' => '',
        'crop'   => 0,
    );
}
// end gallery full size img product

add_filter( 'woocommerce_sale_flash', 'bbloomer_rename_sale_badge', 9999 );
 
function bbloomer_rename_sale_badge() {
//    return get_field('sale',51);

   return ' <img class="gif-sale" src="'. get_field('sale',51) .'" />';
}

// add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );

// add_gif_new_pagesingle
add_action('woocommerce_before_single_product_summary','custom_gif_new', 10);
add_action('woocommerce_before_shop_loop_item_title','custom_gif_new', 10);
function custom_gif_new(){
    global $product;
    $product_cats_ids = wc_get_product_term_ids( $product->get_id(), 'product_cat' );
    foreach($product_cats_ids as $product_cats_id){
        if($product_cats_id == 43){
            echo ' <img class="gif-new" src="'. get_field('new',51) .'" />';
        }
    }
}
// add_gif_hot_pagesingle
add_action('woocommerce_before_single_product_summary','custom_gif_hot', 10);
add_action('woocommerce_before_shop_loop_item_title','custom_gif_hot', 10);
function custom_gif_hot(){
    global $product;
    if($product->featured == 'yes'){
        echo ' <img class="gif-new" src="'. get_field('hot',51) .'" />';
    }
}

// bỏ bắt buộc emal
add_filter( 'woocommerce_billing_fields', 'remove_required_fields');
function remove_required_fields( $fields ) {
    $fields['billing_email']['required'] = false;
    return $fields;
}
