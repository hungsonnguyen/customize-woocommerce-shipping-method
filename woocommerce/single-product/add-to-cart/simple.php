<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
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

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

// echo wc_get_stock_html( $product ); // WPCS: XSS ok.
?>

<div class="contact-product">
    <div class="baohanh d-flex flex-row justify-content-start align-items-center">
        <img src="<?php echo get_theme_mod('image_adress')?>" alt="" srcset="" style="width:30px;">
        <p class="p-2  mb-0"><?php echo get_theme_mod('html_adress')?></p>
    </div>
    <div class="baohanh d-flex flex-row justify-content-start align-items-center">
        <img src="<?php echo get_theme_mod('image_bao_hanh')?>" alt="" srcset="" style="width:30px;">
        <p class="p-2 mb-0"><?php echo get_theme_mod('htmt_bao_hanh')?></p>
    </div>
    <div class="baohanh d-flex flex-row justify-content-start align-items-center">
        <img src="<?php echo get_theme_mod('image_ship')?>" alt="" srcset="" style="width:30px;height:30px;">
        <p class="p-2  mb-0"><?php echo get_theme_mod('htmt_ship')?></p>
    </div>
    <div class="baohanh d-flex flex-row justify-content-start align-items-center">
        <img src="<?php echo get_theme_mod('image_cam_ket')?>" alt="" srcset="" style="width:30px;">
        <p class="p-2  mb-0"><?php echo get_theme_mod('htmt_cam_ket')?></p>
    </div>
    <div class="baohanh d-flex flex-row justify-content-start align-items-center">
        <img src="<?php echo get_theme_mod('image_skill')?>" alt="" srcset="" style="width:30px;">
        <p class="p-2  mb-0"><?php echo get_theme_mod('htmt_skill')?></p>
    </div>
</div>
<div class="row d-flex flex-row align-items-center">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <a href="https://zalo.me/0905886846" style="background:#1fb520;color:white;border-radius:8px; padding:5px 30px;" class=" call-zalo d-flex flex-row justify-content-center align-items-center">
            <img style="width:40px;" src="<?php bloginfo('template_directory')?>/assets/images/icon-zalo.png" alt="">
            <span class="ps-2">
                <strong>0905.886.846</strong><br>
                Tư Vấn Mua Hàng
            </span>
        </a>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 mt-lg-0 mt-3">
        <a href="tel:0905293668" style="background:#1fb520;color:white;border-radius:8px; padding:5px 30px;" class="call-zalo d-flex flex-row justify-content-center align-items-center" >
            <img style="width:40px;" src="<?php bloginfo('template_directory')?>/assets/images/telephone-call.png" alt="">
            <span class="ps-2">
                <strong> 0905.293.668</strong><br>
                Tư Vấn Mua Hàng
            </span>
        </a>
    </div>
</div>


<div class="pr-info">
	<!-- <p> <span class="fw-bold">Công suất: </span> <?php //echo get_post_meta( get_the_ID(), '_congsuat', true ); ?></p>
    <p> <span class="fw-bold">Gas: </span> <?php //echo get_post_meta( get_the_ID(), '_gas', true ); ?></p>
    <p> <span class="fw-bold">Inverter: </span> <?php //echo get_post_meta( get_the_ID(), '_inverter', true ); ?></p> -->
	<!-- --- -->
    <!-- <p> <span class="fw-bold">Xuất xứ: </span> <?php //echo get_post_meta( get_the_ID(), '_xuatxu', true ); ?></p>
    <p> <span class="fw-bold">Hãng: </span> <?php //echo get_post_meta( get_the_ID(), '_hang', true ); ?></p>
    <p> <span class="fw-bold">Bảo hành: </span> <?php //echo get_post_meta( get_the_ID(), '_baohanh', true ); ?></p> -->
</div>
<?php
if ( $product->is_in_stock() ) : ?>


<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="cart pt-3"
    action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>"
    method="post" enctype='multipart/form-data'>
    <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
    <div class="soluong d-flex">
        <span>Số lượng :&nbsp;</span>
        <?php
		do_action( 'woocommerce_before_add_to_cart_quantity' );

		woocommerce_quantity_input(
			array(
				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
				'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
			)
		);

		do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>
    </div>
    <div class="btn-addcart">
        <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>"
            class="single_add_to_cart_button button alt"><i
                class="fas fa-shopping-cart me-2"></i><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

        <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
    </div>
</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
