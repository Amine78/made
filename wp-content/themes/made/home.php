<?php get_header(); ?>

                <!-- Première ligne -->

				<?php $my_query = new WP_Query(array('post_type' => 'addarticlefirst', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '8')); ?>

                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <div class="view view-first">
                        <img class="imgcustom animated fadeIn" src='<?php the_field('addimagefirst') ?>'/>
                        <div class="mask"></div>
                        <div class="content">
                            <h2><?php the_field('nomprenomfirst') ?></h2>
                            <p><?php the_field('descriptiffirst') ?></p>
                            <a href="https://www.youtube.com/watch?v=<?php the_field('addvideofirst')?>" rel="vidbox 800 600" class="info">En savoir plus</a>
                        </div>
                    </div>

                <?php endwhile; ?>

                <!-- Deuxième ligne -->

                <?php $my_query = new WP_Query(array('post_type' => 'addarticlesecond', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '8')); ?>

                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <div class="view view-first">
                        <img class="imgcustom animated fadeIn" src='<?php the_field('addimagesecond') ?>'/>
                        <div class="mask"></div>
                        <div class="content">
                            <h2><?php the_field('nomprenomsecond') ?></h2>
                            <p><?php the_field('descriptifsecond') ?></p>
                            <a href="https://www.youtube.com/watch?v=<?php the_field('addvideosecond')?>" rel="vidbox 800 600" class="info">En savoir plus</a>
                        </div>
                    </div>

                <?php endwhile; ?>

                <!-- Troisième ligne -->

                <?php $my_query = new WP_Query(array('post_type' => 'addarticlethird', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '8')); ?>

                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <div class="view view-first">
                        <img class="imgcustom animated fadeIn" src='<?php the_field('addimagethird') ?>'/>
                        <div class="mask"></div>
                        <div class="content">
                            <h2><?php the_field('nomprenomthird') ?></h2>
                            <p><?php the_field('descriptifthird') ?></p>
                            <a href="https://www.youtube.com/watch?v=<?php the_field('addvideothird')?>" rel="vidbox 800 600" class="info">En savoir plus</a>
                        </div>
                    </div>

                <?php endwhile; ?>

                <!-- Quatrième ligne -->

                <?php $my_query = new WP_Query(array('post_type' => 'addarticlefourth', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '7')); ?>

                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <div class="view view-first">
                        <img class="imgcustom animated fadeIn" src='<?php the_field('addimagefourth') ?>'/>
                        <div class="mask"></div>
                        <div class="content">
                            <h2><?php the_field('nomprenomfourth') ?></h2>
                            <p><?php the_field('descriptiffourth') ?></p>
                            <a href="https://www.youtube.com/watch?v=<?php the_field('addvideofourth')?>" rel="vidbox 800 600" class="info">En savoir plus</a>
                        </div>
                    </div>

                <?php endwhile; ?>

                <div id="bouton" class="animated fadeIn">
                    <img id="boutnext" class="animated bounceInDown" src='<?php bloginfo('template_directory'); ?>/img/boutnext.png'>
                </div>

<div class="block_logo">

  <img src="<?php echo get_template_directory_uri(); ?>/img/logomid.png" alt="logo" id="logomid">

</div>

<?php get_footer(); ?>