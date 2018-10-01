<?php
/**
 * @package WordPress
 * @subpackage WPExplorer Themes
 */
?>
<?php get_header(); ?>


<?php
/**
 * The custom template in child theme for displaying Guest Author's biography: Using Co-Author Plus plugin. content-single.php has also been modified from line 42-51.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

if ( function_exists( 'coauthors_posts_links' ) ) {
    global $post;
        $author_id=$post->post_author;
        foreach( get_coauthors() as $coauthor ): ?>
        <div class="container">
            <div class="author-info twelve columns">
                <header id="page-heading">
                    <div class="author-description">
                        <h2 class="author-title">Posts by: <span class="author-heading"><a href="<?php echo get_author_posts_url( $coauthor->ID, $coauthor->user_nicename ); ?>"></a></span> <?php echo $coauthor->display_name; ?></h2>

                        <p class="author-bio">
                            <?php echo $coauthor->description; ?>
                        </p><!-- .author-bio -->
                    </div><!-- .author-description -->
                </header><!-- /page-heading -->
            </div><!-- .author-info -->
        </div>
        <?php endforeach;
}
?>


<section class="subpage-main">

        <div class="container">

            <div class="default-content twelve columns">

                <div id="post" class="post clearfix">  
                	<?php
                	//get entry loop
                    get_template_part('includes/loop', 'entry'); 
                	
                	//pagination function
                	pagination(); ?>
                </div><!--/post -->

            </div>
            
            <div class="default-sidebar four columns">
                <?php get_sidebar(blog); ?>
            </div>

        </div>
    </section>
<?php get_footer(); ?>