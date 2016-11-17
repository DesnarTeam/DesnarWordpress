<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
 
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
 
    <?php wp_head(); ?>
 
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'Desnar' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'Desnar' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
<body>
<div id="wrapper" class="hfeed">
    <div id="header">
        <div id="menu">
            <div id="left-menu">
            <ul>
        		<li><h2><?php bloginfo("name");?></h2></li>
           	  <li><?php wp_nav_menu(array('theme_location'=>'Primary')); ?></li>
             <?php wp_nav_menu(array('theme_location'=>'Secondary')); ?>
             
             </ul>
             </div>
             <div id="right-menu">
             <p> DOWNLOAD</p>
           	</div>
            </div>
                
           <div id="masthead">
 <?php /*?>
            <!--<div id="branding">
                <div id="blog-title"><span><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></span></div>
<?php if ( is_home() || is_front_page() ) { ?>
                    <h1 id="blog-description"><?php bloginfo( 'description' ) ?></h1>
<?php } else { ?>
                    <div id="blog-description"><?php bloginfo( 'description' ) ?></div>
<?php } ?>
            </div><!-- #branding -->--><?php */?>
 
          <?php /*?> <div id="access">
    <div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'Desnar' ) ?>"><?php _e( 'Skip to content', 'Desnar' ) ?></a></div>
    
            
</div><!-- #access --><?php */?>
 
        </div><!-- #masthead -->
    </div><!-- #header -->
 