<?php get_header(); ?>

	<section class="subpage-main">

		<div class="container">

			<div class="default-content eleven columns">

			<a href="/blog" class="back-to-blog">&laquo; Back to all posts</a>	

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post title -->
					<h1 class="entry-title">
						<?php the_title(); ?>
					</h1>
					<!-- /post title -->

                    <?php
                    //show post meta if not disabled
                    if($data['enable_disable_single_meta'] !='disable') { ?>
                        <section class="meta clearfix" id="single-meta">
                            <ul>
                                <li><span class="wpex-icon-folder-open"></span><?php the_category(' / '); ?></li>
                                 <?php if(comments_open()) { ?><li class="comment-scroll"><span class="wpex-icon-comment"></span><?php wpex_translation('comments'); ?></li><?php } ?>
                                <li>
                                	<span class="wpex-icon-user"></span>
                                	<span class="vcard author author_name">
										<span class="fn">
	                                	<?php
	                                		if ( function_exists( 'coauthors_posts_links' ) ) {
											    coauthors_posts_links();
											} else {
											    the_author_posts_link();
											}
	                                	?>
	                                	</span>
                                	</span>
                                </li>
                           </ul>
                        </section><!--/meta -->
                    <?php } ?>
                    <!-- post thumbnail -->
                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                        </a>
                    <?php endif; ?>
                    <!-- /post thumbnail -->

					<?php the_content(); // Dynamic Content ?>

					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</div> <!--end about-left-->

			<div class="default-sidebar five columns">

				<?php get_sidebar(blog); ?>

			</div> <!--end default-sidebar-->

		</div> <!--end container-->

		<div class="subscribe-signup-section">

			<div class="container">

				<div class="pardot-signup-form-footer sixteen columns">
					<h3><strong>Like this blog?</strong> Subscribe to get more articles.</h3>
					<iframe src="https://go.pardot.com/l/232712/2016-10-20/cqc" width="100%" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
				</div>

			</div>

		</div>

	</section> <!--end about-snippet-->

<?php get_footer(); ?>
