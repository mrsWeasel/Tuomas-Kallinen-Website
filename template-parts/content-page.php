<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tuomas
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

		<?php 

		if ( is_home() || is_archive() ) : ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry-meta">
			<?php tuomas_posted_on(); ?>
			</div>
			<div class="tag-container"><?php the_tags('', ' ', ''); ?></div>
			
			
			<?php

			if ( has_post_format('audio')) {
				get_template_part( './template-parts/format', 'audio' );
				
			}

			?>

			<?php the_content(sprintf(
				esc_html__('Read more %s', 'tuomas'),
				the_title('<span class="screen-reader-text"> about "', '"</span>', false) )
			); 
		else :
			the_content();
		endif; ?>

		<?php wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tuomas' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'tuomas' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
