<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

        <header id="masthead" class="site-header">

        <nav id="nav-container" class="navigation">

    <ul id="menu">
        <li class="title-site"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></li>
    </ul>

    <button id="burger-btn" class="burger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </button>


</nav><!-- #site-navigation -->

    <!-- menu pleine page -->
    <div id="menu-fullscreen" class="hidden">

        <!-- images -->
        <img class="logo"
            src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> "
            alt="logo Fleurs d'oranger & chats errants">
        <img class="rdm-flower"
            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'; ?> "
            alt="">
        <img class="sun-flower"
            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/sunflower.png'; ?> " alt="">
        <img class="orchid"
            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?> " alt="">
        <img class="flower"
            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'; ?> " alt="">
        <img class="hibiscus"
            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus.png'; ?> " alt="">
        <img class="yellow-cat"
            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/yellow-cat.png'; ?> " alt="">
        <img class="dark-cat"
            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/dark-cat.png'; ?> " alt="">
        <img class="cat" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat.png'; ?> "
            alt="">

        <!-- liens -->
        <ul>
            <li><a href="#story">Histoire</a></li>
            <li><a href="#characters">Personnages</a></li>
            <li><a href="#place">Lieu</a></li>
            <li><a href="#studio">Studio Koukaki</a></li>
        </ul>
        <p>Studio Koukaki</p>
    </div>

</header><!-- #masthead -->
