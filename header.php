<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Page Title
    ================================================== -->
    <link rel="icon" href="<?php bloginfo('template_url');?>/assets/images/logo-favicon.png" type="image/png">
    <title><?php bloginfo( 'name' ); ?> | <?php is_front_page() ? bloginfo( 'description' ) : wp_title( '' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php do_action( 'wp_after_body_open' ); ?>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="w-100 float-left">
        <header id="header" class="header">
            <div class="header-wrapper ">
                <div class="container">
                     <nav class="menu-desktop menu-top">
                        <div class="logo-header">
                            <a href="<?php echo get_home_url()?>"><img src="<?php bloginfo('template_directory')?>/assets/images/logo.png" alt="" srcset=""></a>
                        </div>
                        <?php
                            $primarymenu = array(
                            'theme_location'  => 'primary',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'slimmenu',
                            'menu_id'         => 'primary-menu',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker(),
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="list-unstyled mb-0">%3$s</ul>',
                            'depth'           => 0,
                            );
                            if ( has_nav_menu( 'primary' ) ) {
                            wp_nav_menu( $primarymenu );
                            }
                        ?>
                        <div class="header-box__small"> 
                            <div class="search-pr">
                                <?php dynamic_sidebar('Footer 1') ?>
                            </div>
                            <a class="shopping-cart" href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>">
                                <img src="<?php bloginfo('template_directory')?>/assets/images/shopping.png" alt=""
                                    srcset="">
                                <?php $items_count = WC()->cart->get_cart_contents_count();?>
                                <div class="text-dark" id="mini-cart-count-mb">
                                    <?php echo $items_count ? $items_count : '0'; ?>
                                </div>
                            </a>
                        </div>
                    </nav> 
                    <div class="mobile-header-main position-relative">
                        <div class="container">
                            <div
                                class="mobile-header-main__wrapper d-flex justify-content-between align-items-center">
                                <a id="mobile-menu-button" href="#mobile_menu">
                                    <i style="font-size: 36px;" class="fas fa-bars text-white"></i>
                                </a>
                                <a class="d-inline-block" href="<?php echo home_url() ?>"><img
                                        src="<?php bloginfo('template_url');?>/assets/images/logo.png" alt=""
                                        class="p-2"></a>
                                <div class="header-box__small">
                                    <a class="shopping-cart" href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>">
                                        <img src="<?php bloginfo('template_directory')?>/assets/images/shopping.png" alt=""
                                            srcset="">
                                        <?php $items_count = WC()->cart->get_cart_contents_count();?>
                                        <div class="text-dark" id="mini-cart-count-mb">
                                            <?php echo $items_count ? $items_count : '0'; ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>