

<?php

require_once('class-wp-bootstrap-navwalker.php');

function theme_setup(){
    load_theme_textdomain("landingpage");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'AwesomeDesign' ),
    ) );
}
add_action ("after_setup_theme","theme_setup");

function assets_load(){

    wp_enqueue_style("Awesome",get_stylesheet_uri());
    wp_enqueue_style("bootstrap",get_theme_file_uri("/css/bootstrap.min.css"));
    wp_enqueue_style("slick",get_theme_file_uri("/css//slick.min.css"));
    wp_enqueue_style("animate",get_theme_file_uri("/css//animate.css"));

    wp_enqueue_script("code","//code.jquery.com/jquery-3.3.1.slim.min.js", "", "", true);

    wp_enqueue_script("cdnjs","//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js", "", "", true);

    wp_enqueue_script("bootstrap",get_theme_file_uri("/js/bootstrap.min.js"),array("jquery"),date("ymd-Gis", filemtime( get_template_directory() . '/js/bootstrap.min.js' )), true);

    wp_enqueue_script("slickjs",get_theme_file_uri("/js/slick.min.js"),array("jquery"),date("ymd-Gis", filemtime( get_template_directory() . '/js/slick.min.js' )), true);

    wp_enqueue_script("mainjs",get_theme_file_uri("/js/scripts.js"),array("jquery"),date("ymd-Gis", filemtime( get_template_directory() . '/js/scripts.js' )), true);
    
}
add_action("wp_enqueue_scripts","assets_load");


function search_form($form){


    $new_form= <<<FORM
    <form class="form-inline mr-auto">
     <input class="form-control" type="search" placeholder="search" aria-label="Search" name="s">
    </form> 
    
FORM;

    return $new_form;
}
add_filter("get_search_form","search_form");


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'option',
		'menu_title'	=> 'option',
		'menu_slug' 	=> 'option',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position' => 2
	));
	
}

?>

