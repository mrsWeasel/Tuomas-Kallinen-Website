<?php
/* Template Name: Contact Page */
/**
 * The template for displaying specially formatted contact info page.
 *
 * @package Tuomas
 */

get_header(); ?>
	
	<div class="fullwidth-block">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>
						</div>
					</div>
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .fullwidth-block -->	
<?php

get_footer();
