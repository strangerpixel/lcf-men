<?php

/**
 * The loop that displays a page.
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

				<div class="column left">

						<div class="text_box">
							<?php the_content(); ?>
						</div> <!-- #text_box -->
				</div><!-- .column -->
				<div class="column right">

						<div class="film add-bottom">
							<?php $embed_code = get_post_meta($post->ID, 'embed_code', true); echo $embed_code; ?> 
						</div> <!-- #film -->

						<div class="images">
							<ul class="gallery lightbox">
							
							<?php $images = get_children("post_parent=" . $post->ID . "&post_type=attachment&post_mime_type=image&orderby=menu_order ASC, ID ASC"); 
							//var_dump($images);
							$counter = 1;
							
							foreach ($images as $image) {
								
								$image_description = $image->post_excerpt;								
								$thumbnail_image_attributes = wp_get_attachment_image_src( $image->ID, 'thumbnail' );
								$large_image_attributes = wp_get_attachment_image_src( $image->ID, 'large' );
								
								?>
									<a href="<?php echo $large_image_attributes[0]; ?>" rel="lightbox[gallery]"> 
									<li <?php if ($counter % 3 == 0) { ?>class="last"<?php } ?>><img src="<?php echo $thumbnail_image_attributes[0]; ?>" alt="<?php echo $image_description; ?>" /></li>
									</a>
							<?php
							$counter++;
									
							} // end foreach
							?>
						
							</ul>
						</div> <!-- #images -->
				</div><!-- .column -->

<?php endwhile; // end of the loop. ?>