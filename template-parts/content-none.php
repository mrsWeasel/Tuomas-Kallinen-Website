<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tuomas
 */


		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'tuomas' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php else : ?>
				<?php if ( is_search() ) :
					$helper_text = esc_html('Sorry, but nothing matched your search terms. Please try again with different keywords.', 'tuomas');
				else :
					$helper_text = esc_html( 'The content you are looking for may have been removed or moved to another location. Maybe try the links below or try searching?', 'tuomas' );
				endif; ?>

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<p><?php echo $helper_text; ?></p>
							<?php get_search_form(); ?>
							<div class="row">
								<div class="col-md-6 content-menu">
									<?php 
									the_widget( 'WP_Widget_Recent_Posts' ); 
									if ( tuomas_categorized_blog() ) : ?>
									<h2 class="widget-title"><?php esc_html_e( 'Categories', 'tuomas' ); ?></h2>
									<ul>
									<?php
										wp_list_categories( array(
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										) ); ?>
									</ul>	
									<?php endif; ?>
								</div>
								<div class="col-md-6">
									<h2><?php esc_html_e('Contact me', 'tuomas'); ?></h2>
									<p>+358 40 090 5012
									<br><a href="mailto:info@tuomaskallinen.com">info@tuomaskallinen.com</a></p>
								</div>
						</div><!-- .row (nested) -->
					</div>
				</div><!-- .row -->
		
		<?php endif; ?>
