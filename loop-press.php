<?php
/**
 * The loop that displays the Press page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<?php if (function_exists('nivoslider4wp_show')) { nivoslider4wp_show(); } ?>
					
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
					
				</div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>