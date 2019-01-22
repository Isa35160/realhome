<?php

add_action('wp_enqueue_scripts', 'insert_css');
function insert_css() {
    // On ajoute le css general du theme
    wp_enqueue_style('style', get_stylesheet_uri());


    //On  ajoute le jQuery au thème
    wp_register_script('jquery2','https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js');
    wp_enqueue_script('jquery2');

    wp_register_script('scroll','https://unpkg.com/scrollreveal/dist/scrollreveal.min.js');
    wp_enqueue_script('scroll');

    // FontAwesome
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );
    wp_enqueue_style('font');

}

add_theme_support('menus');
register_nav_menus(array(
    'menu-principal' => 'Navigation principale',
    'menu-secondaire' => 'Navigation secondaire',
));

add_action("wp_footer", "footer_text");
function footer_text()
{
}

add_theme_support('menus');
register_nav_menus(array(
    'menu-principal' => 'Navigation principale',
    'menu-secondaire' => 'Navigation secondaire',
));


// insertion sidebar back office

if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

// insertion de l'image a la une dans le theme

add_theme_support( 'post-thumbnails' );


function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );




//Custom Post Type
function create_post_type() {
    register_post_type('proprietes',
        array(
            'label' => __('Propriétés'),
            'singular_label' => __('Propriété'),
            'add_new_item' => __( 'Ajouter une propriété' ),
            'edit_item' => __( 'Modifier une propriété' ),
            'new_item' => __( 'Nouvelle propriété' ),
            'view_item' => __( 'Voir la propriété' ),
            'search_items' => __( 'Rechercher une propriété' ),
            'not_found' => __( 'Aucune propriété trouvée' ),
            'not_found_in_trash' => __( 'Aucune propriété trouvée' ),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => true,
            'menu_icon' => 'dashicons-admin-multisite',
            'taxonomies' => array('villes'),
            'supports' => array( 'title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'proprietes', 'with_front' => true)
        )
    );
 register_post_type('agents',
        array(
            'label' => __('Agents'),
            'singular_label' => __('Agent'),
            'add_new_item' => __( 'Ajouter un Agent' ),
            'edit_item' => __( 'Modifier un Agent' ),
            'new_item' => __( 'Nouveau agent' ),
            'view_item' => __( 'Voir' ),
            'search_items' => __( 'Rechercher un agent' ),
            'not_found' => __( 'Aucun agent trouvé' ),
            'not_found_in_trash' => __( 'Aucun agent trouvé' ),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => true,
            'menu_icon' => 'dashicons-groups',
            'taxonomies' => array('postes'),
            'supports' => array( 'title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'agents', 'with_front' => true)
        )
    );


}
add_action( 'init', 'create_post_type' );


//Taxonomie

function themes_taxonomy() {
    register_taxonomy(
        'villes',
        'proprietes',
        array(
            'label' => 'Villes',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'villes',
                'with_front' => true
            ),
            'hierarchical' => true,
        )
    );
    register_taxonomy(
        'postes',
        'agents',
        array(
            'label' => 'Postes',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'postes',
                'with_front' => true
            ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'themes_taxonomy');


// ACF

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));


}