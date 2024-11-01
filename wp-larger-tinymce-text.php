<?php
/*
    Plugin Name: WP Larger TinyMCE Text
    Plugin URI: http://wordpress.org/extend/plugins/wp-larger-tinymce-text
    Description: WP Larger TinyMCE Text simply makes the text inside TinyMCE a bit bigger which makes it easier for kids to blog - it does not change the text size for display in the rendered page. That's it.
    Version: 0.1
    Author: monkeychubs
    Author URI: http://www.extradev.co.uk
    Disclaimer: Use at your own risk. No warranty expressed or implied is provided.
*/

function wpltt_tinymce_extra_css($tinymce_css){

    if (!empty($tinymce_css)){
        $tinymce_css .= ',';
    }

    $tinymce_css .= plugins_url( '/wpltt_tinymce.css', __FILE__ );

    return $tinymce_css;

}

function wpltt_mce_extra_page_styles(){
	
    echo '<style type="text/css">#menu_content_content_formatselect_menu_tbl{} .wp_themeSkin .mceMenu td {height:28px!important;}</style>';

}

add_action('admin_head', 'wpltt_mce_extra_page_styles');
add_filter( 'mce_css', 'wpltt_tinymce_extra_css' );