<?php
/**
 * Template Name: Radio Show Template
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
  * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

	<div id="banner">
		<?php if(get_post_meta($post->ID, "banner_image", true)) { ?>
			<img src="<?php echo get_post_meta($post->ID, "banner_image", true) ?>" alt="<?php echo $post->post_title; ?>" class="banner" />
		<?php }?>
	</div>

	<div id="main">
		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<div class="podcasts">
						<?php
							$XMLFILE = "http://www.roundersradio.libsyn.com/rss/Bernard%20Lee%20Poker%20Shows";
							$TEMPLATE = "http://www.bernardleepoker.com/scripts/sample-template.html";
							$MAXITEMS = "10";
							include("scripts/rss2html.php");
						?>
					</div>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

		<div id="secondary">
			<?php if(get_post_meta($post->ID, "side_image", true)) { ?>
				<img src="<?php echo get_post_meta($post->ID, "side_image", true) ?>" alt="<?php echo $post->post_title; ?>" />
			<?php }?>
		</div>

<?php get_footer(); ?>