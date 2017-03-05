<?php
/**
 * The template for displaying the footer *
 * Contains the closing of the #content div and all content after. *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials *
 * @package elvis
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<!-- Begin Footer Widgets -->
			<?php if ( is_active_sidebar( 'footer_one' ) ) :
				dynamic_sidebar( 'footer_one' );
			endif; ?>

			<!-- Add a Footer Widget -->
			<?php if ( is_active_sidebar( 'footer_two' ) ) :
				dynamic_sidebar( 'footer_two' );
			endif; ?>

			<!-- Add a Footer Widget -->
			<?php if ( is_active_sidebar( 'footer_three' ) ) :
				dynamic_sidebar( 'footer_three' );
			endif; ?>
			<!-- End Footer Widgets -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
