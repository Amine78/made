<?php 

if(function_exists('add_theme_support')) {
    add_theme_support( 'post-thumbnails' );
}

function cpt_init() {

    $labels = array(
        'name' => 'Ajouter un article',
        'singular_name' => 'ligne1',
        'add_new' => 'Ajouter un article',
        'add_new_item' => 'Ajouter une nouvelle photo pour l&apos;article',
        'edit_item' => 'Editer une photo sur l&apos;article',
        'new_item' => 'Nouvelle photo sur l&apos;article',
        'all_items' => 'Tout les articles',
        'view_item' => 'Voir sur l&apos;article',
        'search_items' => 'Chercher photo sur l&apos;article',
        'not_found' =>  'Aucune photo trouvée sur l&apos;article',
        'not_found_in_trash' => 'Aucun article trouvée dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Ajouter un article sur la première ligne'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'addarticle' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'thumbnail')
    );

    register_post_type('addarticlefirst', $args );

    $labels = array(
        'name' => 'Ajouter un article',
        'singular_name' => 'lignehaut',
        'add_new' => 'Ajouter un article',
        'add_new_item' => 'Ajouter une nouvelle photo pour l&apos;article',
        'edit_item' => 'Editer une photo sur l&apos;article',
        'new_item' => 'Nouvelle photo sur l&apos;article',
        'all_items' => 'Tout les articles',
        'view_item' => 'Voir sur l&apos;article',
        'search_items' => 'Chercher photo sur l&apos;article',
        'not_found' =>  'Aucune photo trouvée sur l&apos;article',
        'not_found_in_trash' => 'Aucun article trouvée dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Ajouter un article sur la deuxième ligne'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'addarticle' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'thumbnail')
    );

    register_post_type('addarticlesecond', $args );

    $labels = array(
        'name' => 'Ajouter un article',
        'singular_name' => 'lignehaut',
        'add_new' => 'Ajouter un article',
        'add_new_item' => 'Ajouter une nouvelle photo pour l&apos;article',
        'edit_item' => 'Editer une photo sur l&apos;article',
        'new_item' => 'Nouvelle photo sur l&apos;article',
        'all_items' => 'Tout les articles',
        'view_item' => 'Voir sur l&apos;article',
        'search_items' => 'Chercher photo sur l&apos;article',
        'not_found' =>  'Aucune photo trouvée sur l&apos;article',
        'not_found_in_trash' => 'Aucun article trouvée dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Ajouter un article sur la troisième ligne'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'addarticle' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'thumbnail')
    );

    register_post_type('addarticlethird', $args );

    $labels = array(
        'name' => 'Ajouter un article',
        'singular_name' => 'lignehaut',
        'add_new' => 'Ajouter un article',
        'add_new_item' => 'Ajouter une nouvelle photo pour l&apos;article',
        'edit_item' => 'Editer une photo sur l&apos;article',
        'new_item' => 'Nouvelle photo sur l&apos;article',
        'all_items' => 'Tout les articles',
        'view_item' => 'Voir sur l&apos;article',
        'search_items' => 'Chercher photo sur l&apos;article',
        'not_found' =>  'Aucune photo trouvée sur l&apos;article',
        'not_found_in_trash' => 'Aucun article trouvée dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Ajouter un article sur la quatrième ligne'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'addarticle' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'thumbnail')
    );

    register_post_type('addarticlefourth', $args );
}


add_action('init', 'cpt_init');