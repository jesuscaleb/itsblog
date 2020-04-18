<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package itsblog
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

<div id="st_container" class="st-container"><!-- id=>page class=>site -->
	<!-- Skip to content -->
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'itsblog' ); ?></a> -->
	
	<nav id="menu" class="st-menu st-effect"> <!-- class=>main-navigation id=>site-navigation -->
		<button class="st-close" id="st-close" data-effect="st-effect">Cerrar</button>
		<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'itsblog' ); ?></button> -->
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
		?>
	</nav><!-- #site-navigation -->

	<!-- <header id="masthead" class="site-header">
	</header> #masthead -->

	<div class="st-pusher">
		<div id="content" class="st-content"><!-- class=>site-content -->
			<div class="st-header">
				<button class="hamburguer st-open" id="st-open" data-effect="st-effect">Menú</button>
			</div>
