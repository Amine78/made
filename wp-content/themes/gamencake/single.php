<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
   <div id="details">
		<div class="container">
        	<div class="row">
            	<div class="col-lg-12">
<h3 style="color:#fff;"><?php the_title(); ?></h3>
                </div>
            </div>
        </div>
    </div>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
     <div class="container">
      <div class="row mt">
      	<div class="col-lg-12">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
      	</div>
      </div><!-- /row -->
    </div><!-- /.container -->
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php endwhile; ?>
<?php get_footer(); ?>