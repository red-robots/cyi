<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper clear-bottom">
            <?php $tel = get_field("tel","option");
            $tag = get_field("header_tag","option");
            if(exists($tel)||exists($tag)):?>
                <div class="row-1">
                    <?php if(exists($tag)):?>
                        <div class="tag"><?php echo $tag;?></div><!--.tag-->
                    <?php endif;?>
                    <?php if(exists($tel)):?>
                        <div class="tel"><?php echo $tel;?></div><!--.tel-->
                    <?php endif;?>
                </div><!--.row-1-->
            <?php endif;?>
            <div class="row-2">
                <?php if(is_home()):?>
                    <h1 class="logo column-1">
                        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                    </h1>
                <?php else:?>
                    <div class="logo column-1">
                        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                    </div>
                <?php endif;?>
                <div class="column-2">
                    <nav id="site-navigation" class="main-navigation row-1 <?php if(exists($tel)||exists($tag))echo "2-row";?>" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    </nav><!-- #site-navigation -->
                </div><!--.column-2-->
            </div><!--.row-2-->
	</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
