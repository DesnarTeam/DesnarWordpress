<?php
// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain( 'Desnar', TEMPLATEPATH . '/languages' );
 
$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);
 
// Get the page number
function get_page_number() {
    if ( get_query_var('paged') ) {
        print ' | ' . __( 'Page ' , 'Desnar') . get_query_var('paged');
    }
} // end get_page_number
 function desnar_menu(){
		register_nav_menu('primary', 'Top Navigation');	
	}
	add_action('init','desnar_menu');
	
	function desnar_footer_menu(){
		register_nav_menu('Secondary', 'Footer Navigation');	
	} 
	add_action('init','desnar_footer_menu');
	add_theme_support('post-thumbnails');
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );