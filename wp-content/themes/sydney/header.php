<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri() . '/custom-style.css?v=' . time()); ?>">
</head>

<body <?php body_class(); ?> <?php sydney_do_schema( 'html' ); ?>>
<?php wp_body_open(); ?>

<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() ?>

	<header id="masthead" class="site-header" role="banner" <?php sydney_do_schema( 'header' ); ?>>
		<div class="header-wrap">
            <div class="top-header">
                <div class="container">
                    <div class="row nav-top-header-container">
                        <div class="col-12">
                            <ul class="nav-top-header">
                                <li>
                                    <a href="#">
                                        <span>Hướng dẫn mua hàng đảm bảo</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <span>Hướng dẫn mua trả góp</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Đường đến showroom</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://cdn.noithatxinh.vn/Images/Menu/sale-off-X9NTNx.png" alt="SALE OFF">
                                        <span>SALE OFF</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="<?php echo esc_attr( sydney_menu_container() ); ?>">
                <div class="row middle-header">
					<div class="col-md-4 col-sm-8 col-xs-12">
					<?php if ( get_theme_mod('site_logo') ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" <?php sydney_do_schema( 'logo' ); ?> /></a>
						<?php if ( is_home() && !is_front_page() ) : ?>
							<h1 class="site-title screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
						<?php endif; ?>
					<?php else : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
					<?php endif; ?>
					</div>
<!--					<div class="col-md-8 col-sm-4 col-xs-12">-->
<!--						<div class="btn-menu"><i class="sydney-svg-icon">--><?php //sydney_get_svg_icon( 'icon-menu', true ); ?><!--</i></div>-->
<!--						<nav id="mainnav" class="mainnav" role="navigation" --><?php //sydney_do_schema( 'nav' ); ?><!-- >-->
<!--							--><?php //wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
<!--						</nav>-->
                        <!-- #site-navigation -->
<!--					</div>-->
                    <div class="col-md-8 col-sm-4 col-xs-12">
                        <?php dynamic_sidebar('search-product-widget') ?>
                    </div>
				</div>
                <div class="row main-category-menu-container">
                    <div class="col-md-12 col-sm-12 col-xs-12 main-category-menu-container-wrapper">
                        <nav class="main-category-menu" role="navigation" <?php sydney_do_schema( 'nav' ); ?>>
                            <?php wp_nav_menu( array( 'theme_location' => 'primary-category-menu', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
                        </nav><!-- #site-navigation -->
                    </div>
                </div>
			</div>
		</div>
	</header><!-- #masthead -->

	<?php do_action('sydney_after_header'); ?>

	<div class="sydney-hero-area">
		<?php sydney_slider_template(); ?>
		<div class="header-image">
			<?php sydney_header_overlay(); ?>
			<?php if ( ( get_theme_mod('front_header_type','nothing') == 'image' && is_front_page() ) || (get_theme_mod('site_header_type') == 'image' && !is_front_page() ) ) : ?>
				<?php $shop_thumb = get_the_post_thumbnail_url( get_option( 'woocommerce_shop_page_id' )); ?>
				<?php if ( class_exists( 'Woocommerce' ) && is_shop() && !$shop_thumb  ) : ?>
					<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<?php sydney_header_video(); ?>

		<?php do_action('sydney_inside_hero'); ?>
	</div>

	<?php do_action('sydney_after_hero'); ?>

	<div id="content" class="page-wrap">
		<div class="container content-wrapper">
			<div class="row">	