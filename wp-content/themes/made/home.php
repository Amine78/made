<?php get_header(); ?>

                <!-- Première ligne -->

				<?php $my_query = new WP_Query(array('post_type' => 'addarticlefirst', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '8')); ?>

                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <a href="https://www.youtube.com/watch?v=<?php the_field('addvideofirst')?>" rel="vidbox 800 600"><img class="imgcustom animated fadeIn" src='<?php the_field('addimagefirst') ?>'/></a>

                <?php endwhile; ?>

                <!-- Deuxième ligne -->

                <?php $my_query = new WP_Query(array('post_type' => 'addarticlesecond', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '8')); ?>

                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <a href="https://www.youtube.com/watch?v=<?php the_field('addvideosecond')?>" rel="vidbox 800 600"><img class="imgcustom animated fadeIn" src='<?php the_field('addimagesecond') ?>'/></a>

                <?php endwhile; ?>

                <!-- Troisième ligne -->

                <?php $my_query = new WP_Query(array('post_type' => 'addarticlethird', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '8')); ?>

                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <a href="https://www.youtube.com/watch?v=<?php the_field('addvideothird')?>" rel="vidbox 800 600"><img class="imgcustom animated fadeIn" src='<?php the_field('addimagethird') ?>'/></a>

                <?php endwhile; ?>

                <!-- Quatrième ligne -->

                <?php $my_query = new WP_Query(array('post_type' => 'addarticlefourth', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '7')); ?>

                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <a href="https://www.youtube.com/watch?v=<?php the_field('addvideofourth')?>" rel="vidbox 800 600"><img class="imgcustom animated fadeIn" src='<?php the_field('addimagefourth') ?>'/></a> 

                <?php endwhile; ?>

                <div id="bouton" class="animated fadeIn">
                    <img id="boutnext" class="animated bounceInDown" src='<?php bloginfo('template_directory'); ?>/img/boutnext.png'>
                </div>

<div class="block_logo">

  <img src="<?php echo get_template_directory_uri(); ?>/img/logomid.png" alt="logo" id="logomid">

</div>

<?php get_footer(); ?>