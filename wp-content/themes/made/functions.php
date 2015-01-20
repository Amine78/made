<?php 

if(function_exists('add_theme_support')) {
    add_theme_support( 'post-thumbnails' );
}

function cpt_init() {

    $labels = array(
        'name' => 'Ligne 1',
        'singular_name' => 'ligne1',
<<<<<<< HEAD
        'add_new' => 'Ajouter un article',
        'add_new_item' => 'Ajouter une nouvelle photo pour l&apos;article',
        'edit_item' => 'Editer une photo sur l&apos;article',
        'new_item' => 'Nouvelle photo sur l&apos;article',
        'all_items' => 'Tous les articles',
        'view_item' => 'Voir sur l&apos;article',
        'search_items' => 'Chercher photo sur l&apos;article',
        'not_found' =>  'Aucune photo trouvée sur l&apos;article',
        'not_found_in_trash' => 'Aucun article trouvée dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Ajouter un article sur la première ligne'
=======
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
>>>>>>> 09181d819a5e0dbb939b47dbc4881312b0ddd41b
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

<<<<<<< HEAD
    register_post_type('addarticlefirst', $args );


    $labels = array(
        'name' => 'Ajouter un article',
        'singular_name' => 'lignehaut',
        'add_new' => 'Ajouter un article',
        'add_new_item' => 'Ajouter une nouvelle photo pour l&apos;article',
        'edit_item' => 'Editer une photo sur l&apos;article',
        'new_item' => 'Nouvelle photo sur l&apos;article',
        'all_items' => 'Tous les articles',
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
        'all_items' => 'Tous les articles',
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
        'all_items' => 'Tous les articles',
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
=======
    register_post_type('ligne1', $args );
}

add_action('init', 'cpt_init');

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_ligne1-2',
        'title' => 'ligne1',
        'fields' => array (
            array (
                'key' => 'field_546cae7c8a725',
                'label' => 'Texte de l\'article',
                'name' => 'addtext',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array (
                'key' => 'field_546cbaa643737',
                'label' => 'Image de l\'article',
                'name' => 'addimage',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'addarticle',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}
>>>>>>> 09181d819a5e0dbb939b47dbc4881312b0ddd41b
