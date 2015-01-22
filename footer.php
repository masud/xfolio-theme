<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package xFolio
 */
?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'xfolio' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'xfolio' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'xfolio' ), 'xFolio', '<a href="http://www.themexpert.com" rel="designer">Parvez Akther</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
	</div><!-- #content -->
</div> <!-- Row end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
