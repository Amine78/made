<?php
/************************************
Template Name: Frontpage Template
************************************/
get_header(); ?>
	
<?php
$id = get_post_thumbnail_id(); // récuper l'id du post en cours par défaut
$bckg = wp_get_attachment_image_src($id,full); // spécifier la taille de l'image à récupérer : thumbnail, medium, large, full
?>

    <div id="headerwrap" style="background-image:url('<?php echo $bckg[0] ?>' ) !important; ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                </div>
            </div><!-- row -->
        </div><!-- /container -->
    </div><!-- /headerwrap -->
    

	<!-- WELCOME SECTION -->
    <div class="container">
      <div class="row mt">
      	<div class="col-lg-12">
	        <h1><?php the_title(); ?></h1>
	        <?php echo wpautop($post->post_content);  ?>
      	</div>
      </div><!-- /row -->
    </div><!-- /.container -->


    <!-- BLOG POSTS -->
    <div class="container">
        <div class="row mt">
            <div class="col-lg-12">
                <h1>Derniers Packs Game'N'Cake Party !</h1>
            </div><!-- col-lg-12 -->
            <div class="col-lg-8">
            </div><!-- col-lg-8-->
            <div class="col-lg-4 goright">
                <p><a href=""><i class="fa fa-angle-right"></i> Voir tous les articles</a></p>
            </div>
        </div><!-- row -->
        

        <div class="row mt">
        <!-- CREER LA BOUCLE DE POST (MAXI 4) -->
            <?php
            $args = array( 'post_type' => 'product', 'stock' => 1,'product_cat' => 'jeu-video', 'posts_per_page' => 4, 'orderby'=>'date','order' => 'DESC');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            <div class="col-lg-3 article">
                    <a id="id-<?php the_id(); ?>" class="portfolio-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium_shop' );
                    echo '<img src="'.$thumb['0'].'" class="img-responsive"/>';
                    ?>
                    <h3><?php the_title(); ?></h3>
                    </a>
                    <p><?php the_excerpt() ?> </p>                    
                    <span class="price"><?php echo $product->get_price_html(); ?></span>
                    <span class="add-to-cart"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></span>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>

        </div><!-- row -->
    </div><!-- container -->


    <!-- BLOG POSTS -->
    <div class="container">
        <div class="row mt">
            <div class="col-lg-12">
                <h1>Dernier Articles</h1>
            </div><!-- col-lg-12 -->
            <div class="col-lg-8">
            </div><!-- col-lg-8-->
            <div class="col-lg-4 goright">
                <p><a href=""><i class="fa fa-angle-right"></i> Voir tous les articles</a></p>
            </div>
        </div><!-- row -->
        

        <div class="row mt">
        <!-- CREER LA BOUCLE DE POST (MAXI 4) -->
        <?php query_posts('posts_per_page=4');
            if ( have_posts() ) : ?>
            <?php /* Start the Loop */ ?>

            <?php while ( have_posts() ) : the_post(); ?> 
                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full', 'post-cat' );
                $url = $thumb['4'];
                ?>
            <div class="col-lg-3 article">
                    <img class="img-responsive" src="" />
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt () ?></p>
                    <p><a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i> En savoir plus</a></p>

            </div>
            <?php endwhile; ?>
                  <?php
                    $loop = new WP_Query( array( 'post_type' => 'editeur', 'posts_per_page' => 10 ) );
                while ( $loop->have_posts() ) : $loop->the_post();
                  the_title();
                  echo '<div>';
                  the_content();
                  echo '</div>';
                endwhile;
?>
                  <?php
                    $loop = new WP_Query( array( 'post_type' => 'jeu ', 'posts_per_page' => 10 ) );
                while ( $loop->have_posts() ) : $loop->the_post();
                  the_title();
                  echo '<div>';
                  the_content();
                  echo '</div>';
                  the_post_thumbnail ();
                  echo "";
                    endwhile;
?>
        <?php endif; // end have_posts() check 
        wp_reset_query(); ?>

        </div><!-- row -->
    </div><!-- container -->

<?php get_footer(); ?>