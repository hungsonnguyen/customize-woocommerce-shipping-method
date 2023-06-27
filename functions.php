<?php
/**
 * Proweb365 functions and definitions
 *
 * @package Proweb365
 */
require get_template_directory() . '/inc/init.php';
require get_template_directory() . '/inc/function/buyitnow.php';

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);

remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);
add_action('boloc', 'woocommerce_catalog_ordering',30);
add_action('woocommerce_after_shop_loop', 'woocommerce_result_count',5);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating',5);

add_action('woocommerce_after_shop_loop_item_title_custom','woocommerce_template_loop_price',10);
add_action('woocommerce_after_shop_loop_item_title_custom','custom_donvi_sp',10);
function custom_donvi_sp(){
    echo get_post_meta( get_the_ID(), '_select', true );
}

add_action('gif_sale','woocommerce_show_product_loop_sale_flash',10);


// ui old widget
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );

// add continue shopping page cart
add_action( 'woocommerce_after_cart_totals', 'tl_continue_shopping_button' );
function tl_continue_shopping_button() {
 $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
 
 echo '<div class="continue_shopping_button">';
 echo ' <a href="'.$shop_page_url.'" class="button">Tiếp tục mua hàng</a>';
 echo '</div>';
}
// end add continue shopping page cart

// thêm sản phẩm kh có giá vào giỏ hàng
function custom_woocommerce_is_purchasable_filter( $can, $product ) {
    if ( '' == $product->get_price() ) {
        $can = $product->exists() && ( 'publish' === $product->get_status() || current_user_can( 'edit_post', $product->get_id() ) );
    }

    return $can;
}

add_filter( 'woocommerce_is_purchasable', 'custom_woocommerce_is_purchasable_filter', 10, 2 );

function wc_product_data_filter( $value, $data ) {
    if ( empty( $value ) ) {
        $value = 0;
    }
    return $value;
}

add_filter( 'woocommerce_product_get_price', 'wc_product_data_filter', 10, 2 );
// thêm sản phẩm kh có giá vào giỏ hàng end...


//-------------giới hạn phân trang trong hook phân trang của woocomerce---------------
function product_pagination_by_category() {
    if( is_product_category() )
        $limit = 12;
    return $limit;
}
add_filter( 'loop_shop_per_page', 'product_pagination_by_category');


function devvn_wc_custom_get_price_html( $price, $product ) {
    if ( $product->get_price() == 0 ) {
        if ( $product->is_on_sale() && $product->get_regular_price() ) {
            $regular_price = wc_get_price_to_display( $product, array( 'qty' => 1, 'price' => $product->get_regular_price() ) );

            $price = wc_format_price_range( $regular_price, __( 'Free!', 'woocommerce' ) );
        } else {
            $price = '<span class="amount">' . __( 'Liên hệ', 'woocommerce' ) . '</span>';
        }
    }
    return $price;
}

add_filter( 'woocommerce_get_price_html', 'devvn_wc_custom_get_price_html', 10, 2 );

// chuyển đ thành VND-------------
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
 
function change_existing_currency_symbol( $currency_symbol, $currency ) {
 switch( $currency ) {
 case 'VND': $currency_symbol = 'đ'; break;
 }
 return $currency_symbol;
}

// mini_cart
add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments){
    ob_start();
    $items_count = WC()->cart->get_cart_contents_count();
    ?>
    <span  id="mini-cart-count"
                    class=" button product_type_simple add_to_cart_button ajax_add_to_cart cart-quantity badge rounded-pill bg-warning text-white"
                >
                <?php echo $items_count ? $items_count : '0'; ?>
                </span>
    <?php
        $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;

}

add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count_mb');
function wc_refresh_mini_cart_count_mb($fragments){
    ob_start();
    $items_count = WC()->cart->get_cart_contents_count();
    ?>
    <span  id="mini-cart-count-mb"
                    class=" button product_type_simple add_to_cart_button ajax_add_to_cart cart-quantity badge rounded-pill bg-warning text-white"
                >
                <?php echo $items_count ? $items_count : '0'; ?>
                </span>
    <?php
        $fragments['#mini-cart-count-mb'] = ob_get_clean();
    return $fragments;

}
add_filter( 'woocommerce_loop_add_to_cart_link', 'ts_replace_add_to_cart_button', 10, 2 );
function ts_replace_add_to_cart_button( $button, $product ) {
if (is_product_category() || is_shop()) {
$button_text = __("View Product", "woocommerce");
$button_link = $product->get_permalink();
$button = '<a href="' . $button_link . '">' . $button_text . '</a>';
return $button;
}
}
function add_table_option_skill(){
    ob_start();
    ?>
    <table class="w-100 table table-bordered bordered-dark">
		<tr>
			<th>Công Suất </th>
			<th>Loại Máy</th>
			<th>Sử Dụng</th>
		</tr>
		<tr>
			<td><?php the_field('cong_suat')?></td>
			<td><a class="text-info" href="<?php the_field('loai_may')?>"><?php the_field('name_loai_may')?></a></td>
			<td><?php the_field('su_dung')?></td>
		</tr>
	</table>
    <?php
}
add_action('woocommerce_before_single_product_summary','add_table_option_skill',30);


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_excerpt', 40 );



remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

add_action('woocommerce_before_single_product_summary','woocommerce_template_single_title',5);