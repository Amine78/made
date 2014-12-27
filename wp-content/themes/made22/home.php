<?php get_header(); ?>

<?php $my_query = new WP_Query(array('post_type' => 'addarticlefirst', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '15')); ?>

<div class="slide">
    <div class="container-fluid">

        <!-- Première page -->

            <div class="row">

                <!-- Première ligne -->

                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-1">
                        <div class="view view-first">  
                             <img src='<?php the_field('addimagefirst') ?>'> 
                        </div>
                    </div>
                <?php endwhile; ?>


            </div>

                <!-- Deuxième ligne -->
            <div class="row">


                <?php $my_query = new WP_Query(array('post_type' => 'addarticlesecond', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '15')); ?>

                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-1">
                        <div class="view view-first">  
                             <img src='<?php the_field('addimagesecond') ?>'> 
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>



                <!-- Troisième ligne -->

                <div class="row margin_top">



                    <?php $my_query = new WP_Query(array('post_type' => 'addarticlethird', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '15')); ?>


                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <div class="col-md-1">
                            <div class="view view-first">  
                                <img src='<?php the_field('addimagethird') ?>'>
                            </div>
                        </div>
                    <?php endwhile; ?>


                </div>

                <!-- Quatrième ligne -->

                <div class="row">

                    <?php $my_query = new WP_Query(array('post_type' => 'addarticlefourth', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '15')); ?>


                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <div class="col-md-1">
                            <div class="view view-first">  
                                 <img src='<?php the_field('addimagefourth') ?>'> 
                            </div>
                        </div>
                    <?php endwhile; ?>


                </div>


    </div>

</div>

<!-- Barre logo -->
<div class="block_logo">

  <img src="<?php echo get_template_directory_uri(); ?>/img/logomid.png" alt="logo" id="logomid">

</div>









<?php get_footer(); ?>
