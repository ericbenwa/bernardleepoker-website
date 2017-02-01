<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<div style="clear:both"></div>
	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

	</footer><!-- #colophon -->

	<div id="footer"><a href="http://twitter.com/#!/BernardLeePoker" target="_blank">@BernardLeePoker</a></div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>