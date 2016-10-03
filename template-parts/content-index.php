<?php
/**
 * Template part for displaying page content in index.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?>>
    <div class="row-1">
        <div class="column-1">
            <div class="column-1">
                <?php $img = get_field("learn_image");
                $title = get_field("learn_title");
                $tag = get_field("learn_tag");?>
                <?php echo $img;
                if(exists($img)):?>
                    <div class="row-1">
                        <img src="<?php echo wp_get_attachment_image_src($img,"full")[0];?>" alt="<?php echo get_post($img)!==null?get_post($img)->post_title:"";?>">
                    </div><!--.row-1-->
                <?php endif;//if for image?>
                <?php if(exists($title)&&exists($tag)):?>
                    <div class="row-2">
                        <?php if(exists($title)):?>
                            <span class="title">
                                <?php echo $title;?>
                            </span><!--.title-->
                        <?php endif;//if for title?>
                        <?php if(exists($tag)):?>
                            <span class="tag">
                                <?php echo $tag;?>
                            </span><!--.tag-->
                        <?php endif;?>
                    </div><!--.row-2-->
                <?php endif;//if for tittle and tag?>
            </div><!--.column-1-->
            <div class="column-2">
                <?php $img = get_field("plan_image");
                $title = get_field("plan_title");
                $tag = get_field("plan_tag");?>
                <?php if(exists($img)):?>
                    <div class="row-1">
                        <img src="<?php echo wp_get_attachment_image_src($img,"full")[0];?>" alt="<?php echo get_post($img)!==null?get_post($img)->post_title:"";?>">
                    </div><!--.row-1-->
                <?php endif;//if for image?>
                <?php if(exists($title)&&exists($tag)):?>
                    <div class="row-2">
                        <?php if(exists($title)):?>
                            <span class="title">
                                <?php echo $title;?>
                            </span><!--.title-->
                        <?php endif;//if for title?>
                        <?php if(exists($tag)):?>
                            <span class="tag">
                                <?php echo $tag;?>
                            </span><!--.tag-->
                        <?php endif;?>
                    </div><!--.row-2-->
                <?php endif;//if for tittle and tag?>
            </div><!--.column-2-->
            <div class="column-3">
                <?php $img = get_field("act_image");
                $title = get_field("act_title");
                $tag = get_field("act_tag");?>
                <?php if(exists($img)):?>
                    <div class="row-1">
                        <img src="<?php echo wp_get_attachment_image_src($img,"full")[0];?>" alt="<?php echo get_post($img)!==null?get_post($img)->post_title:"";?>">
                    </div><!--.row-1-->
                <?php endif;//if for image?>
                <?php if(exists($title)&&exists($tag)):?>
                    <div class="row-2">
                        <?php if(exists($title)):?>
                            <span class="title">
                                <?php echo $title;?>
                            </span><!--.title-->
                        <?php endif;//if for title?>
                        <?php if(exists($tag)):?>
                            <span class="tag">
                                <?php echo $tag;?>
                            </span><!--.tag-->
                        <?php endif;?>
                    </div><!--.row-2-->
                <?php endif;//if for tittle and tag?>
            </div><!--.column-3-->
        </div><!--.column-1-->
        <div class="column-2">
            <?php $title = get_field("description_header");
            $description = get_field("description_text");?>
            <?php if(exists($title)):?>
                <header>
                    <h2><?php echo $title;?></h2>
                </header>
            <?php endif;//if for title?>
            <?php if(exists($description)):
                echo $description;
            endif;//if for description?>
        </div><!--.column-2-->
    </div><!--.row-1-->
    <div class="row-2">
        <div class="column-1">
            <?php gravity_form( 1, true, true, false, null, false, null, true );?>
        </div><!--.column-1-->
        <div class="column-2">
            <div class="row-1">
                <?php $title = get_field("services_header");?>
                <?php if(exists($title)):?>
                    <header>
                        <h2><?php echo $title;?></h2>
                    </header>
                <?php endif;//if for title ?>
                <?php if(have_rows("services")):?>
                    <div class="services">
                        <?php while(have_rows("services")): the_row();
                            $title = get_sub_field("service_title");
                            $anchor = get_sub_field("anchor_link");?>
                            <div class="service">
                                <?php if(exists($title)):?>
                                    <h3><?php echo $title;?></h3>
                                <?php endif;?>
                                <a class="surrounding" href="<?php echo get_the_permalink();
                                    if(exists($anchor)) echo $anchor;?>">
                                </a>
                            </div><!--.service-->
                        <?php endwhile;?>
                    </div><!--.services-->
                <?php endif;?>
            </div><!--.row-1-->
            <div class="row-2">
                <?php $title = get_field("contact_header");
                $img = get_field("headshot","option");
                $tel = get_field("tel","option");
                $hours_1 = get_field("hours_text_line_1","option");
                $hours_2 = get_field("hours_text_line_2","option");
                $email = get_field("email","option");?>
                <?php if(exists($title)):?>
                    <header>
                        <h2><?php echo $title;?></h2>
                    </header>
                <?php endif;//if for title?>
                <?php if(exists($img)):?>
                    <img src="<?php echo wp_get_attachment_image_src($img,"full")[0];?>" alt="<?php echo get_post($img)!==null?get_post($img)->post_title:"";?>">
                <?php endif;//if for headshot?>
                <?php if(exists($tel)):?>
                    <div class="tel">
                        <i class="fa fa-telephone"></i><?php echo $tel;?>
                    </div><!--.tel-->
                <?php endif;//if for tel?>
                <?php if(exists($hours_1)):?>
                    <div class="hours-1">
                        <?php echo $hours_1;?>
                    </div><!--.hours-1-->
                <?php endif;//if for hours 1?>
                <?php if(exists($hours_2)):?>
                    <div class="hours-2">
                        <?php echo $hours_2;?>
                    </div><!--.hours-2-->
                <?php endif;//if for hours 2?>
                <?php if(exists($email)):?>
                    <div class="email">
                        <i class="fa fa-envelope"></i><?php echo $email;?>
                    </div><!--.email-->
                <?php endif;//if for email?>
                
            </div><!--.row-2-->
        </div><!--.column-2-->
    </div><!--.row-2-->
</article><!-- #post-## -->
