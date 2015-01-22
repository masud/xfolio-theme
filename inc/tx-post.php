<?php 

abstract class TXPost{
	
	static function getPost( $type, $post_per_page=4, $cat='' )
	{
		$args = array( 'post_type' => $type, 'posts_per_page' => $post_per_page, 'cat' => $cat );

		$post = new WP_Query($args);

		wp_reset_postdata();

		return $post;
	}
}