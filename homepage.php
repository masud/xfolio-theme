<?php
/**
 * Template Name: HomePage
 *
 */
get_header(); 
$recent = xfolio_get_posts('download');
$featured = xfolio_get_posts('download', 1, 'featured');
?>

<div class="hero-area" style="background-image: url(<?php echo cs_get_customize_option( 'codestar_upload_hero_area' ); ?>);">	

	<h1 class="title animated bounceInUp" style="font-size: <?php echo cs_get_customize_option('font_size_option'); ?>">Welcome To ThemesGrove</h1>
	<h2 class="subtitle animated zoomIn">Source of Free Joomla, Wordpress, HTML themes</h2>

</div>

<nav class="navbar navbar-default">
	<form role="search" method="get" class="navbar-form navbar-left" action="http://localhost/themesgrove/">
		<div class="form-group">
	    	<input type="search" class="form-control search-field" placeholder="Search …" value="" name="s" title="Search for:">
	  	</div>
		<!-- <input type="submit" class="search-submit" value="Search"> -->
	</form>
	<div class="navbar-left">
		<a class="btn btn-default navbar-btn">Login</a>
		<a class="btn btn-success navbar-btn">Submit Item</a>	
	</div>
	

</nav>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php while ( $featured->have_posts() ) : $featured->the_post(); ?>
		<div class="row">
			<div class="col-md-12">
				<div class="featured-item clearfix">
					<a class="ajax-link" href="<?php echo get_permalink();?>">
						<figure>
							<?php 
		        			if (has_post_thumbnail( $post->ID ) ){
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'xfolio-homepage-thumb' ); ?>
								<img src="<?php echo $image[0]; ?>">	
							<?php } else { ?>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/deafult.png">
							<?php	} ?>
						</figure>
						<h3 class="title"><?php the_title(); ?> <span class="label label-success">Featured</span></h3>
					</a>
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>

	<h2 class="page-header">Latest Items</h2>

	<div class="items clearfix">
		<div class="row">
		<?php while ( $recent->have_posts() ) : $recent->the_post(); ?>
			<div class="col-md-4 col-sm-6">
				<div class="item">
					<a class="ajax-link" href="<?php echo get_permalink();?>">
						<figure>
							<?php 
		        			if (has_post_thumbnail( $post->ID ) ){
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'xfolio-homepage-thumb' ); ?>
								<img src="<?php echo $image[0]; ?>">	
							<?php } else { ?>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/deafult.png">
							<?php	} ?>
						</figure>
						<h3 class="title"><?php the_title(); ?></h3>
					</a>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>

	<?php the_posts_navigation(); ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
