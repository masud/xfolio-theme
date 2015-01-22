<?php
/**
 * Template Name: HomePage
 *
 */
get_header(); 
$txpost = TXPost::getPost('download');?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main row" role="main">

		<?php /* Start the Loop */ ?>
		<?php while ( $txpost->have_posts() ) : $txpost->the_post(); ?>

			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				// get_template_part( 'content', get_post_format() );
			?>
			<div class="item col-md-4">
				<a class="ajax-link" href="<?php echo get_permalink();?>">
					<figure>
						<?php 
	        			if (has_post_thumbnail( $post->ID ) ){
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>
							<img src="<?php echo $image[0]; ?>">	
						<?php } else { ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/deafult.png">
						<?php	} ?>
					</figure>
					<h2><?php the_title(); ?></h2>
				</a>
			</div>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
