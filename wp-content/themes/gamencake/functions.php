<?php
function header_nav(){
	$defaults = array(
		'theme_location'  => 'header_nav',
		'menu'            => '',
		'container'       => false,
		'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
		'container_id'    => '',
		'menu_class'      => 'nav navbar-nav',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);
	wp_nav_menu($defaults);
}
register_nav_menu('header_nav', 'Menu Header');

/*****************************************************************************************************/
/* Jeu TYPE By AKSONESILP Souphan*/
/*****************************************************************************************************/
add_action('init', 'jeu_init');
function jeu_init(){
register_post_type('jeu', array(
  'label' => __('Jeux'),
  'singular_label' => __('Jeu'),
  'public' => true,
  'show_ui' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'supports' => array('title', 'editor' , 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes')
));
}

/* Taxonomies (a voir si on a besoin d'en rajouter */
/*
register_taxonomy( 'Type', 'produit', array( 'hierarchical' => true, 'Classification' => 'Type', 'query_var' => true, 'rewrite' => true ) );
register_taxonomy( 'Similaire', 'produit', array( 'hierarchical' => false, 'query_var' => true, 'rewrite' => true ) );
}
*/

function showCart(){
	global $woocommerce; ?>
	<li>
		<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e ('Ouvrir le panier', 'woothemes'); ?>">
			<?php if($woocommerce->cart->cart_contents_count == 0)  { echo 'Le panier est vide'; }
			else{echo sprintf(_n('%d article', '%d articles', $woocommerce->cart->cart_contents_count,'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); }?>
		</a>
	</li><?php
}

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );


add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'editeur',
    array(
      'labels' => array(
        'name' => __( 'editeur' ),
        'singular_name' => __( 'editeur' )
      ),
      'public' => true,

    )
  );
  register_taxonomy( 'couleur', 'editeur', array( 'hierarchical' => true, 'label' => 'Couleur', 'query_var' => true, 'rewrite' => true ) );

}

register_post_type('projet', array(
 'label' => __('Projets'),
 'singular_label' => __('Projet'),
 'public' => true,
 'show_ui' => true,
 'capability_type' => 'post',
 'hierarchical' => false,
 'supports' => array('title', 'author', 'thumbnail')
));


?>