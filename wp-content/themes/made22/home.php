<?php get_header(); ?>

<?php $my_query = new WP_Query(array('post_type' => 'addarticlefirst', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '10')); ?>

<div class="slide">
    <div class="container-fluid">

        <!-- Première page -->

            <div class="row">

                <!-- Première ligne -->

                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-1">
                        <img src='<?php the_field('addimagefirst') ?>'>
                    </div>
                      
                <?php endwhile; ?>


            </div>

                <!-- Deuxième ligne -->
            <div class="row">


                <?php $my_query = new WP_Query(array('post_type' => 'addarticlesecond', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '15')); ?>

                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-1">
                        <img src='<?php the_field('addimagesecond') ?>'>
                    </div>
                <?php endwhile; ?>

            </div>

                <!-- Barre logo -->
                <div class="block_logo">

                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logomid.png" alt="logo" id="logomid"> -->

                </div>


                <!-- Troisième ligne -->

                <div class="row">



                    <?php $my_query = new WP_Query(array('post_type' => 'addarticlethird', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '6')); ?>


                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <div class="col-md-1">
                            <img src='<?php the_field('addimagethird') ?>'>
                        </div>
                    <?php endwhile; ?>


                </div>

                <!-- Quatrième ligne -->

                <div class="row">

                    <?php $my_query = new WP_Query(array('post_type' => 'addarticlefourth', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '6')); ?>


                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <div class="col-md-1">
                            <img src='<?php the_field('addimagefourth') ?>'>
                        </div>
                    <?php endwhile; ?>


                </div>


    </div>

</div>






<?php get_footer(); ?>
