<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>

	<div class="accordion" id="accordionExample">
		<?php if(have_rows('thong_so_skill')) :?>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingOne">
				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					Thông Số Kỹ Thuật
				</button>
				</h2>
				<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<table class="table w-100">
							<tbody>
								<?php while( have_rows('thong_so_skill') ) : the_row(); ?>
								<tr>
									<td><?php echo get_sub_field('name_skill'); ?></td>
									<td><?php echo get_sub_field('skill_number'); ?></td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		<?php endif;?>
		<?php if(have_rows('dan_lanh')) :?>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingTwo">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					Dàn Lạnh
				</button>
				</h2>
				<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						
							<table class="table w-100">
								<tbody>
									<?php while( have_rows('dan_lanh') ) : the_row(); ?>
									<tr>
										<td><?php echo get_sub_field('dan_lanh_name'); ?></td>
										<td><?php echo get_sub_field('dan_lanh_number'); ?></td>
									</tr>
									<?php endwhile; ?>
								</tbody>
							</table>
						
					</div>
				</div>
			</div>
		<?php endif;?>
		<?php if(have_rows('dan_nong')) :?>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingThree">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					Dàn Nóng
				</button>
				</h2>
				<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
					<div class="accordion-body">
					
						<table class="table w-100">
							<tbody>
								<?php while( have_rows('dan_nong') ) : the_row(); ?>
								<tr>
									<td><?php echo get_sub_field('dan_nong_name'); ?></td>
									<td><?php echo get_sub_field('dan_nong_nummber'); ?></td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		<?php endif;?>
	</div>
	

	
	
	


	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs" role="tablist">
			<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
				<li class="<?php echo esc_attr( $key ); ?>_tab" id="tab-title-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
					<a href="#tab-<?php echo esc_attr( $key ); ?>">
						<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
			<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
				<?php
				if ( isset( $product_tab['callback'] ) ) {
					call_user_func( $product_tab['callback'], $key, $product_tab );
				}
				?>
			</div>
		<?php endforeach; ?>

		<?php do_action( 'woocommerce_product_after_tabs' ); ?>
	</div>

<?php endif; ?>
