<?php
/**
 * @package xFolio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php 
	if (has_post_thumbnail( $post->ID ) ){
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
		<img src="<?php echo $image[0]; ?>">	
	<?php } else { ?>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/deafult.png">
	<?php	} ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'xfolio' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php xfolio_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
