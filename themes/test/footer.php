<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="footer">
			<div class="site-branding">
				<?php the_custom_logo(); ?>
			</div>

			<nav id="site-navigation" class="mymain-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'menu_id'        => 'footer-menu',
					)
				);
				?>
			</nav>

			<?php if (is_active_sidebar('sidebar_footer_social')) : ?>
			<div class="footer-sidebar">
					<?php dynamic_sidebar('sidebar_footer_social'); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>