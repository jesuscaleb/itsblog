<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package itsblog
 */

get_header();
?>

	<div id="primary" class="st-body content-area">
		<main id="main" class="site-main">

			<div class="site-branding"> <!-- moved from header to this page: after #masthead -->
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$itsblog_description = get_bloginfo( 'description', 'display' );
				if ( $itsblog_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $itsblog_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->


		</main><!-- #main -->

		<div class="st-push"></div>
	</div><!-- #primary -->
<?php
get_footer();
get_sidebar();

