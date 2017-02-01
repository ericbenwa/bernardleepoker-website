<?php
/**
 * Template Name: Book Volume II Template
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
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

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

		<div id="secondary">
			<?php if(get_post_meta($post->ID, "book_sale_img", true)) { ?>
				<img src="<?php echo get_post_meta($post->ID, "book_sale_img", true) ?>" alt="<?php echo $post->post_title; ?>" />
			<?php }?>

			<?php if(get_post_meta($post->ID, "book_sale_text", true)) { ?>
				<p class="caption"><?php echo get_post_meta($post->ID, 'book_sale_text', true);?></p>
			<?php }?>
		</div>

<?php get_footer(); ?>