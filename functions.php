<?php
add_action('wp_enqueue_scripts','style_theme');

add_action('wp_footer','script_theme');






function style_theme(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'stylers', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'stylers-th', get_template_directory_uri() . '/assets/css/fm.revealator.jquery.min.css' );

	

}


function script_theme(){
	wp_enqueue_script('jq', get_template_directory_uri() . '/assets/js/jquery.min.js');
	wp_enqueue_script('fm.revealator', get_template_directory_uri() . '/assets/js/fm.revealator.jquery.min.js');
	wp_enqueue_script('scripts-Theme', get_template_directory_uri() . '/assets/js/script.js');




}






?>

