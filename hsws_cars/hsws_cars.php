<?php
/*
   Plugin Name: hsws_cars
 */

// Registration & Create POST_TYPE
add_action( 'init', 'register_post_cars', 0 );

function register_post_cars() {
    $args = array(
        'labels' => array(
            'name' => _x( 'Cars', 'Post Type General Name', 'text_domain' ),
            'all_items' => __( 'All Cars' ),
            'add_new' => __( 'Add new car', 'text_domain' ),
              ),
        'description' => '',
        'public' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 20,
        'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
        'map_meta_cap' => null,
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'page-attributes',
            'post-formats',
        ),
        'register_meta_box_cb' => null,
        'taxonomies' => array('taxcars'),
        'has_archive' => false,
        'rewrite' => array(
            'slug' => 'cars',
            'with_front' => false,
            'feeds' => false,
            'pages' => true,
        ),
        'permalink_epmask' => EP_PERMALINK,
        'query_var' => true,
        'can_export' => true,
        'delete_with_user' => null,
        'show_in_rest' => false,
        'rest_base' => $post_type,
        '_builtin' => false,
        );
    register_post_type( 'cars', $args );
}

// Registration & Create TAXONOMY
add_action( 'init', 'create_taxmodels', 0 );

function create_taxmodels() {
    $args = array(
        'label' => _x( 'Models', 'taxonomy general name' ),
        'labels' => array(
            'name' => _x( 'Models', 'taxonomy general name' ),
            'singular_name' => _x( 'Model', 'taxonomy singular name' ),
            'menu_name' => __( 'Models' ),
            ),
        'show_admin_column' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'meta_box_cb' => null,
        'show_admin_column' => true,
        'description' => '',
        'hierarchical' => true,
        'update_count_callback' => '',
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'taxmodels',
            'with_front' => false,
            'hierarchical' => true,
            'ep_mask' => EP_NONE,
        ),

        'sort' => null,
        '_builtin' => false, );

    register_taxonomy( 'taxmodels', array('cars'), $args );
}

require "shortcodes.php";



