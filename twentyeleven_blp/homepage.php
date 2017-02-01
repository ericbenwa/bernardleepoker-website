<?php
/**
 * Template Name: Homepage Bro Template
 * Description: A Page Template that showcases homepage goodies
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<div id="banner">
		<?php if ( function_exists( 'get_indexo_slider' ) ) {
		  get_indexo_slider(); }
		?>
	</div>

	<div id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<!--
					<nav id="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav>
					-->

					<?php get_template_part( 'content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>