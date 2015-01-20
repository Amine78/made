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
