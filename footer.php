<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <?php $location = get_field("address_line_2","option");
        $tel = get_field("tel","option");
        $email = get_field("email","option");?>
		<div class="wrapper clear-bottom">
            <?php if(exists($location)||exists($tel)||exists($email)):?>
                <div class="site-info column-1">
                    <div class="row-1">
                        <span class="company-name">
                            <?php echo get_bloginfo("name");?>
                        </span> <?php if(exists($location)) echo '  |  <span class="location">'.$location.'</span>';?>
                    </div><!--.row-1-->
                    <?php if(exists($tel)&&exists($email)):?>
                        <div class="row-2">
                            <span class="email"><?php echo $email;?></span>  |  <span class="tel"><?php echo $tel;?></span>
                        </div><!--.row-2-->
                    <?php endif;?>
                </div><!-- .site-info -->
            <?php endif;?>
			<nav class="sitemapbw-menu column-2">
                <?php wp_nav_menu( array( 'theme_location' => 'sitemapbw')); ?>
			</nav><!--.sitemapbw-menu-->
	</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
