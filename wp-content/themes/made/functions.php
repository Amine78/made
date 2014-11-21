<?php 

if(function_exists('add_theme_support')) {
    add_theme_support( 'post-thumbnails' );
}

function cpt_init() {

    $labels = array(
        'name' => 'Ligne 1',
        'singular_name' => 'ligne1',
        'add_new' => 'Ajouter sur la ligne 1',
        'add_new_item' => 'Ajouter une nouvelle photo sur sur la ligne 1',
        'edit_item' => 'Editer une photo sur la ligne 1',
        'new_item' => 'Nouvelle photo sur la ligne 1',
        'all_items' => 'Toutes les photos sur la ligne 1',
        'view_item' => 'Voir sur la ligne 1',
        'search_items' => 'Chercher photo sur la ligne 1',
        'not_found' =>  'Aucune photo trouvée sur la ligne 1',
        'not_found_in_trash' => 'Aucune photo trouvée dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Ligne 1'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'ligne1' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'thumbnail')
    );

    register_post_type('ligne1', $args );
}

add_action('init', 'cpt_init');