<?php

function themeslug_enqueue_style() {
    if ( is_child_theme() ) {
        // load parent stylesheet first if this is a child theme
	wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'style.css', false );
	wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'css/bootstrap.css', false );
	wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'css/bootstrap-rtl.css', false );
	wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'css/custom-editor-style.css', false );
	wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'css/font-awesome.min.css', false );
	wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'css/ie.css', false );
	wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'css/pixeden-icons.css', false );
	wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'css/responsive.css', false );
	wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'css/style-mobile.css', false );
	wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'css/zerif_customizer_custom_css.css', false );
    }
    // load active theme stylesheet in both cases
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );



/* Ajout de la zone widget défiscalisé */
if ( function_exists('register_sidebar') ) {

    register_sidebar(array(
		'name' => __( 'slider', 'lmdn' ),
		'id' => 'slider',
		'description' => __( 'Widget de slider', 'lmdn'),
		'before_widget' => '<section class="widget_slider">',
		'after_widget' => '</section>',
		'before_title' => '<h2>',
		'after_title' => '</h2>', 
	) );

    register_sidebar(array(
		'name' => __( 'defiscalise', 'lmdn' ),
		'id' => 'defiscalise',
		'description' => __( 'Widget de defiscalise', 'lmdn'),
		'before_widget' => '<section class="widget_defiscalise" id="defiscalise">',
		'after_widget' => '</section>',
		'before_title' => '<h2>',
		'after_title' => '</h2>', 
	) );

}