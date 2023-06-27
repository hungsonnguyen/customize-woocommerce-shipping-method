<?php 
    get_header(); 
    $queried_object = get_queried_object(); 
    global $post;
?>
<div class="break-crumb w-100 float-left">
<div class="container">
        <div class="row">
            <div class="col-12 text-center">
            <?php if ( function_exists( 'woocommerce_breadcrumb' )) woocommerce_breadcrumb(); ?>
                <a href="#" class=" title-page text-yellow-color text-uppercase "> <?php  the_title();?> </a>
            </div>
        </div>
    </div>
</div>
<div class="page-content w-100 float-left mt-5 mb-3">
    <div class="container">
        <?php 
            while (have_posts()) : the_post();
            the_content();
            endwhile;
        ?>
    </div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>