<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div class="custom-stock d-flex">
	<?php echo '<span>Tình trạng : &nbsp;</span>'. wc_get_stock_html( $product ); // WPCS: XSS ok. ?>
</div>
<!-- <p class="<?php //echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php //echo $product->get_price_html(); ?></p> -->
<!-- custom  -->
<p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>">
<?php if($product->get_price() == 0){
	echo '<span class = "me-3"><i class="fas fa-phone-volume"></i></span>'.$product->get_price_html();
}else{
 echo 'Giá: '.$product->get_price_html() .get_post_meta( get_the_ID(), '_select', true );
}?>
</p>
