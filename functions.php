

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

    wp_enqueue_script("code","//code.jquery.com/jquery-3.3.1.slim.min.js",null, true);
    wp_enqueue_script("cdnjs","//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js",null, true);
    wp_enqueue_script("slickjs",get_theme_file_uri("/js/slick.min.js"),1.0, true);
    wp_enqueue_script("mainjs",get_theme_file_uri("/js/scripts.js"),1.0, true);
    wp_enqueue_script("code",get_theme_file_uri("/js/jquery-3.3.1.slim.min.js"),1.0, true);
}
add_action("wp_enqueue_scripts","assets_load");



// function search ($form){

//     $newfrom = <<<FORM

//     <form class="form-inline mr-auto">
// 	<input class="form-control" type="search" placeholder="Search" aria-label="Search">
// 	</form> 

// FORM;    

//     return $newform;
// }

// add_filter ("get_search_form","search");




// function register_navwalker(){
// 	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// }
// add_action( 'after_setup_theme', 'register_navwalker' );

?>