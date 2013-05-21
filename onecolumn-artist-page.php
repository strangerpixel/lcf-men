<?php
/**
 * Template Name: One column, no sidebar, artist portfolio
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container" class="one-column">
			<div id="content-artist-page" role="main">

				<?php get_template_part( 'loop', 'profile' ); ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
