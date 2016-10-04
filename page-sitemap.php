<?php
/**
 * Template Name: Sitemap
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <?php if(have_posts()): the_post();?>
                <article id="post-<?php the_ID(); ?>" <?php post_class("template-sitemap"); ?>>
                    <header>
                        <h1><?php echo get_the_title(); ?></h1>
                    </header>

                    <div class="copy">
                        <?php the_content();?>
                        <?php wp_nav_menu( array( 'theme_location' => 'sitemap') ); ?>
                    </div><!-- .copy -->
                </article><!-- .template-sitemap -->
            <?php endif;?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
